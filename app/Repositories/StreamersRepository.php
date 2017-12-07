<?php
/**
 * Created by PhpStorm.
 * User: Admin-Rémi
 * Date: 24/11/2017
 * Time: 20:17
 */

namespace App\Repositories;

use App\Streamers;
use App\Planning;

class StreamersRepository {

    protected $streamers;

    public function __construct(Streamers $streamers)
    {
        $this->streamers = $streamers;
    }

    public function get()
    {
        // Retourne tout les streamers
        return \DB::table('streamers')->get();
    }

    public function getById($id)
    {
        // Récupère un streamer en particulier
        return $streamers = \DB::table('streamers')->whereId($id)->first();
    }

    public function getIdStreamer($name)
    {
        // Récupère un streamer en particulier
        return \DB::table('streamers')
            ->select('id')
            ->where('username','=',$name)->first();
    }

    public function getStreamerPlanning($id)
    {
        return \DB::table('planning')->where('id_streamer','=',$id)->get();
    }

}