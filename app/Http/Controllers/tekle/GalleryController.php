<?php


namespace App\Http\Controllers\tekle;


use App\Gallery;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class GalleryController
{
    public function post()
    {
        $post = POST::get();
        return view('admin.page.gallery', compact('post'));

    }

    public function create(Request $request)
    {

        $drop = Post::whereNull('img')->get();


        if ($request->method() == 'POST') {
            $validated = $request->validate([
                'title' => 'required|max:255',
                'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'description' => 'required|max:255',


            ]);


            if (isset($validated['img'])&&!empty($validated['img'])){
                $path = '/gallery';
                $storage = Storage::disk('public_uploads')->put($path, $validated['img']);

            }


            $post = Gallery::create(['title' => $validated['title'],
                'img' => isset($storage) ? $storage : null,
                'description' => $validated['description'],
            ]);

        }


        return view('admin.page.gallerycreate', compact('drop', 'post'));
    }

    public function multiple(){
        $post = POST::get();
        return view('admin.page.gallerymultiple', compact('post'));
    }
}
