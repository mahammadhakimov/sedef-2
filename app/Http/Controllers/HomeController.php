<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\Funfact;
use App\Models\OpeningHour;
use App\Models\Post;
use App\Models\Service;
use App\Models\Slider;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Show the landing page with all section data loaded up-front.
     *
     * Every section is fetched in a single query so the Blade view never
     * triggers additional queries while looping (no N+1).
     */
    public function __invoke(): View
    {
        return view('app', [
            'sliders' => Slider::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->get(),

            'openingHours' => OpeningHour::query()
                ->orderBy('sort_order')
                ->get(),

            'services' => Service::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->get(),

            'doctors' => Doctor::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->get(),

            'funfacts' => Funfact::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->get(),

            'departments' => Department::query()
                ->where('is_active', true)
                ->orderBy('sort_order')
                ->get(),

            'posts' => Post::query()
                ->whereNotNull('published_at')
                ->where('published_at', '<=', now())
                ->latest('published_at')
                ->take(3)
                ->get(),
        ]);
    }
}
