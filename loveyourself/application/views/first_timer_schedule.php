<div class="container">
    <div class="container" id="content" style ='background-color: #FFFFFF;'>
        <div class="jumbotron">
            <h1>HELLO <?php echo $this->session->flashdata('patient'); ?></h1>
            <p> Schedule?</p>
        </div>
        <div>
            <a href="<?php echo base_url(); ?>site/refcode_firsttimer">
                <button type="button" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-calendar"></span> SCHEDULE ME FOR HIV TESTING</button>
            </a>
        </div>
      
    </div>
</div>