@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.sidebar')
        </div>
        <div class="col-6">
            @include('shared.success-message')
            @include('shared.error-message')
            <hr>
            <div class="mt-3">
                @include('ideas.shared.idea-cart')
            </div>


        </div>
        <div class="col-3">
            @include('shared.search')
            @include('shared.follow')
        </div>
    </div>
@endsection
