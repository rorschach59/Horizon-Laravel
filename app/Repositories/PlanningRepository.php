<?php
/**
 * Created by PhpStorm.
 * User: Admin-Rémi
 * Date: 25/11/2017
 * Time: 16:07
 */

namespace App\Repositories;

use App\Planning;
use App\Images;
use Illuminate\Support\Facades\Auth;

class PlanningRepository
{

    protected $planning;
    protected $images;

    public function __construct(Planning $planning, Images $images)
    {
        $this->planning = $planning;
        $this->images = $images;
    }

    public function savePlanning(Planning $planning, Images $images, Array $inputs)
    {

        $dateExplode = explode('-', $inputs['date']);
        $inputs['planning_year'] = $dateExplode[0];
        $inputs['planning_month'] = $dateExplode[1];
        $inputs['planning_day'] = $dateExplode[2];
        $inputs['week'] = date('W',strtotime ($inputs['date']));

//        $user = Auth::user();
//        $chemin = config('images.path').'/'.$user->getAttributes()['username'];
        $image = $inputs['image'];

        $extension = $image->getClientOriginalExtension();

        $nom = $nom = str_random(10) . '.' . $extension;

        $images->id_streamer = $inputs['id_streamer'];
        $images->image = $nom;

        $images->save();

        $planning->id_streamer = $inputs['id_streamer'];
        $planning->planning_day = $inputs['planning_day'];
        $planning->week = $inputs['week'];
        $planning->planning_year = $inputs['planning_year'];
        $planning->planning_month = $inputs['planning_month'];
        $planning->hours = $inputs['hours'];
        $planning->text = $inputs['text'];
        $planning->id_image = $images->id;

        $planning->save();
    }

    public function storePlanning(Array $inputs)
    {
        $planning = new $this->planning;
        $images = new $this->images;
        $this->savePlanning($planning, $images, $inputs);

        return $planning;

    }
}