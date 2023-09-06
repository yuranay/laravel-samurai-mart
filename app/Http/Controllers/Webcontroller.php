<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Category;

class Webcontroller extends Controller
{
    public function index()
    {
        $categories = Category::all()->sortby('major_category_name');

        $major_category_names = Category::pluck('major_category_name')->unique();

        return view('web.index', compact('major_category_names', 'categories'));
    }
}
