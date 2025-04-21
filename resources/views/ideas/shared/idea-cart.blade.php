<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle"
                    src="{{$idea->user->getImageURL()}}" alt="{{ $idea->user->name}}">
                <div>
                    <h5 class="card-title mb-0">
                <a href="{{ route('users.show', $idea->user->id) }}"> {{ $idea->user->name}}</a></h5>

                </div>
            </div>
            <div>

                @if (Auth::id() === $idea->user_id)
                <a class="mx-2" href="{{ route('ideas.show', $idea->id) }}">View</a>
                <a href="{{ route('ideas.edit', $idea->id) }}">Edit</a>

                <form method="POST" action="{{ route('ideas.destroy', $idea->id) }}" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-primary btn-sm">X</button>
                </form>
            @endif



            </div>
        </div>
    </div>


    <div class="card-body">
        @if ($editing ?? false)
        <h4> Share yours ideas </h4>
<div class="row">
    <form action="{{ route('ideas.update', $idea->id) }}" method="POST">
        @csrf
        @method('put')
    <div class="mb-3">
        <textarea name="content" class="form-control" id="content" rows="3">
          {{ $idea->content }}
        </textarea>
        @error('content')
        <p class="text-danger"> {{ $message }} </p>
        @enderror
    </div>
    <div class="">
        <button type="submit" class="btn btn-dark"> update </button>
    </div>
</form>
</div>

        @else
        <p class="fs-6 fw-light text-muted">
            {{ $idea->content }}
        </p>
        @endif
        <div class="d-flex justify-content-between">
         @include('ideas.shared.like-button')
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $idea->created_at->diffForHumans() }} </span>
            </div>
        </div>
       @include('ideas.shared.comments')
    </div>
</div>
