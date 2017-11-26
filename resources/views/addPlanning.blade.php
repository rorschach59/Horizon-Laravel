<?php
/**
 * Created by PhpStorm.
 * User: Admin-Rémi
 * Date: 25/11/2017
 * Time: 11:52
 */
?>


@extends('template')

@section('contenu')

    {{-- Affiche le message inscrit dans le StreamersController si ok --}}
    @if(session()->has('ok'))
        <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
    @endif

    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Ajouter au planning</div>
            <div class="panel-body">
                <div class="col-sm-12">
                    {!! Form::open(['route' => 'addPlanning', 'files' => 'true', 'class' => 'form-horizontal panel']) !!}
                    <div class="form-group {!! $errors->has('id_streamer') ? 'has-error' : '' !!}">
                        {!! Form::hidden('id_streamer', Auth::user()->id_streamer, ['class' => 'form-control', 'placeholder' => 'Id Streamer']) !!}
                        {!! $errors->first('id_streamer', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('date') ? 'has-error' : '' !!}">
                        {!! Form::date('date', null, ['class' => 'form-control', 'placeholder' => 'Date']) !!}
                        {!! $errors->first('date', '<small class="help-block">:message</small>') !!}
                    </div>
                    {{--<div class="form-group {!! $errors->has('week') ? 'has-error' : '' !!}">--}}
                        {{--{!! Form::text('week', null, ['class' => 'form-control', 'placeholder' => 'Semaine']) !!}--}}
                        {{--{!! $errors->first('week', '<small class="help-block">:message</small>') !!}--}}
                    {{--</div>--}}
                    {{--<div class="form-group {!! $errors->has('planning_year') ? 'has-error' : '' !!}">--}}
                        {{--{!! Form::text('planning_year', null, ['class' => 'form-control', 'placeholder' => 'Année']) !!}--}}
                        {{--{!! $errors->first('planning_year', '<small class="help-block">:message</small>') !!}--}}
                    {{--</div>--}}
                    {{--<div class="form-group {!! $errors->has('planning_month') ? 'has-error' : '' !!}">--}}
                        {{--{!! Form::text('planning_month', null, ['class' => 'form-control', 'placeholder' => 'Mois']) !!}--}}
                        {{--{!! $errors->first('planning_month', '<small class="help-block">:message</small>') !!}--}}
                    {{--</div>--}}
                    <div class="form-group {!! $errors->has('hours') ? 'has-error' : '' !!}">
                        {!! Form::text('hours', null, ['class' => 'form-control', 'placeholder' => 'Heures']) !!}
                        {!! $errors->first('hours', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('text') ? 'has-error' : '' !!}">
                        {!! Form::textarea('text', null, ['class' => 'form-control', 'placeholder' => 'Texte']) !!}
                        {!! $errors->first('text', '<small class="help-block">:message</small>') !!}
                    </div>
                    <div class="form-group {!! $errors->has('image') ? 'has-error' : '' !!}">
                        {!! Form::file('image', null, ['class' => 'form-control', 'placeholder' => 'Image']) !!}
                        {!! $errors->first('image', '<small class="help-block">:message</small>') !!}
                    </div>
                    {!! Form::submit('Envoyer', ['class' => 'btn btn-primary pull-right']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>

@endsection
