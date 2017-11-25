<?php
/**
 * Created by PhpStorm.
 * User: Admin-Rémi
 * Date: 24/11/2017
 * Time: 20:17
 */

namespace App\Repositories;

use App\Streamers;

class StreamersRepository {

    protected $streamers;

    public function __construct(Streamers $streamers)
    {
        $this->streamers = $streamers;
    }

    /**
     * @return Streamers
     */
    public function getStreamers()
    {
        return $this->streamers;
    }

    public function get()
    {
        // Retourne tout les streamers
        return $streamers = \DB::table('streamers')->get();
    }

    public function getById($id)
    {
        // Récupère un streamer en particulier
        return $streamers = \DB::table('streamers')->whereId($id)->first();
    }

}