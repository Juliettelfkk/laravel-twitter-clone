<h1>
profile page
</h1>
<b>
    @foreach ($ideas as $idea)
    <p> {{ $idea->content }} </p>
    <br>
    <p> {{ $idea->likes }} </p>
    @endforeach
</b>
