<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Support\Facades\DB;

class Destination extends Model
{
    use HasFactory;

    protected $table = 'destinations';
    protected $guarded = ['id'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('name', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });        
    }

    
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
    
    static public function getDestinationsReview()
    {
        return DB::table('destinations')->select('destinations.id', 'destinations.name', 'destinations.slug', 'destinations.price', 'destinations.time', 'destinations.location', 'destinations.status', 'destinations.created_at', 'categories.name AS category_name', DB::raw('(SELECT AVG(rating) FROM reviews WHERE reviews.destination_id = destinations.id) AS rating'))
        ->join('categories', 'destinations.category_id', '=', 'categories.id')
        ->orderBy('created_at', 'desc')
        ->get();
    }

    static public function getDestinationsReviewWithPaginate($category, $destination, $perPage)
    {
        return DB::table('destinations')->select('destinations.id', 'destinations.name', 'destinations.slug', 'destinations.thumbnail_img', 'destinations.price', 'destinations.time', 'destinations.location', 'destinations.status', 'destinations.created_at', 'categories.name AS category_name', 'categories.slug AS category_slug', DB::raw('(SELECT AVG(rating) FROM reviews WHERE reviews.destination_id = destinations.id) AS rating'))
        ->join('categories', 'destinations.category_id', '=', 'categories.id')
        ->where('categories.name', 'LIKE', '%' . $category . '%')
        ->where('destinations.name', 'LIKE', '%' . $destination . '%')
        ->orderBy('created_at', 'desc')
        ->paginate($perPage);
    }

    static public function getOtherDestinationReview($destination)
    {
        return DB::table('destinations')->select('destinations.id', 'destinations.name', 'destinations.slug', 'destinations.thumbnail_img', 'destinations.price', 'destinations.location', 'destinations.status', 'categories.slug AS category_slug', DB::raw('(SELECT AVG(rating) FROM reviews WHERE reviews.destination_id = destinations.id) AS rating'))
        ->join('categories', 'destinations.category_id', '=', 'categories.id')        
        ->where('destinations.id', '!=', $destination->id)
        ->inRandomOrder()        
        ->limit(3)
        ->get();
    }

}
