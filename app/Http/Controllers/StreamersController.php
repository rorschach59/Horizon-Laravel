<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanningAddRequest;
use Illuminate\Http\Request;
use App\Repositories\PlanningRepository;
use Illuminate\Support\Facades\Auth;

class StreamersController extends Controller
{

    protected $planningRepository;

    public function __construct(PlanningRepository $planningRepository)
    {
        $this->planningRepository = $planningRepository;
    }

    public function showPlanningForm()
    {
        $user = Auth::user();
        if ($user->getAttributes()['id_streamer'] == 0) {
            return view('notAccess');
        }

        return view('addPlanning');
    }

    public function addPlanning(PlanningAddRequest $request)
    {
        $planning = $this->planningRepository->storePlanning($request->all());

        $image = $request->file('image');

        if($image->isValid())
        {
            $chemin = config('images.path');

            $extension = $image->getClientOriginalExtension();

            $user = Auth::user();

            // Récupére la valeur de l'input date
            $date = $request->only('date');
            $week = date('W',strtotime ($date['date']));

            do {
                $nom = $user->getAttributes()['username'] .'_'.$week.'.'. $extension;
            } while(file_exists($chemin . '/' . $nom));

            if($image->move($chemin, $nom)) {
                // Redirect a la page précédente et affiche le message
                return redirect()->back()->withOk("Votre planning a été mis à jour.");
            }
        }



    }
}
