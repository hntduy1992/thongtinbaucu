<?php

namespace App\Http\Controllers;

use App\Models\Khom;
use Illuminate\Http\Request;
use Inertia\Inertia;

class KhomController extends Controller
{
    public function index()
    {
        $khoms = Khom::all();
        return Inertia::render('KhomPage', ['khoms' => $khoms]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'ten' => 'required'
        ]);
        $new = Khom::create(['ten' => $request->input('ten')]);
        if ($new) {
            return redirect()->back()->with('success', 'Thêm mới thành công');
        }
        return redirect()->back()->with('error', 'Thêm mới thất bại');
    }
}
