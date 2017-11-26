<?php
/**
 * Created by PhpStorm.
 * User: Admin-Rémi
 * Date: 25/11/2017
 * Time: 16:07
 */

namespace App\Repositories;

use App\Planning;

class PlanningRepository
{

    protected $planning;

    public function __construct(Planning $planning)
    {
        $this->planning = $planning;
    }

    public function savePlanning(Planning $planning, Array $inputs)
    {

//        $inputs['image'] = 'taboucheaude';
        $dateExplode = explode('-', $inputs['date']);
        $inputs['planning_year'] = $dateExplode[0];
        $inputs['planning_month'] = $dateExplode[1];
        $inputs['planning_day'] = $dateExplode[2];
        $inputs['week'] = date('W',strtotime ($inputs['date']));

        $planning->id_streamer = $inputs['id_streamer'];
        $planning->planning_day = $inputs['planning_day'];
        $planning->week = $inputs['week'];
        $planning->planning_year = $inputs['planning_year'];
        $planning->planning_month = $inputs['planning_month'];
        $planning->hours = $inputs['hours'];
        $planning->text = $inputs['text'];
        $planning->image = $inputs['image'];

        $planning->save();
    }

    public function storePlanning(Array $inputs)
    {
        $planning = new $this->planning;
        $this->savePlanning($planning, $inputs);

        return $planning;

    }
}