<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>الرسائل الواردة</title>
        <?php $this->load->view('Header'); ?>

    </head>

    <?php
    // if ($this->session->userdata('logged_in')) {
    // $session_data = $this->session->userdata('logged_in');
    ?>   
    <body>
        <!------------------------Add Discount----------------->

        <!-------------------------End Edit Discount----------------->
        <!-------------------------start Delete Discount----------------->

        <!--------------------------------------------------------------menubar----------------------------------------->
        <div class="menubar">
            <div class="row">
                <div class="toolbar"><i class="fa fa-bell" aria-hidden="true"></i><div class="notifications" id="notfication">
                        <?php
//                            if ($session_data['type_id'] == '4') {
//                                echo $countManger;
//                            } elseif ($session_data['type_id'] == '3') {
//                                echo $countSalesManger;
//                            }
//                            else{
                        echo $count;
                        // }
                        ?></div>

                </div>
                <?php //$this->load->view('toolbar'); ?>
                <div class="topbar">
                    <!--div class="row">
                    <div class="col-md-6">
<dropdown class="inboxes">
<input id="toggle2" type="checkbox">
<label for="toggle2" class="animate">Editor<i class="fa fa-list float-right"></i></label>
<ul class="animate">
<li class="animate">Source<i class="fa fa-code float-right"></i></li>
<li class="animate">Fullpage<i class="fa fa-arrows-alt float-right"></i></li>
<li class="animate">Debug<i class="fa fa-cog float-right"></i></li>
</ul>
</dropdown>
</div>
                    <div class="col-md-6">
                    <h3>الرسائل الواردة</h3>
                    </div-->
                    <h3>الرسائل الواردة</h3>
                </div>
            </div>
            <div class="col-md-2 col-md-offset-10 ">
                <?php $this->load->view('MenuBar') ?>
            </div>

            <div class=" col-md-9 col-md-offset-1 details">


                <form id="SearchForm" class="col-md-7 col-md-offset-4 col-sm-12 col-xs-12">
                    <div class="row">
                        <div class="SearhDiv form-group formLayout col-md-9 col-sm-12 col-xs-12 ">
                            <span class="Inputspan fa fa-search"></span>
                            <input type="text" name=""  class="form-control" placeholder="" />
                        </div>
                    </div>
                </form>
                <table class="pure-table table-responsive tabdetails" id="filter-table" >
                    <thead>


                    <th>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> 
                        </label>
                    </div></th>
                    <th>الصورة</th>
                    <th>اسم الموظف</th>
                    <th>  التاريخ والوقت من</th>
                    <th>التاريخ والوقت الي</th>
                    <th>الموضوع</th>
                    <th>موافق/غير موافق</th>
                    </thead>
                    <?php foreach ($requests as $key => $value) { ?>
                        <tbody>
                            <tr id="" class="cond">
                        <td>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox".
                                </label>
                            </div>
                        </td>
                        <td><img src="<?php echo $this->config->base_url(); ?>_/images/profile2.jpg" class="inboxphoto"></td>
                        <td><?php
                            $this->load->model('EmployeeModel');
                            $emp = $this->EmployeeModel->employeedata($value->employee_id);

                            foreach ($emp as $employ) {
                                echo($employ->name);
                            }
                            ?></td>
                        <td><?php echo $value->date_from; ?></td>
                        <td><?php echo $value->date_to; ?></td>

                        <td class="TableDataDiv">
                            <ul class="row">
                                <li class="col-md-12"><a type="button" class="SubItemBtnOpen"><span class="fa fa-plus-square"></span> إذن شخصي</a></li>

                            </ul>
                            <div class="SubItem collapse">
                                <p class="detailpermission">
                                    برجاء التفضل بسماح لي بطلب اذن من الساعه <?php echo $value->date_from; ?> الي الساعه <?php echo $value->date_to; ?>
                                </p>

                            </div>
                        </td> 

                        <td>

                            <button  type="submit" id="agree" class="afree" name="agree" data-employee-id="<?php echo $value->employee_id; ?>"  data-msg-id="<?php echo $value->id; ?>"><i class="fa fa-check" aria-hidden="true"></i></button>      
                            <button  type="submit" class="none" id="refuse" data-employee-id="<?php echo $value->employee_id; ?>" data-msg-id="<?php echo $value->id; ?>"><i class="fa fa-times" aria-hidden="true"></i></button>
                        </td>
                    <?php } ?>


                    </form>
                    </tr>
                    </tbody>
                </table>


            </div>
            <div class="left"></div>

        </div>
    </div>


    <!--------------------------------------------------------------/menubar---------------------------------------------------------------->

    <?php $this->load->view('Scripts'); ?>


</body>
</html>
<?php //}  ?>
<script>

    $('#agree').click(function () {
        alert($(this).data('employee-id'));
        alert($(this).data('msg-id'));

        var Msg = $(this).data('msg-id');
        var data = {
            employeeid: $(this).data('employee-id'),
            msgid: $(this).data('msg-id')
        }
        $.post("<?php echo $this->config->base_url(); ?>employee/agreeRequest", data, function (result) {

//            alert($document.find('tr.cod').val()==Msg);
//          ($(this).find('tr.cod').val() == Msg).hide();
            //$('tr'#' + row_id').hide();
            // $('tr.cond').hide();
            //$("body").find('#' + Msg).hide();
//              var $tr = $('#filter-table tr:has(.typology[value="' + Msg + '"])');
//              $tr.hide();
            //    $('input[value="' + Msg + '"]').closest("tr").hide();


            //  $("input[name=" + Msg + "]").hide();
           // $('tr[id=' + Msg + ']').hide();

            var notification = document.getElementById('notfication').innerHTML;
            var i = parseInt(notification);
            if (!(i == 0)) {
                i--;
                document.getElementById('notfication').innerHTML = i;

            }

        });
    });

    $('#refuse').click(function () {
  alert($(this).data('employee-id'));
        alert($(this).data('msg-id'));

        var data = {
            employeeid: $(this).data('employee-id'),
            msgid: $(this).data('msg-id')

        }
        $.post("<?php echo $this->config->base_url(); ?>employee/RefuseRequest", data, function (result) {
           // $('tr.cond').hide();
            var notification = document.getElementById('notfication').innerHTML;
            var i = parseInt(notification);
            if (!(i == 0)) {
                i--;
                document.getElementById('notfication').innerHTML = i;
            }

        });
    });
</script>