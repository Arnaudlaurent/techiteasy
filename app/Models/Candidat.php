<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Candidat
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users__candidats';
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['first_name', 'name', 'email', 'q0', 'q1', 'q2', 'option_tps','updated_at','created_at'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */

    protected $dates = array('created_at', 'updated_at');


}