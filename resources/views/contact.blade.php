@extends('layout')

@section('content')

    <div class="container">
        <div class="head-title">
            <h3>Contacts</h3>
        </div>
        <div class="info-content">

            <div class="row info-item">
                <div class="col-md-1 col-md-offset-3 col-sm-2 col-sm-offest-2 col-xs-4">
                    <span>Facebook:</span>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6">
                    <span><a class="myname" href="https://www.facebook.com/artyom.loban">Artem Loban</a></span>
                </div>
            </div>
            <div class="row info-item">
                <div class="col-md-1 col-md-offset-3 col-sm-2 col-sm-offest-2 col-xs-4">
                    <span>Email:</span>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-6">
                    <span class="email">tymanrock@gmail.com</span>
                </div>
            </div>
        </div>

        <div class="map">
            <iframe class="map-frame" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d58894.47739246474!2d35.13249600950968!3d47.81904698409624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1528719482103" frameborder="0"allowfullscreen></iframe>
        </div>

    </div>

@endsection