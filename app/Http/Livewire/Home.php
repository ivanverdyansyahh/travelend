<?php

namespace App\Http\Livewire;

use App\Models\Destination;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        $popular_destinations = Destination::getPopularDestinationReview();

        return view('livewire.home', compact('popular_destinations'));
    }
}
