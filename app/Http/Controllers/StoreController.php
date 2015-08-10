<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use CodeCommerce\Category;

class StoreController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('store.index', compact('categories'));
    }
}
