<?php
/**
 * Created by PhpStorm.
 * User: Admin-Rémi
 * Date: 25/11/2017
 * Time: 16:03
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{

    public $table = "planning";
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_streamer', 'planning_day', 'week', 'planning_year', 'planning_month', 'hours', 'text', 'image',
    ];

    public function planning()
    {
        return $this->hasMany('App\Planning');
    }

}