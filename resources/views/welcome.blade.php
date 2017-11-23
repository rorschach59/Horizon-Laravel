<?php
/**
 * Created by PhpStorm.
 * User: Admin-Rémi
 * Date: 13/11/2017
 * Time: 21:26
 */
?>

@extends('template')

@section('contenu')

    <?php $days = ['days' => 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche']; ?>

    <section id="planning">
        <div class="container-fluid">
            <div class="row programming">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                        Streamers
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <li>Camak</li>
                        <li>Jiji</li>
                        <li>Zerator</li>
                        <li>Skyyart</li>
                    </ul>
                </div>
                <div class="col-lg-12 col-xs-12 programmation">
                    @foreach($days as $day)
                    <div class="col-lg-1 col-sm-3 col-xs-4 days text-center">
                        <h3 class="<?php $day ?>"><?php echo $day; ?> <hr/></h3>
                        <div id="lundi"></div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        {{ Html::image('img/footer.png', 'footer', array('width' => 1050)) }}

    </section>

@endsection

@section('javascript')
@endsection
