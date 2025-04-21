@auth()


<h4> Share yours ideas </h4>
<div class="row">
    <form action="{{route('ideas.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <textarea name="content" class="form-control" id="content" rows="3">

        </textarea>
        @error('idea')
        <p class="text-danger"> {{ $message }} </p>
        @enderror
    </div>
    <div class="">
        <button type="submit" class="btn " style="background-color: #1DA1F2; color: white;"> Share </button>
    </div>
</form>
</div>
@endauth
@guest()
<h4> Login to share your ideas </h4>

@endguest

