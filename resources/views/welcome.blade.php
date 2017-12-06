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
                {!! Form::open(['route' => 'Postacceuil', 'id' => 'formChangeProgram']) !!}
                    <select name="streamers" id="streamers" onchange="document.getElementById('formChangeProgram').submit()">
                        @foreach($streamers as $streamer)
                            <option value="{{ $streamer->username }}">{{ $streamer->username }}</option>
                        @endforeach
                    </select>
                {!! Form::close() !!}
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
