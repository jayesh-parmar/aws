<?php

namespace App\Http\Controllers;

use App\Models\CustomerDetail;
use Illuminate\Http\Request;

class CustomerDetailController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'number' => 'required',
        ]);

        CustomerDetail::create($request->all());

        return redirect()->route('form')->with('success' ,"Your form data Submit");
    }
}
