<?php namespace GameJam;

use Illuminate\Database\Eloquent\Model;

use GameJam\Events\ThemeWasSubmitted;
use GameJam\Events\VoteWasAdded;
use GameJam\Events\VoteWasRemoved;

class Theme extends Model {

    protected $table    = 'themes';
    protected $fillable = ['name'];

    /**
     * A theme can have many votes
     */
    public function votes()
    {
        return $this->hasMany(Vote::class);
    }

    /**
     * Submits a new theme
     * @event ThemeWasSubmitted
     * @param  string $email
     * @param  string $password
     * @return User
     */
    public static function submit($name, User $by)
    {
        $theme = Theme::create([
            'name'    => $name
        ]);

        event(new ThemeWasSubmitted($theme->id, $theme->name, $by->id));

        // Add a vote by the user that submitted the theme
        $theme->addVote($by);

        return $theme;
    }

    public function addVote(User $by)
    {
        $vote = Vote::create([
            'theme_id' => $this->id,
            'user_id' => $by->id
        ]);

        event(new VoteWasAdded($this->id, $by->id));

        $this->total_votes += 1;
        $this->save();
    }

    public function votedBy(User $user)
    {
        return $this->votes()->where('user_id', $user->id)->count() > 0;
    }

    public function removeVote(User $by)
    {
        $votes = $this->votes()->where('user_id', $by->id);
        $this->total_votes -= $votes->count();
        $votes->delete();

        event(new VoteWasRemoved($this->id, $by->id));

        $this->save();
    }
}
