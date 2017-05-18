@extends('layouts.app')

@section('content')
    <!--Edition du profile -->
    <section class="fun-facts">
        <div class="container">
            <div class="row">
                <!-- EditProfil -->
                <h1>Editer profil</h1>
                <span class="bottom-bar"></span>
                <div class="container" style="padding-top: 60px;">
                    <div class="row">
                        <!-- left column -->
                        <div class="col s12 m8 offset-m2 l6 offset-l3">
                            <div class="card-panel grey lighten-5 z-depth-5">
                                <div class="row valign-wrapper">
                                    <div class="col s2">
                                        <img src="img/chatonYan.jpe" alt="" class="circle responsive-img" >
                                    </div>
                                    <div class="col s10">
                                        <span class="black-text">
                                            Choisissez votre image.
                                        </span>
                                        <label for="icone">JPG, PNG | max. 15 Ko :</label><br/></br>
                                        <input type="file" name="icone" id="icone" /><br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- edit form column -->
                        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
                            <form class="form-horizontal" role="form">

                                <div class="row">
                                    <form class="col s12">
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="first_name" type="text" class="validate">
                                                <label for="first_name">First Name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <i class="material-icons prefix">account_circle</i>
                                                <input id="last_name" type="text" class="validate">
                                                <label for="last_name">Last Name</label>
                                            </div>
                                            <div class="input-field col s12 m6">
                                                <select class="icons">
                                                    <option value="" disabled selected>Choisisez votre département</option>
                                                    <option value="" data-icon="img/dpt_INFO.PNG" class="circle">département INFO</option>
                                                    <option value="" data-icon="img/dpt MMI.PNG" class="circle">département MMI</option>
                                                    <option value="" data-icon="img/dpt GEII.PNG" class="circle">département GEII</option>
                                                    <option value="" data-icon="img/dpt TC.PNG" class="circle">département TC</option>
                                                    <option value="" data-icon="img/dpt MP.PNG" class="circle">département MP</option>
                                                </select>
                                                <label>Images in select</label>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">https</i>
                                                    <input id="password" type="password" class="validate">
                                                    <label for="password">Password</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">https</i>
                                                    <input id="confirm_password" type="password" class="validate">
                                                    <label for="password">Confirm Password</label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="input-field col s12">
                                                    <i class="material-icons prefix">email</i>

                                                    <input id="email" type="email" class="validate">
                                                    <label for="email">Email</label>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- EditProfil -->
            </div>
        </div>
    </section>
@endsection



