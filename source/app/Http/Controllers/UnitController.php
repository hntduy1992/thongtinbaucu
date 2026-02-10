<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Inertia\Inertia;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::all();
        return Inertia::render('Unit/UnitIndexPage', [
            'units' => $units
        ]);
    }

    public function create()
    {
        return Inertia::render('Unit/CreatePage', []);
    }

    public function store(Request $request)
    {
        Validator::make($request->all(), [
            'file' => 'file',
            'img' => 'file'
        ]);
        $slug = Str::slug($request->name);
        $newUnit = [
            'name' => $request->input('name'),
            'slug' => $slug,
            'file' => '',
            'img' => ''
        ];


        if ($request->hasFile('file')) {
            $file = $request->file('file');
            $fileName = $slug . '-' . Str::lower(Str::random(5));
            $extension = $file->getClientOriginalExtension();
            $newUnit->file = $file->storeAs('files', $fileName . '.' . $extension, 'public');
        }
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = $slug . '-' . Str::lower(Str::random(5));
            $extension = $file->getClientOriginalExtension();
            $newUnit->img = $file->storeAs('images', $fileName . '.' . $extension, 'public');
        }

        if (Unit::create($newUnit)) {
            return redirect('unit.index')->with(['type' => 'success', 'message' => 'Thêm thành công']);
        }
        return back()->with(['type' => 'error', 'message' => 'Thêm thất bại']);
    }
}
