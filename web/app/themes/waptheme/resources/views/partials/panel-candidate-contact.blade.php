@extends('layouts.panel', ['panelimage' => @\App\asset_path("images/tjej_dator.jpg"), 'paneltitle' => 'Kontakt', 'panelclass' => 'candidate-contact'])

@section('panel-content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="display-3 mb-3 text-center">Kontakt</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-12">
                        <label>
                            Ämne
                            <input type="text" name="subject" value="Hej Work and passion"/>
                        </label>
                    </div>
                    <div class="col-12">
                        <label for="message">Meddelande</label><textarea name="message" id="" cols="30" rows="6" data-maxlength="2500" data-validation-message="Sorry, that text seems to be too long."></textarea>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-light btn-lg btn-heading">Skicka</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@overwrite