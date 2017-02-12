
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                                <h4>Enter your detail to become our member</h4> 
                        </div>
                        <div class="row">
                        <div class="modal-body">
                            <div class="col-md-6">
                                <form action="/register" method="post">
                                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                                    <div class="form-group">
                                        <label for="email">Email :</label>
                                        <input type='text' class="form-control" name='email' id='email'/>
                                    </div>
                                    <div class="form-group">
                                        <label for="fullname">Fullname :</label>
                                        <input type='text' class="form-control" name='fullname' id='fullname'/>
                                    </div>
                                    <div class="form-group">
                                        <label for="username">Username :</label>
                                        <input type='text' class="form-control" name='username' id='username'/>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass">Password :</label>
                                        <input type='password' class="form-control" name='pass' id='pass'/>
                                    </div>
                                                                

                            </div>
                            <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="organization">Organization :</label>
                                        <input type='text' class="form-control" name='organization' id='organization'/>
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Position :</label>
                                        <input type='text' class="form-control" name='position' id='position'/>
                                    </div>
                                    <div class="form-group">
                                        <button type='submit' class="btn btn-info btn-block">Register to Become Member</button>
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




