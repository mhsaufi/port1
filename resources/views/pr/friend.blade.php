<h3>My Friend List</h3>

<p class="text-muted">No friend added yet.</p>

<hr/>

<h4>ICCS Friends</h4>
<hr/>

@foreach($suggest as $suggests)
<form action="/friendprofile" method="post">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <input type="hidden" name="to_view" value="{{ $suggests->id }}">
<button type="submit" class="btn btn-default">
            <img src="{{ $suggests->dp_url }}" class="img-circle" id="dp" width="50" height="40"> {{ $suggests->username }}
</button>
</form>
@endforeach
