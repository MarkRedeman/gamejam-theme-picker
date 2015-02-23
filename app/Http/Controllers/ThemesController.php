<?php namespace GameJam\Http\Controllers;

use GameJam\Http\Requests\SubmitThemeRequest;
use GameJam\Http\Requests\VoteRequest;
use Auth;

use GameJam\Theme;
use GameJam\Vote;

class ThemesController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        $themes = Theme::orderBy('total_votes', 'desc')->paginate(20);

        return view('welcome.rankings')
            ->with('themes', $themes)
            ->with('user', Auth::user());
    }

    public function store(SubmitThemeRequest $request)
    {
        Theme::submit($request->name, Auth::user());

        flash()->success('Your theme has been submitted.');

        return redirect('/');
    }

    public function vote($theme, VoteRequest $request)
    {
        $theme = Theme::find($theme);
        $vote = $theme->addVote(Auth::user());

        flash()->success('Your vote has been added.');

        return redirect('/');
    }

    public function deleteVote($theme, VoteRequest $request)
    {
        $theme = Theme::find($theme);
        $vote = $theme->removeVote(Auth::user());

        flash()->success('Your vote has been deleted.');

        return redirect('/');
    }

}
