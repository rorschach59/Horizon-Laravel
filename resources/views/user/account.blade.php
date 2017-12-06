<?php
/**
 * Created by PhpStorm.
 * User: Admin-Rémi
 * Date: 29/11/2017
 * Time: 20:39
 */
?>

@extends('template')



@section('contenu')



    @if(Auth::guest())
        <p>Vous pouvez vous connecter <a href="{{ route('login') }}">ici</a></p>
    @else
        <p>Nom d'utilisateur : {{ Auth::user()->username }}</p>
        {{--<p>Nom d'utilisateur : {{ $user->getAttributes()['username'] }}</p>--}}
    @endif

@endsection
