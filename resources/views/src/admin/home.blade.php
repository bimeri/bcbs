@extends('src.admin.includes.layout')
@section('title') home @endsection
@section('style')
<link rel="stylesheet" href="{{ URL::asset('card.css') }}" />
@endsection
@section('content')
<p class="w3-center">@lang('messages.welcome')</p>
<div class="row">
    <div class="col s11 m10 w3-border-t offset-m1 radius white w3-margin-left">
        {{$name}}
        <div class="flip3D">
            <div class="back">Box 1 - Back</div>
            <div class="front">Box 1 - Front</div>
        </div>
        <div class="flip3D">
            <div class="back">Box 1 - Back</div>
            <div class="front">Box 1 - Front</div>
        </div>
        <div class="flip3D">
            <div class="back">Box 1 - Back</div>
            <div class="front">Box 1 - Front</div>
        </div>
    </div>
</div>
@endsection
