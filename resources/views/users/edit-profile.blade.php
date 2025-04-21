@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-3">
            @include('shared.sidebar')
        </div>
        <div class="col-6">
            @include('shared.success-message')
            @include('shared.error-message')

            <div class="mt-3">
                @include('shared.user-edit-card' )
            </div>
            <hr>
            @forelse ( $ideas as $idea )
            <div class="mt-3">
                @include('ideas.shared.idea-cart')
            </div>

            @empty
            <p class="fs-6 fw-light text-muted">
                No result found
            </p>

            @endforelse
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
