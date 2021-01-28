@extends('front.layout.master')
@section('assets')
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-card-2"><img src="{{ asset('image/bharani.jpg') }}" class="img img-responsive">
                    <div class="profile-name">BHARANI KARTHIKEYAN</div>
                    <div class="profile-username">@ bharani.developer@gmail.com</div>
                    <div class="profile-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i
                                class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
