<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    public function index()
    {
        return Gender::all();
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Gender $gender)
    {
        //
    }

    public function update(Request $request, Gender $gender)
    {
        //
    }

    public function destroy(Gender $gender)
    {
        //
    }
}
