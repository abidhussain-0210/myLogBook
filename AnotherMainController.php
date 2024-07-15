<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnotherMainController extends Controller
{
    public function index()
    {
    	return view('index');
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
        return view('pages.post-details-1');
    }
    public function postDetails2(){
        return view('pages.post-details-2');
    }
    public function postElement(){
        return view('pages.post-elements');
    }
    public function privacyPolicy(){
        return view('pages.privacy-policy');
    }
    public function termsCondition(){
        return view('pages.terms-conditions');
    }
}
