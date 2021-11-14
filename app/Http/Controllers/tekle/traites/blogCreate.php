<?php


namespace App\Http\Controllers\tekle\traites;


use App\Menu;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

trait blogCreate
{
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
                'type' => 'required|max:255',
                'status' => 'accepted'


            ]);


            if (isset($validated['img'])&&!empty($validated['img'])){
                $path = '/img';
                $storage = Storage::disk('public_uploads')->put($path, $validated['img']);

            }


            $post = Post::create(['title' => $validated['title'],
                'sort' => $validated['sort'],
                'img' => isset($storage) ? $storage : null,
                'menu_item' => $validated['menu_item'],
                'description' => $validated['description'],
                'type' => $validated['type'],
                'status' => $validated['status']== 'on' ? 1 : 0 ,
                'user_id' => Auth::id()
            ]);

        }


        return view('admin.page.blogcreate', compact('drop', 'menuitem'));
    }

}
