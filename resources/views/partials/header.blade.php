{{-- <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Serbees</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js,then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>
        <!-- Font Awesome CDN -->
        <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/header.css') }}" type="text/css">
    </head> --}}
@extends('layouts.app')
@section('header')
<div class="main-nav">
    <div class="bgmid"></div>
        <header class="myHeader">
            <div class="myNavbar">
                <img class="landinglogo" src="{{ asset('images/white-logo.png') }}">
                <nav class="navmenu">
                    <ul class="landingmenu">
                        <li><a class="aa"href="#">HOME</a></li>
                        <li><a class="aa"href="#">HOW IT WORKS</a></li>
                        <li><a class="aa"href="#">FAQ</a></li>
                        <li><a class="aa"href="#">BE A PROVIDER</a></li>
                    </ul>
                </nav>
            </div> 
        </header>
    </div>
    <div class="burger">
        <div class="burger-top">
            <div class="b1">
                <img class="landinglogo-burger" src="{{ asset('images/white-logo.png') }}">
            </div>
            <div class="b2" onclick="openNav()"style="padding-top:20px;padding-right:20px;font-weight:600;cursor: pointer;">
                <span style="font-size: 1.2rem;font-weight: 700;" 
                >&#9776;</span>
            </div>
        </div>
        <div id="myNav" class="overlay">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <img class="landinglogo-serbees" src="{{ asset('images/white-logo.png') }}">
                    <a href="#">HOME</a>
                    <a href="#">SERVICES</a>
                    <a href="#">BOOK A SERVICE</a>
                    <a href="#">HOW IT WORKS</a>
                    <a href="#">FAQ</a>
                    <button class="register-provider-btn" >BE A PROVIDER</button>
                </div>
        </div>
    </div>
   
@endsection