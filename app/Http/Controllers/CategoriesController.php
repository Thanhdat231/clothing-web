<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function show_categories(){
     
        return view('dashboard.categories.show-categories');
    }
    public function add_categories(){
     
        return view('dashboard.categories.add-categories');
    }
}
