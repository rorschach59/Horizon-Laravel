<?php
/**
 * Created by PhpStorm.
 * User: Admin-Rémi
 * Date: 24/11/2017
 * Time: 20:04
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Streamers extends Model
{

    public function streamers()
    {
        return $this->hasMany('App\Streamers');
    }

}