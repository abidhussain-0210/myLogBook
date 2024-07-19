<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Tag;

// Controller For FrontEnd

class MainController extends Controller
{
    public function index()
    {
        
        $products = Product::where('status', 'ACTIVE')->where('id' , 16)->limit(1)->get();
        $images = Product::where('status', 'ACTIVE')->get();
        $tags = Tag::latest()->limit(1)->get();
        $tagnames = Tag::get();
        $categories = Category::limit(1)->latest()->get();
        $Allcategories = Category::get();
        return view('index')->with(compact('products' , 'images' , 'tags' , 'categories' , 'tagnames' , 'Allcategories'));

       
    }
    public function about()
    {
        return view('pages.about');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function indexFull()
    {
        return view('pages.index-full');
    }
    public function indexLeftSidebar()
    {
        return view('pages.index-full-left');
    }
    public function indexRightSidebar()
    {
        return view('pages.index-full-right');
    }
    public function indexListStyle()
    {
        return view('pages.index-list');
    }
    public function indexListLeft()
    {
        return view('pages.index-list-left');
    }
    public function indexListRight()
    {
        return view('pages.index-list-Right');
    }
    public function author(){
        return view('pages.author');
    }
    public function postDetails1(){

        $products = Product::where('status' , 'ACTIVE')->limit(1)->get();
        return view('pages.post-details-1')->with(compact('products'));
    }

    public function postDetails2(){
        $products = Product::where('status' , 'ACTIVE')->limit(1)->get();
        return view('pages.post-details-2')->with(compact('products'));
    }
    public function postElement(){
         $products = Product::where('status' , 'ACTIVE')->limit(1)->get();
        $images = Product::where('status', 'ACTIVE')->get();
        return view('pages.post-elements')->with(compact('products' , 'images'));
    }
    public function privacyPolicy(){
        return view('pages.privacy-policy');
    }
    public function termsCondition(){
        return view('pages.terms-conditions');
    }
}
