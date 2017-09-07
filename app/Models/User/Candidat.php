<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 06/09/2017
 * Time: 11:51
 */

namespace App\Models;

class Candidat extends User
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'candidats';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['q0', 'q1', 'q2', 'option_tps'];
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    public $timestamps = true;
    protected $dates = ['update_at', 'created_at'];

    public function users()
    {
        return $this->belongsTo( User::class);
    }
}