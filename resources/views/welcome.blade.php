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
                @foreach($streamers as $streamer)
                <a href="?streamer={{ $streamer->username }}">{{ $streamer->username }}</a>
                @endforeach
                {!! Form::open(['route' => 'postForm', 'id' => 'formChangeProgram']) !!}
                {!! Form::text('streamers', null, ['class' => 'form-control', 'placeholder' => 'Streamer name']) !!}
                {!! $errors->first('streamers', '<small class="help-block">:message</small>') !!}
                    {{--<select name="streamers" id="streamers" onchange="submitForm();">--}}
                        {{--@foreach($streamers as $streamer)--}}
                            {{--<option value="{{ $streamer->username }}">{{ $streamer->username }}</option>--}}
                        {{--@endforeach--}}
                    {{--</select>--}}
                {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
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

    <script>
        function submitForm() {
            // $('#formChangeProgram').preventDefault();
            $('#formChangeProgram').submit()
        }

    </script>


@endsection
