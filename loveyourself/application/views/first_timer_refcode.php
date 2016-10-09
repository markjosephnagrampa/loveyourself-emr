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
                        <p>12345678</p>
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
            <p> Here is your reference code:</p>
        </div>
        <div>
            <a href="#">
                <button type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-file"></span> Save as PDF</button>
            </a>
        </div>
    </div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script>