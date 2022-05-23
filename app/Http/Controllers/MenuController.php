<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menus;
use App\Models\Product;
use App\Models\Category;
use CoreComponentRepository;

class MenuController extends Controller
{
    public function create(){
        CoreComponentRepository::initializeCache();

        $categories = Category::where('parent_id', 0)
            ->where('digital', 0)
            ->with('childrenCategories')
            ->get();

        // return view('backend.product.products.create', compact('categories'));
        return view('backend.menu.menus.create', compact('categories'));
    }
    
}
