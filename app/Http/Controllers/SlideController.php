<?php


namespace App\Http\Controllers;


use App\Slide;

class SlideController extends Controller
{
    public function index()
    {
        $slide = Slide::paginate(1);
        return view('welcome');
    }
}
