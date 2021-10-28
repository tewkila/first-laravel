<?php


namespace App\Http\Controllers;


use App\Footer;

class FooterController extends Controller
{
    public function index()
    {
        $footer = Footer::paginate(1);
        return view('footer',compact('footer'));
    }
}
