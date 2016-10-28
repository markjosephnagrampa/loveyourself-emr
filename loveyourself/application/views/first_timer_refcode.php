<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="vertical-alignment-helper">
            <div class="modal-dialog vertical-align-center">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        <h4 class="modal-title">REFERENCE CODE</h4>
                    </div>
                    <div class="modal-body">
                        <p><?php echo $reference_code; ?></p>
                    </div>
                    <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="container" id="content" style ='background-color: #FFFFFF;'>
               <!-- Modal -->
        
        <div class="jumbotron">
            <h1>HELLO USER</h1>
            <p> Your form was successfully submitted!</p>
        </div>
       <div class="jumbotron">
            <h1>REFERENCE CODE</h1>
            <p> Here is your reference code: <?php echo $reference_code; ?></p>
        </div>
        <div>
            <!--Edited Oct 11, 2016-->
                    
                <?php 
                    echo form_open();
                    $data = array(
                        'name' => 'refcode_PDF',
                        'id'   => 'refcode_PDF',
                        'value' => 'Save as PDF',
                        'type' => 'submit',
                        'content' => 'Save as PDF',
                        'formtarget' => '_blank',
                        'formaction' => 'view_refcode_pdf', // Edited Oct 11, 2016 (Temporary)
                        'class' => 'btn btn-primary btn-block'
                     );
                     echo form_submit($data);
                     echo form_close();
                 ?>

            <!--<a href="#">
                <button type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-file"></span> Save as PDF</button>
            </a>-->
        </div>
    </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>