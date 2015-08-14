<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

use CodeCommerce\Product;
use CodeCommerce\Tag;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    private $category;
    private $product;

    function __construct(Category $category, Product $product)
    {
        $this->category = $category;
        $this->product = $product;
    }

    public function index()
    {
        $pFeatured = Product::featured()->get();
        $pRecommend = Product::recommend()->get();
        $categories = Category::all();

        return view('store.index', compact('categories','pFeatured','pRecommend'));
    }

    public function category($id)
    {
        $categories = Category::all();
        $category = Category::find($id);
        $products = Product::ofCategory($id)->get();

        return view('store.category', compact('categories','products','category'));
    }

    public function productCategory($id)
    {
        $pCategory = Product::ProductCategory($id)->get();
        $category = $this->category->find($id);
        $categories = Category::all();

        if($category)
        {
            return view('store.category', compact('categories','products','pCategory'));
        }
        return redirect()->route('store.index')->with('category_exist', 'Category not exist!');
    }
}
