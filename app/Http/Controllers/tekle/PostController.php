<?php


namespace App\Http\Controllers\tekle;

use App\Menu;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{

    public function post()
    {
        $post = Post::get();
        return view('admin.page.blog', compact('post'));

    }

    public function create(Request $request)
    {

        $drop = Post::whereNull('img')->get();
        $menuitem = Menu::all();


        if ($request->method() == 'POST') {
            $validated = $request->validate([
                'title' => 'required|max:255',
                'sort' => 'required|integer|max:11',
                'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'menu_item' => 'required|max:255',
                'description' => 'required|max:255',
                'status' => 'accepted'
            ]);

            if (isset($validated['img'])&&!empty($validated['img'])){
                $path = '/img';
                $storage = Storage::disk('public_uploads')->put($path, $validated['img']);
            }


//    dd($storage);
            $post = Post::create(['title' => $validated['title'],
                'sort' => $validated['sort'],
                'img' => isset($storage) ? $storage : null,
                'menu_item' => $validated['menu_item'],
                'description' => $validated['description'],
                'status' => $validated['status']== 'on' ? 1 : 0 ,
                'user_id' => Auth::id()
            ]);

        }


        return view('admin.page.blogcreate', compact('drop', 'menuitem'));
    }


    public function edit($postId = 0, Request $request)
    {
        $drop = Post::whereNull('img')->get();
        $postedit = Post::where('id', '=', $postId)->first();

        if ($request->method() == 'POST') {
            $validated = $request->validate([
                'title' => 'required|max:255',
                'sort' => 'required|integer|min:1|max:11',
                'img' => 'nullable|max:255',
                'menu_item' => 'required|max:255',
                'description' => 'required|max:255',
                'status' => 'accepted',


            ]);

            Post::whereId($postId)->update(['title' => $validated['title'],
                'sort' => $validated['sort'],
                'img' => $validated['img'] > 0 ? $validated['img'] : null,
                'menu_item' => $validated['menu_item'],
                'description' => $validated['description'],
                'status' => $validated['status']== 'on' ? 1 : 0 ,

            ]);

            return back();
        }


        return view('admin.page.blogedit', compact('postedit', 'drop'));
    }

    public function delete($postId = 0)
    {
        Post::whereId($postId)->delete();
        return back();
    }
}
