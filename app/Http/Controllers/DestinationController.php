<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class DestinationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function moveImage(Request $request, $request_name, $folder_name)
    {
        $file = $request->file($request_name);
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storePubliclyAs("uploads/destinations/$folder_name/", $fileName, 'public');

        return [$file, $fileName];
    }

    public function store(Request $request)
    {
        if ($request->hasFile('thumbnail_img')) {
            $thumbnail = $this->moveImage($request, "thumbnail_img", "thumbnails");
            
            if($request->hasFile('hero_img')) { 
                $hero = $this->moveImage($request, "hero_img", "heros");
           
                $status = ($request->status) ? 1 : 0;

                $destination = new Destination([
                    "category_id" => $request->category_id,
                    "name" => $request->name,
                    "slug" => Str::slug($request->name),
                    "thumbnail_img" => $thumbnail[1],
                    "hero_img" => $hero[1],
                    "fact" => $request->fact,
                    "review" => $request->review,
                    "price" => $request->price,
                    "time" => $request->time,
                    "location" => $request->location,
                    "description" => $request->description,
                    "status" => $status,
                ]);

                $destination->save();
            }
        } 

        // if ($request->hasFile('images')) {
        //     $files = $request->file('images');

        //     foreach($files as $file) {
        //         $fileName = time() . '_' . $file->getClientOriginalName();

        //         $request['destination_id'] = $destination->id;
        //         $request['image'] = $fileName;

        //         $file->move(\public_path("uploads/destinations/images/"), $fileName);

        //         Image::create($request->all());
        //     }
        // }

        return back()->with('success', 'Destination created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destination = Destination::find($id);
        $categories = Category::all();

        return response()->json([
            "destinations" => $destination,
            "categories" => $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $destination = Destination::find($id);
        $thumbnail_path = "uploads/destinations/thumbnails/" . $destination->thumbnail_img;
        $hero_path = "uploads/destinations/heros/" . $destination->hero_img;

        if ($request->hasFile('thumbnail_img')) {
            if(File::exists($thumbnail_path)) {
                File::delete($thumbnail_path);
            }

            $thumbnail = $this->moveImage($request, "thumbnail_img", "thumbnails");
            $request->thumbnail_img = $thumbnail[1];

        }
        
        if ($request->hasFile('hero_img')) {
            if(File::exists($hero_path)) {
                File::delete($hero_path);
            }

            $hero = $this->moveImage($request, "hero_img", "heros");
            $request->hero_img = $hero[1];
        } 


        $status = ($request->status) ? 1 : 0;            

        $destination->update([
            "category_id" => $request->category_id,
            "name" => $request->name,
            "slug" => Str::slug($request->name),
            "thumbnail_img" => $request->thumbnail_img ?? $destination->thumbnail_img,
            "hero_img" => $request->hero_img ?? $destination->hero_img,
            "fact" => $request->fact,
            "review" => $request->review,
            "price" => $request->price,
            "time" => $request->time,
            "location" => $request->location,
            "description" => $request->description,
            "status" => $status,
        ]);

        // if ($request->hasFile('images')) {
        //     $files = $request->file('images');

        //     foreach($files as $file) {
        //         $fileName = time() . '_' . $file->getClientOriginalName();

        //         $request['destination_id'] = $destination->id;
        //         $request['image'] = $fileName;

        //         $file->move(\public_path("uploads/destinations/images/"), $fileName);

        //         Image::create($request->all());
        //     }
        // }

        return back()->with('success', 'Destination updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $destination = Destination::find($id);
        $thumbnail_path = "storage/uploads/destinations/thumbnails/" . $destination->thumbnail_img;
        $hero_path = "storage/uploads/destinations/heros/" . $destination->hero_img;

        if(File::exists($thumbnail_path)) {
            File::delete($thumbnail_path);
        }
        if(File::exists($hero_path)) {
            File::delete($hero_path);
        }
        
        // $images = Image::where("destination_id", $destination->id)->get();

        // foreach($images as $image) {
        //     if(File::exists("uploads/destinations/images/" . $image->image)) {
        //         File::delete("uploads/destinations/images/" . $image->image);
        //     }
        // }

        $destination->delete();

        return back()->with('success', 'Destination deleted successfully');
    }  

}
