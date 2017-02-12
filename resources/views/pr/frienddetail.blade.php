@foreach($result as $rs)
<div class="row">
    <div class="col-md-3">
        <div class="sector">
            
            <img src="{{ $rs->dp_url }}" class="img-circle" id="dp" width="250" height="250">
            
        </div>
        
    </div>
    <div class="col-md-9">
        
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th> Name </th><th> Position </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <p class="text-success">{{ $rs->name }}</p> </td><td> <p class="text-success">{{ $rs->position }}</p> </td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th> Username </th><th> Organization </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <p class="text-success">{{ $rs->username }}</p> </td><td> <p class="text-success">{{ $rs->organization }}</p> </td>
                </tr>
            </tbody>
            <thead>
                <tr>
                    <th> Email </th><th> Registered On </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <p class="text-success">{{ $rs->email }}</p> </td><td> <p class="text-success">{{ $rs->register_on }} </p></td>
                </tr>
            </tbody>
        </table>
       <button type="button" data-toggle="modal" data-target="#messagebox" class="btn btn-danger btn-sm">
              <span class="glyphicon glyphicon-envelope"></span>  Mail Me!</button>
              @include('pr.message')
    </div>
</div>
<hr/>
@endforeach

