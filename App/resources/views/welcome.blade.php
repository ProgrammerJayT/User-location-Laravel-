@extends('layout')

@section('title', 'Welcome')

@section('body')

    <body style="height: 100%;margin-top: 100px;">
        <div
            class="d-flex d-xl-flex flex-column justify-content-center align-items-center align-items-xl-center justify-content-xxl-center">
            <div class="d-xl-flex flex-column align-items-xl-center">
                <img src="assets/img/Current%20location-bro.png" style="width: 300px;">
            </div>
            <div class="d-flex d-xl-flex flex-column align-items-center align-items-xl-center" style="margin-top: 50px;">
                <p id="message" style="width: 100%;text-align: center;font-weight: bold;">Ensure that location permissions are allowed</p>
                <a class="btn" role="button" onclick="getLocation()"
                    style="background: #FFC100;border-style: none;color: var(--bs-gray-100);border-radius: 15px;padding-right: 15px;padding-left: 15px;">Get
                    Started</a>
            </div>
        </div>

    @endsection
