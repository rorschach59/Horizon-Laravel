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
                        @foreach($streamers as $streamer)
                            <li>{{ $streamer->username }}</li>
                        @endforeach
                    </ul>
                </div>
                <br/>
                <div class="col-lg-12 col-xs-12 programmation">
                    @foreach($days as $day)
                    <div class="col-lg-1 col-sm-3 col-xs-4 days text-center">
                        <h3 class="{{ $day }}">{{ $day }} <hr/></h3>
                        <div id="lundi"></div>

                    </div>
                    @endforeach
                </div>
            </div>
        </div>

    </section>

@endsection

@section('javascript')
@endsection
