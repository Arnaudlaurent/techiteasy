<?php

namespace App\Models\User;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


abstract class User extends Model
{

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
    protected $fillable = ['login', 'password', 'email'];

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
        return $this->hasMany(Question::class);
    }

    public function questionnaires()
    {
        return $this->hasMany(Questionnaire::class);
    }
}
