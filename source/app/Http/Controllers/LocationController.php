<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;

class LocationController extends Controller
{
    public function index()
    {
        $units = Unit::query()->get(['id', 'name']);
        $locations = Location::all();
        return Inertia::render('Location/LocationIndexPage', ['locations' => $locations,'units'=>$units]);
    }

    public function create()
    {
        $units = Unit::query()->get(['id', 'name']);
        return Inertia::render('Location/LocationCreatePage', ['units' => $units]);
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'name' => 'required',
            'file' => 'sometimes|mimes:pdf|max:10240',
            'img' => 'sometimes|mimes:jpg,jpeg,png|max:2048',
        ], [
            'name.required' => 'Vui lòng không bỏ trống',
            'file.mimes' => 'File phải là pdf',
            'file.max' => 'File quá lớn (<=10MB)',
            'img.mimes' => 'Hình ảnh không hợp lệ',
            'img.max' => 'Hình quá lớn quá lớn',
        ])->validated();

        $slug = Str::slug($request->input('name'));

        $locationNew = [
            'name' => $request->input('name'),
            'slug' => $slug,
            'address' => $request->input('address'),
            'region' => $request->input('region'),
            'phone' => $request->input('phone'),
            'scope' => $request->input('scope'),
            'latitude' => $request->input('latitude'),
            'longitude' => $request->input('longitude'),
            'file' => '',
            'img' => '',
        ];


        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $slug . '-' . Str::lower(Str::random(5));
            $extension = $file->getClientOriginalExtension();
            $locationNew->file = $file->storeAs('files/kvbp', $fileName . '.' . $extension, 'public');
        }
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = $slug . '-' . Str::lower(Str::random(5));
            $extension = $file->getClientOriginalExtension();
            $locationNew->img = $file->storeAs('images/kvbp/chi-tiet', $fileName . '.' . $extension, 'public');
        }

        if (Location::create($locationNew)) {
            return back()->with(['type' => 'success', 'message' => 'Thêm mới thành công']);
        }
        return back()->with(['type' => 'error', 'message' => 'Thêm mới thất bại']);
    }
}
