
@foreach($result as $rs)
<div class="row">
    <div class="col-md-3">
        <h3 id="header">Panel Editor</h3>
        <br><br>
        <img src="{{ $rs->dp_url }}" class="img-rounded" id="dp" width="190" height="200"><br><br>
        <a href="/mailviewer" class="btn btn-danger btn-sm" align="right"> <span class="glyphicon glyphicon-envelope"></span> MailBox </a>
        
        <a href="/postac" class="btn btn-success btn-sm">
                        <span class="glyphicon glyphicon-hand-right"></span> New activity
        </a><br><br><br><br>

    </div>
    <div class="col-md-9">
        <h3 id="header">Panel Board</h3>
        <small class="text-danger">PostAc</small><hr>
               @include('pr.panelboard')
        
    </div>
</div>
@endforeach
<hr>