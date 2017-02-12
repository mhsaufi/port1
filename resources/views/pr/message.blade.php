
        <div class="modal fade" id="messagebox" role="dialog">
            <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <span class="text-success"><em>Powered by PostAc</em></span><small> ---- Copyright 2017
                            <span class="glyphicon glyphicon-copyright-mark"></span></small>
                        </div>
                        <div class="modal-body">
                            <form action="/messageuser" method="post">
                            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> 
                            <input type="hidden" name="recepeint" value="{{ $rs->id }}">
                            <h4><span class="text-info">Subject</span></h4>
                            <input type='text' class="form-control" name='subject' id='subject'/>
                            <div class="form-group">
                                <h4><span class="text-info">Your Message </span></h4>
                                <textarea class="form-control" name='message' maxlength='300'></textarea>
                            </div>
                            <div class="form-group">
                                <button type='submit' class="btn btn-success btn-sm"> Send Mail <span class="glyphicon glyphicon-send"></span></button>
                            </div>
                            </form>
                        </div>
                        <div class="modal-footer">

                            <button type="button" class="btn btn-danger" data-dismiss="modal"> Cancel </button> 
                        </div>
                    </div>                 
            </div>
        </div>





