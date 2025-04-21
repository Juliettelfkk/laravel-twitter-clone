<div>
    <div class="mb-3">
        <form action="{{ route('ideas.comments.store', $idea->id) }}" method="POST">
            @csrf
            <textarea name="content" class="fs-6 form-control" rows="1" required></textarea>
            <button type="submit" class="btn mt-2 btn-sm" style="background-color: #1DA1F2; color: white;"> Post Comment </button>
        </form>


    </div>
    @foreach ($idea->comments as $comment)
        <div class="d-flex align-items-start">
            <img style="width:50px" class="me-2 avatar-sm rounded-circle" src="{{ $comment->user->getImageURL() }}"
                alt="{{ $comment->user->name }}">
            <div class="w-100">
                <div class="d-flex justify-content-between">
                    <h6> {{ $comment->user->name }}</h6>
                    <div class="d-flex justify-content-end mr-2">
                        <small class="fs-6 fw-light text-muted"> {{ $comment->created_at->toDateString() }} </small>
                    <form action="{{ route('comments.destroy', $comment->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class=" btn btn-primary btn-sm">X</button>
                    </form>
                    </div>

                </div>
                <p class="fs-6 fw-light text-muted">
                    {{ $comment->content }}
                </p>
            </div>
        </div>
    @endforeach
    {{-- <div>
    </div> --}}


</div>
