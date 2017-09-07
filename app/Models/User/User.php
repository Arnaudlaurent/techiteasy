<?php

namespace App\Models\User;


use App\Models\Admin;
use App\Models\Candidat;
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
    protected $fillable = ['email'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public $timestamps = true;
    protected $dates = ['update_at', 'created_at'];

    public function admins()
    {
        return $this->hasMany(Admin::class);
    }
    public function candidats()
    {
        return $this->hasMany(Candidat::class);
    }
}
