<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class SiteController extends Controller
{
    public function home()
    {
        $units = Unit::all();
        return Inertia::render('HomePage', ['units' => $units]);
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
