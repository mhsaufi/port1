
@foreach($result as $rs)
<div class="modal fade" id="updateModal" role="dialog">
            <div class="modal-dialog modal-lg">
                    <div class="modal-content"  style="background-color: #f9f9f9">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="text-success" align='center'>ICCS MEMBER PROFILE EDITOR
                                <span class="glyphicon glyphicon-pencil"></span></h4>
                        </div>
                        <div class="row">
                        <div class="modal-body">
                            <div class="col-md-6">
                                <form action="/update" method="post">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                    <input type="hidden" name="id" value="{{ $rs->id }}">
                                    <div class="form-group">
                                        <label for="email">Email :</label>
                                        <input type='text' class="form-control" name='email' id='email' value='{{ $rs->email }}'/>
                                    </div>
                                    <div class="form-group">
                                        <label for="fullname">Fullname :</label>
                                        <input type='text' class="form-control" name='fullname' id='fullname' value='{{ $rs->name }}'/>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username :</label>
                                        <input type='text' class="form-control" name='username' id='username' value='{{ $rs->username }}'/>
                                    </div>
                                                               
                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="organization">Organization :</label>
                                        <input type='text' class="form-control" name='organization' id='organization' value='{{ $rs->organization }}'/>
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Position :</label>
                                        <input type='text' class="form-control" name='position' id='position' value='{{ $rs->position }}'/>
                                    </div><br><br>
                                    <div class="form-group">
                                        <button type='submit' class="btn btn-warning btn-block">
                                            <span class="glyphicon glyphicon-save"></span>
                                            Save Your New Info </button>
                                    </div>
                                </form>
                                    
                            </div>
                        </div>
                        </div>
                        <div class="modal-footer">

                                <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancel </button> 
                        </div>
                    </div>                 
            </div>
        </div>

@endforeach


