@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <label for="">Your Name</label>
                    <input type="text" placeholder="Enter Your Full Name">
                    <br>
                    <label for="">Email Address</label>
                    <input type="text" placeholder="Enter Your Email Address">
                    <br>
                    <label for="">Phone Number</label>
                    <input type="text" placeholder="Enter Your Phone Number">
                    <br>
                    <label for="">Phone Number</label>
                    <textarea name="" id="" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
                    <br>
                    <Button>SEND</Button>
                </div>
            </div>
        </div>
    </div>
@endsection