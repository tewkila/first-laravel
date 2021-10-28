<?php


namespace App\Http\Controllers\tekle;


use App\Http\Controllers\Controller;
use App\Menu;
use Illuminate\Http\Request;


class MenuController extends Controller
{
    public function index()
    {
        $menu = Menu::paginate(1);

        $menuLanguage = Menu::language()->get();

        return view('menu', compact('menu', 'menuLanguage'));
    }

    public function menu()
    {
        $menu = Menu::get();
        return view('admin.page.menuform', compact('menu'));

    }

    public function create(Request $request)
    {
        $drop = Menu::whereNull('drop_down')->get();

        if ($request->method() == 'POST') {
            $validated = $request->validate([
                'title' => 'required|max:255',
                'sort' => 'required|integer|min:1|max:11',
                'drop_down' => 'nullable|integer|max:20'
            ]);

            $menu = Menu::create(['title' => $validated['title'],
                'sort' => $validated['sort'],
                'drop_down' => $validated['drop_down'] > 0 ? $validated['drop_down'] : null
            ]);

        }


        return view('admin.page.menucreate', compact('drop'));
    }


    public function edit($menuId = 0, Request $request)
    {
        $drop = Menu::whereNull('drop_down')->get();
        $menuedit = Menu::where('id', '=', $menuId)->first();


        if ($request->method() == 'POST') {

            $validated = $request->validate([
                'title' => 'required|max:255',
                'sort' => 'required|integer|min:1|max:11',
                'drop_down' => 'nullable|integer|max:20'
            ]);

            Menu::whereId($menuId)->update(['title' => $validated['title'],
                'sort' => $validated['sort'],
                'drop_down' => $validated['drop_down'] > 0 ? $validated['drop_down'] : null
            ]);

            return back();
        }


        return view('admin.page.menuedit', compact('menuedit', 'drop'));
    }

    public function delete($menuId = 0)
    {
        Menu::whereId($menuId)->delete();
        return back();
    }
}
