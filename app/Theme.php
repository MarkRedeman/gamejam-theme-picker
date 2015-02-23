<?php namespace GameJam;

use Illuminate\Database\Eloquent\Model;

use GameJam\Events\ThemeWasSubmitted;

class Theme extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'themes';

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

        return $theme;
    }
}
