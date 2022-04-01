@extends('layouts.app')
@section('title', 'Our Company')
@section('content')
   <div class="ourcompanies">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="oucbox">
                    <img src="{{ asset('img/banner/chairmain.jpg') }}" alt="">
                    <h1>Chairman</h1>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="oucbox">
                    <img src="{{ asset('img/banner/mbpic.png') }}" alt="">
                    <h1>Managing Director</h1>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="oucbox">
                    <img src="{{ asset('img/banner/DIRECTOR.jpeg') }}" alt="">
                    <h1>Director</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection











