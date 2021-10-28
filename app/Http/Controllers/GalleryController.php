<?php


namespace App\Http\Controllers;


use App\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $gallery = Gallery::paginate(1);
        return view('gallery',compact('gallery'));
    }
}
