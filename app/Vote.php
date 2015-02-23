<?php namespace GameJam;

use Illuminate\Database\Eloquent\Model;


class Vote extends Model {

    protected $fillable = ['user_id' , 'theme_id'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'votes';

    /**
     * A vote belongs to a theme
     */
    public function theme()
    {
        return $this->belongsTo(Theme::class);
    }
}
