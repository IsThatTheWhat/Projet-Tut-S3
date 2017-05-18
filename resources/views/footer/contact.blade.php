@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="css/timeline.css">
@endsection
@section('content')
    <div class="container">
        <div class="timeline-cards">
            <div class="timeline-event">
                <div class="card timeline-content">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/chatonThomas.jpg">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Thomas Pascuzzi<i class="material-icons right">more_vert</i></span>
                        <p>Travail <a>Designer</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><h2>Contact</h2><i class="material-icons right">close</i></span>

                        <p>Email : thomasloremipsum@lol.com</p>
                        <p>Num : 0198237432789</p>
                    </div>
                </div>
                <div class="timeline-badge blue white-text"><i class="material-icons">person</i></div>
            </div>
            <div class="timeline-event">
                <div class="card timeline-content">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="images/chatonYan.jpe">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Livet Yan<i class="material-icons right">more_vert</i></span>
                        <p>Travail <a>Web developper</a></p>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4"><h2>Contact</h2><i class="material-icons right">close</i></span>

                        <p>Email : yanloremipsum@lol.com</p>
                        <p>Num : 0923784739289</p>
                    </div>
                </div>
                <div class="timeline-badge green white-text"><i class="material-icons">person</i></div>
            </div>
        </div>
    </div>
@endsection