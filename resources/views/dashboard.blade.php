@extends('layouts.layout')

@section('content')
        <div class="row">
            <div class="col-3">
              @include('shared.sidebar')
            </div>
            <div class="col-6">
         @include('shared.success-message')
         @include('shared.error-message')
            @include('ideas.shared.submit_idea')
                <hr>
                @if(count ($ideas) > 0)
                @foreach ($ideas as $idea)
                <div class="mt-3">
                    @include('ideas.shared.idea-cart')
                </div>
                @endforeach
                @else
                <p class="fs-6 fw-light text-muted">
                    No result found
                </p>
                @endif
                <div class="mt-3">
                    {{ $ideas->withQueryString()->links() }}
                </div>

            </div>
            <div class="col-3">
            @include('shared.search')
            @include('shared.follow')

            </div>
        </div>
    @endsection
