<?php namespace GameJam\Http\Controllers\Admin;

use GameJam\Http\Controllers\Controller;
use GameJam\Theme;

class ThemesController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | themes Controller
    |--------------------------------------------------------------------------
    |
    | This controller gives admins an overview of current themes.
    | It has the ability to delete themes
    |
    */

    public function index()
    {
        $themes = Theme::all();

        return view('admin.themes.index')
            ->with('themes', $themes);
    }

}
