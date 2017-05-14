@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col s12">
                <div class="card asso__presentation">
                    <div class="card-image">
                        <img src="images/background5.JPG" class="asso__banner">
                        <span class="card-title"><img src="images/logoabii.jpg" alt="" class="circle img-responsive"></span>
                        <a class="btn-large btn-floating halfway-fab waves-effect waves-light red pulse"><i class="material-icons">favorite</i></a>
                    </div>
                    <div class="card-content">
                        <div class="row">
                            <div class="col s8 offset-s2">
                                <div class="row">
                                    <div class="col m3 s6 center-align">
                                        <p class="medium-small grey-text">Association</p>
                                        <h4 class="card-title grey-text text-darken-4">ABII</h4>
                                    </div>
                                    <div class="col m3 s6 center-align">
                                        <p class="medium-small grey-text">Département</p>
                                        <h4 class="card-title grey-text text-darken-4">IUT</h4>
                                    </div>
                                    <div class="col m3 s6 center-align">
                                        <p class="medium-small grey-text">Prochain évent</p>
                                        <h4 class="card-title grey-text text-darken-4">Portes ouvertes</h4>
                                    </div>
                                    <div class="col m3 s6 center-align">
                                        <p class="medium-small grey-text">Membres</p>
                                        <h4 class="card-title grey-text text-darken-4">408</h4>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col m7 s12">
                <ul class="collapsible" data-collapsible="accordion">
                    <li>
                        <div class="collapsible-header">
                            <i class="material-icons">filter_drama</i>
                            Event 1
                            <i class="material-icons right">keyboard_arrow_down</i>
                        </div>
                        <div class="collapsible-body">
                            <span>
                                <div class="card horizontal">
                                    <div class="card-image">
                                        <img src="http://lorempixel.com/100/190/nature/6">
                                    </div>
                                    <div class="card-stacked">
                                        <div class="card-content">
                                            <p>I am a very simple card. I am good at containing small bits of information.</p>
                                        </div>
                                        <div class="card-action">
                                            <a href="#">This is a link</a>
                                        </div>
                                    </div>
                                </div>
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">place</i>Event 2<i class="material-icons right">keyboard_arrow_down</i></div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Event 3<i class="material-icons right">keyboard_arrow_down</i></div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Event 3<i class="material-icons right">keyboard_arrow_down</i></div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Event 3<i class="material-icons right">keyboard_arrow_down</i></div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Event 3<i class="material-icons right">keyboard_arrow_down</i></div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                    <li>
                        <div class="collapsible-header"><i class="material-icons">whatshot</i>Event 3<i class="material-icons right">keyboard_arrow_down</i></div>
                        <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                    </li>
                </ul>
            </div>
            <div class="col m5 s12">
                <div class="card">
                    <div class="card-content">
                        <p>Infos sur l'asso</p>
                    </div>
                    <div class="card-tabs">
                        <ul class="tabs tabs-fixed-width">
                            <li class="tab"><a href="#test4">Le mot du prés</a></li>
                            <li class="tab"><a class="active" href="#test5">Test 2</a></li>
                            <li class="tab"><a href="#test6">Contacts</a></li>
                        </ul>
                    </div>
                    <div class="card-content grey lighten-4">
                        <div id="test4">Ici le mot du pres</div>
                        <div id="test5">Test 2</div>
                        <div id="test6">Ici les contacts</div>
                    </div>
                </div>
                <div class="card horizontal">
                    <div class="card-image">
                        <img src="http://lorempixel.com/100/190/nature/6">
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                            <p>Carte</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

