<?php


namespace App\Http\Controllers;


use App\Language;

class LanguageController extends Controller
{
    public function index()
    {
//        $language = Language::where('id','=',1)->get();
//        $language = Language::where('id',1)->first();
//        $language = Language::findOrFail(2);
        $language = Language::paginate(1);

//        $language = null;
        return view('111.rame',compact('language'));
    }
}
