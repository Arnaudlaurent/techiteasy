<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 06/09/2017
 * Time: 11:51
 */

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Admin extends User implements AuthenticatableContract,
    AuthorizableContract,
    CanResetPasswordContract
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'admin';

    use Authenticatable, Authorizable, CanResetPassword;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['login', 'password'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    public $timestamps = true;
    protected $dates = ['update_at', 'created_at'];

    public function questions()
    {
        return $this->hasManyThrough(Question::class);
    }

    public function questionnaires()
    {
        return $this->hasManyThrough(Questionnaire::class);
    }

    public function users()
    {
        return $this->belongsTo( User::class);
    }
}