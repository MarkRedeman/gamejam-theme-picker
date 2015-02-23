<?php namespace GameJam;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

use GameJam\Events\UserWasMadeAdmin;
use GameJam\Events\UserWasRegistered;
use GameJam\Events\UserWasConfirmed;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword, SoftDeletes;

    protected $dates = ['deleted_at'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token', 'is_admin'];

	/**
	 * The attributes that should be casted to native types.
	 *
	 * @var array
	 */
	protected $casts = [
	    'is_admin'     => 'boolean',
	    'is_confirmed' => 'boolean',
	];

	/**
	 * Make the use an admin
	 * @event UserWasMadAdmin
	 * @return void
	 */
	public function makeAdmin()
	{
		$this->is_admin = true;

		// Notify any services
		event(new UserWasMadeAdmin($this->id));
	}

	/**
	 * Confirm that the user was registered
	 * @event UserWasConfirmed
	 * @return void
	 */
	public function confirm()
	{
		$this->is_confirmed = true;

		// Notify any services
		event(new UserWasConfirmed($this->id));
	}

	/**
	 * Registers a user
	 * @event UserWasMadAdmin
	 * @param  string $email
	 * @param  string $password
	 * @return User
	 */
	public static function register($email, $password)
	{
		$user = User::create([
			'email'    => $email,
			'password' => $password
		]);

		event(new UserWasRegistered($user->id, $user->email));

		return $user;
	}
}
