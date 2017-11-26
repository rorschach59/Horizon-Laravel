<?php

namespace App\Http\Controllers;

use App\Repositories\StreamersRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{

    protected $streamersRepository;

    public function __construct(StreamersRepository $streamersRepository)
    {
        $this->streamersRepository = $streamersRepository;
    }

    public function index()
    {
        // Récupère la fonction get() depuis Repositories/StreamersRepositories qui permet d'avoir la liste de tous les streamers
        $streamers = $this->streamersRepository->get();

        // Récupère directement tous les stramers
//        $streamers = DB::table('streamers')->get();

//        foreach ($streamers as $streamer) {
//            var_dump($streamer->username);
//        }
        // Récupère un streamer en particulier
//        $streamer = $this->streamersRepository->getById('1');

//        return view('welcome',  compact('streamers','streamer'));

        // Récupére l'utilisateur connecté
//        $user = Auth::user();
//        if ($user->getAttributes()['id_streamer'] != 0) { var_dump('toto'); }


        return view('welcome',  compact('streamers'));
    }
}
