<?php


// app/Http/Controllers/CategoryController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // This is where you'd normally fetch categories from the database
        return view('categories.index');
    }

    public function show($category)
    {
        // This is where you'd normally fetch a specific category from the database
        return view('categories.show', compact('category'));
    }
}
