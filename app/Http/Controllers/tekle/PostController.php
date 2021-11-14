<?php


namespace App\Http\Controllers\tekle;

use App\Http\Controllers\tekle\traites\blogEdit;
use App\Http\Controllers\tekle\traites\blogCreate;
use App\Http\Controllers\tekle\traites\exmple;
use App\Menu;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller implements exmple //interface - კლასის შემადგენელი ნაწილი რომელიც  ფუნქციებს ინახავს და რომ გვჭირდება ვიყენებთ.
{
use blogEdit; //trait - კლასის შემადგენელი ნაწილი, დამოუკიდებელი შვილობილი.
use blogCreate;
    public function post()
    {
        $post = POST::where('type', '!=', 'news')->get();
        return view('admin.page.blog', compact('post'));

    }


    public function delete($postId = 0)
    {
        Post::whereId($postId)->delete();
        return back();
    }

    //interface-ის აბსტრაქტული ფუნქცია (მასში შემავალი)
    public function something()
    {
        // TODO: Implement something() method.
    }

    public function news()
    {
        $menuitem = Menu::all();
        $news = Post::where('type', '=', 'news')->get();
        return view('admin.page.newscreate', compact('news', 'menuitem'));

    }

    public function newsPost(){
        $post = POST::where('type', '=', 'news')->get();
        return view('admin.page.news', compact('post'));
    }

    public function newsEdit($postId = 0){
        $drop = Post::whereNull('img')->get();
        $postedit = Post::where('id', '=', $postId)->first();
        return view('admin.page.newsedit', compact('postedit', 'drop'));
    }
}
