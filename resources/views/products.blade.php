@extends('layouts.app')
@section('title', 'Product Page')
@section('content')
    <!-- OUR-PRODUCT -->
    <div class="OUR-PRODUCT">
    <div class="container">
        <div class="row">
            @forelse ($products as $product)
                <div class="col-lg-3">
                    <div class="pbox">
                    <img src="{{ asset('assets/img/') }}/{{ $product->image }}" alt="">
                    <h1>{{ $product->medicine_name }}</h1>
                    </div>
                </div>
                @empty
                <h5 class="py-4 text-danger">Nothing to show any products</h5>
            @endforelse
        </div>
    </div>
    </div>
    <!-- OUR PRODUCT -->
@endsection


