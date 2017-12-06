<?php
/**
 * Created by PhpStorm.
 * User: Admin-Rémi
 * Date: 05/12/2017
 * Time: 19:31
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{

    public $table = "images";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_streamer','image'
    ];

    public function planning()
    {
        return $this->hasMany('App\Images');
    }

}