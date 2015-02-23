<?php namespace GameJam\Http\Controllers;

class HomeController extends Controller {

    public function __construct()
    {
        $this->middleware('guest');
    }

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.home');
	}

}
