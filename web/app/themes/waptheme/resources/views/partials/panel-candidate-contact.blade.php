@extends('layouts.panel', ['panelimage' => @\App\asset_path("images/tjej_dator.jpg"), 'paneltitle' => 'Kontakt', 'panelclass' => 'candidate-contact'])

@section('panel-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="display-3 mb-3 text-center">Kontakt</h3>
            </div>
        </div>
        <form id="contact_form" name="contact_form">
            <div class="row">
                <div class="col-12">
                    <div class="row">

                        <div class="col-12">
                            <label for="subject">Ämne</label>
                            <input type="text" name="subject" id="subject" value="Hej Work and passion" required/>
                        </div>
                        <div class="col-12 my-5">
                            <label for="message">Meddelande</label>
                            <textarea name="message" id="message" cols="30" rows="6"
                                      data-maxlength="2500"
                                      data-validation-message="Sorry, that text seems to be too long." required></textarea>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="name">Namn</label>
                            <input type="text" name="name" id="name" required/>
                        </div>
                        <div class="col-12 col-md-6">
                            <label for="email">E-post</label>
                            <input type="email" name="email" id="email" required/>
                        </div>

                        <div class="col-12 mt-5">
                            <button id="send-mail" class="btn btn-light btn-lg btn-heading">Skicka</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="row mt-3">
            <div class="col-12">
                <div id="mail-alert" class="alert alert-light alert-dismissible fade" role="alert">
                    <strong>Tack för ditt mail!</strong> Vi återkommer till dig så snart som möjligt.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
@overwrite