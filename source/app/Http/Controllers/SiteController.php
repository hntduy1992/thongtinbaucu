<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Question;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;
use Symfony\Component\DomCrawler\Crawler;

class SiteController extends Controller
{
    public function home()
    {
        $units = Unit::all();
        $questions = Question::all();
        return Inertia::render('HomePage', ['units' => $units, 'questions' => $questions]);
    }

    public function viewUnit($slug)
    {
//        Validator::make($request->all(), [
//            'slug' => ['required', 'exists:units,slug']
//        ]);
        $unit = Unit::query()->where('slug', $slug)->firstOrFail();
        $locations = Location::query()->where('unit_id', $unit->id)->get();
        return Inertia::render('DonViBauCuPage', ['unit' => $unit, 'locations' => $locations]);
    }

    public function traCuuDiemBoPhieu()
    {
        return Inertia::render('DiemBoPhieu', []);
    }
}
