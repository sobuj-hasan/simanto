@extends('layouts.app')
@section('title', 'Contact Us')
@section('content')
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="{{ route('contact.message') }}">
                        @csrf
                        <label for="">Your Name</label>
                        <input type="text" placeholder="Enter Your Full Name" name="name">
                        <br>
                        <label for="">Email Address</label>
                        <input type="text" placeholder="Enter Your Email Address" name="email">
                        <br>
                        <label for="">Phone Number</label>
                        <input type="text" placeholder="Enter Your Phone Number" name="phone">
                        <br>
                        <label for="">Message</label>
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Enter Your Message"></textarea>
                        <br>
                        <Button type="submit">SEND</Button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection