@extends('layouts.panel', ['panelimage' => @\App\asset_path("images/stockholm.jpg"), 'paneltitle' => 'Kontakt', 'panelclass' => 'candidate-contact'])

@section('panel-content')
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-10 offset-lg-1 social-icons-wrapper">
                <div class="social-icons d-flex justify-content-center">
                    {{--<div class="mail-wrapper social-item d-flex align-items-center float-right">--}}
                        {{--<div class="contact-icon mail-icon">--}}
                            {{--<i class="fas fa-envelope"></i>--}}
                        {{--</div>--}}
                        {{--info@workandpassion.se--}}
                    {{--</div>--}}
                    <div class="social-item">
                        <a href="https://facebook.com/workandpassion" class="d-flex align-items-center">
                            <div class="contact-icon facebook-icon">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <span class="social-text d-none d-md-block">/workandpassion</span>
                        </a>
                    </div>

                    <div class="social-item">
                        <a href="https://www.instagram.com/workandpassion/" class="d-flex align-items-center">
                            <div class="contact-icon instagram-icon">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <span class="social-text d-none d-md-block">/workandpassion</span>
                        </a>
                    </div>

                    <div class="social-item">
                        <a href="https://www.linkedin.com/company/27107460/" class="d-flex align-items-center">
                            <div class="contact-icon linkedin-icon">
                                <i class="fab fa-linkedin"></i>
                            </div>
                            <span class="social-text d-none d-md-block">/company/27107460</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 d-flex justify-content-center mt-5">
                <button class="btn btn-lg btn-outline-light" id="mail-collapse-btn" data-toggle="collapse" data-target="#contact-collapse" aria-expanded="false" aria-controls="contact-collapse">
                    Skicka mejl nu
                    <i class="fas fa-chevron-down"></i>
                </button>
            </div>
        </div>
        <div class="collapse" id="contact-collapse">
            <form id="contact_form" name="contact_form">
                <div class="row">
                    <div class="col-12">
                        <div class="row">

                            <div class="col-12">
                                <label for="subject">Ämne</label>
                                <input type="text" name="subject" id="subject" value="Hej Work and Passion" required/>
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
                                <label for="email">Mejladress</label>
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
    </div>
@overwrite