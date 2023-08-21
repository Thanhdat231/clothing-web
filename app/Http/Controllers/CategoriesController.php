<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\Categories;
use Illuminate\Http\Request;
use App\Components\dequy;
use Storage;
use Session;

class CategoriesController extends Controller
{
    private $categories;
    public function __construct(Categories $categories)
    {
        $this->categories = $categories;
    }

    public function show_categories(){
     
        return view('dashboard.categories.show-categories');
    }
    public function add_categories(){
        $data = $this->categories->all();
        $dequy = new dequy($data);
        $htmlOption = $dequy->categories_Dequy();
        return view('dashboard.categories.add-categories', compact('htmlOption'));
    }

    public function store_categories(Request $request){
        $this->categories->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => Str::slug($request->name)
        ]);
        return redirect()->route('categories.add-categories');
        
    }

}
