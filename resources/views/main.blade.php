@extends('layouts.skeleton')
@section('title', 'Porfolio | I Ketut Adi')

@section('content')

<div class="swiper">
    <div class="swiper-wrapper slider slider-nav">
        @include('home')

        @include('work')

        @include('service')

        @include('about')
    </div>
</div>

@endsection

@section('script')
@endsection