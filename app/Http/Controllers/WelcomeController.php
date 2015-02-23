<?php namespace GameJam\Http\Controllers;

use GameJam\Theme;
use Auth;

class WelcomeController extends Controller {

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        $themes = Theme::orderBy('total_votes', 'desc')->paginate(15);

		return view('welcome.rankings')
            ->with('themes', $themes)
            ->with('user', Auth::user());
	}

}
