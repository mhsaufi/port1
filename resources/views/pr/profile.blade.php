
<h3>My Profile</h3>
@foreach($result as $rs)
<div class="row">
    <div class="col-md-3">
        <div class="sector">
            
            <img src="{{ $rs->dp_url }}" class="img-circle" id="dp" width="250" height="250">
            <div class="formpopout">
                <form action="/uploaddp" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="{{ $rs->id }}">
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <input type="file" name="userdp">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-upload"></span> Save New Dp</button>
                </form>
                
                
            </div>
            
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
       
    </div>
</div>
<hr/>
@endforeach
