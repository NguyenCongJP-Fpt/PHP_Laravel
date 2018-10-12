<?php

namespace App\Http\Controllers;

use App\Slide;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function userIndex()
    {
        $slide = Slide::all();
        //        return view('client.homepage', ['slide'=>$slide]);
        return view('client.homepage', compact('slide'));
    }

    public function userProduct()
    {
        return view('client.ProductPage');
    }

    public function userProductDetail()
    {
        return view('client.ProductDetailPage');
    }
}
