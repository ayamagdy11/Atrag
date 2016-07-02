<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen"
              href="http://tarruda.github.com/bootstrap-datetimepicker/assets/css/bootstrap-datetimepicker.min.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>طلب إذن</title>
        <?php $this->load->view('Header'); ?>
    </head>
    <body>
        <!------------------------Add Discount----------------->

        <!-------------------------End Edit Discount----------------->
        <!-------------------------start Delete Discount----------------->

        <!--------------------------------------------------------------menubar----------------------------------------->
        <div class="menubar">
            <div class="row">
                <div class="topbar">

                    <h3>طلب إذن</h3><i class="fa fa-eyedropper" aria-hidden="true"></i>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-10 ">
                <?php $this->load->view('MenuBar') ?>
            </div>

            <div class=" col-md-9 col-md-offset-1 details">




                <div class="permission ">
                    <?php
                    if ($this->session->userdata('logged_in')) {
                        $session_data = $this->session->userdata('logged_in');
                        ?>
                        <form action="<?php echo $this->config->base_url(); ?>employee/tookpermission" method="post" class="row" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?php echo $session_data['id']; ?>"
                        <?php } ?>
                               <div class="row">

                        </div>

                        <div class="row">
                            <div class="form-group formLayout col-md-3 col-md-offset-6" id="formlayout">
                                <label for="permissionto" class="control-label ">تاريخ الاذن الي:</label>
                                <div id="timeto" class="input-append date">
                                    <input type="text"  name="to" ></input>
                                    <span class="add-on">
                                        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                    </span>
                                </div>                           
                            </div>
                            <div class="form-group formLayout col-md-3 " id="formlayout">
                                <label for="permissionfrom" class="control-label ">تاريخ الاذن من:</label>
                                <div id="timeFrom" class="input-append date">
                                    <input type="text" name="from"></input>
                                    <span class="add-on">
                                        <i data-time-icon="icon-time" data-date-icon="icon-calendar"></i>
                                    </span>
                                </div>									
                            </div>

                        </div>
                        <div class="form-group formLayout col-md-6 col-md-offset-6" id="formlayout">
                            <label for="permissioncause" class="control-label ">السبب:</label><br>
                            <textarea name="reson" class="causepermission"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default" id="addemployee">تأكيد</button>

                    </form>
                </div>


            </div>
            <div class="left"></div>

        </div>
    </div>


    <!--------------------------------------------------------------/menubar---------------------------------------------------------------->

    <?php $this->load->view('Scripts'); ?>

    <script type="text/javascript"
            src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js">
    </script> 
    <script type="text/javascript"
            src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.2.2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript"
            src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.min.js">
    </script>
    <script type="text/javascript"
            src="http://tarruda.github.com/bootstrap-datetimepicker/assets/js/bootstrap-datetimepicker.pt-BR.js">
    </script>

    <script type="text/javascript">
        $('#timeFrom').datetimepicker({
            format: 'yyyy-MM-dd hh:mm:ss',
            language: 'pt-BR',
        });
        $('#timeto').datetimepicker({
            format: 'yyyy-MM-dd hh:mm:ss',
            language: 'pt-BR',
            minDate: 0

        });
    </script>

</body>
</html>