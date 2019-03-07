<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;

class ThemesController extends Controller
{
    //make users be signed in before they can see this page
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    //make users be signed in before they can see this page
    public function __construct()
    {
        $this->middleware('themeManager');
    }



    //Themes: display all themes
    public function index()
    {
        $themes = Theme::all();

        return view('admin/themes/index', compact('themes'));
    }

    //Themes: edit a specific theme
    public function edit($id)
    {
        $theme = Theme::find($id);

        return view('admin/themes/edit', compact('theme'));
    }

    //preform update on the theme (actually change it in the DB)
    public function update(Request $request, Theme $theme)
    {
        $name = $request->name;
        $description = $request->description;
        $cdn_url = $request->cdn_url;
        $id = $request->id;
        $userAdministrator = $request->userAdministrator;
        $postModerator = $request->postModerator;
        $themeManager = $request->themeManager;

        Theme::where('id', $id)->update(['name' => $name, 'description' => $description, 'cdn_url' => $cdn_url]);

        return redirect('admin/themes/index');

    }

    //THEMES: display the 'are you sure you want to delete?' page
    public function delete($id)
    {
        $theme = Theme::find($id);

        return view('admin/themes/delete', compact('theme'));
    }

    //THEMES: preform a SOFT delete
    public function destroy(Request $request, Theme $theme)
    {
        $id = $request->id;

        $theme::destroy($id);

        return redirect('admin/themes/index');

    }

    //THEMES: create a new theme
    public function create()
    {
        //goes to the create new post view (create post form)
        return view('admin/themes/create');
    }

    //THEMES: store the new theme in the DB
    public function store()
    {

        //validate fields
        $this->validate(request(), [
            //use the following rules to validate the request
            'name' => 'required',
            'description' => 'required',
            'cdn_url' => 'required'

        ]);

        Theme::create([

            'name'=> request('name'),
            'description' => request('description'),
            'cdn_url' => request('cdn_url'),

        ]);

        session()->flash(
            'message', 'Your theme has now been published');


        //and then redirect to the home page
        return redirect('admin/themes/index');


    }
}
