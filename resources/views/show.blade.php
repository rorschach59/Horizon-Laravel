<?php
/**
 * Created by PhpStorm.
 * User: Admin-Rémi
 * Date: 15/11/2017
 * Time: 22:19
 */
?>

@extends('template')

@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">
            <div class="panel-heading">Fiche d'utilisateur</div>
            <div class="panel-body">
                <p>Pseudo : {{ $user->username }}</p>
                <p>Email : {{ $user->email }}</p>
                @if($user->admin == 1)
                    Administrateur
                @endif
            </div>
        </div>
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
@endsection
