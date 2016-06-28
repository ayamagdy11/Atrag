<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>بيانات الموظفين</title>
	<?php $this->load->view('Header');?>
		</head>
	<body>
		<div class="modal fade" id="DeleteEmployee">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
						<!--<h3><strong>حذف بيانات</strong></h3> -->
					</div>
					<form action="<?php echo $this->config->base_url(); ?>index.php/employee/deleteemployee" method="post">
						<div class="modal-body">
							<div class="form-group formLayout" id="formlayout">   
								  <label for="nameInput" class="control-label ">هل أنت متأكد من حذف البيانات</label>
								 <input type="hidden" name="delete_employeeid" id="delete_employeeid" class="form-control" readonly/>

							</div>  
						</div>
						<div class="modal-footer mf">
							<button class="btn btn-info btn-sm" type="submit" id="DoneDelete">حذف</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
	   </div> 

	<!--------------------------------------------------------------menubar------------------------------------------>
		<div class="menubar">
			<div class="row">
			<div class="toolbar"><i class="fa fa-bell" aria-hidden="true"></i></div>
				<div class="col-md-2 col-md-offset-10 ">
				<?php //$this->load->view('MenuBar')?>
				</div>
			
					<div class=" col-md-10 details">
						<ul class="nav nav-tabs" id="myTab">
							<li  class="active"><a data-toggle="tab" href="#ShowEmployees">الموظفين</a></li>
							<li class="editemployee"><a href="#EditEmployee" data-toggle="tab">تعديل بيانات موظف</a></li>
						</ul> 
						<div id="myTabContent" class="tab-content">
							<div class="tab-pane active" id="ShowEmployees">
						<form id="SearchForm" class="col-md-7 col-md-offset-4 col-sm-12 col-xs-12">
						<div class="row">
						<div class="SearhDiv form-group formLayout col-md-9 col-sm-12 col-xs-12 ">
						<span class="Inputspan fa fa-search"></span>
						<input type="text" name="" class="form-control" placeholder="" />
						</div>
						</div>
						</form>
						<table class="pure-table table-responsive tabdetails" >
							<thead>
								<th>التسلسل</th>
								<th>الإسم</th>
								<th>المسمي الوظيفي</th>
<!-- 								<th>الفرع</th>
 -->							<th>تليفون</th>
								<th>تعديل</th>
								<th>حذف</th>
								<th>تفاصيل</th>
<!-- 								<th>بيانات</th>
 -->							</thead>
							<?php 
								$i=0;
								foreach ($allemployee as $value) {
							    echo "<tbody>";
								 $allemployee[$i]->id;
							    echo "<tr>";
							    echo "<td>".$i."</td>";
								echo "<td>".$allemployee[$i]->name."</td>";
                                if ($allemployee[$i]->type_id==1){
								echo "<td>"."موظف تسويق"."</td>";
							    }
							    elseif ($allemployee[$i]->type_id==2) {
							    	echo "<td>"."مدير تسويق"."</td>";

							    }
							    elseif ($allemployee[$i]->type_id==3) {
							    	echo "<td>"."خدمه عملاء"."</td>";
							    }
							    elseif ($allemployee[$i]->type_id==4) {
							    	echo "<td>"."مدير"."</td>";
							    }
								// echo "<td>IT</td>";
								echo "<td>".$allemployee[$i]->phone."</td>";
								echo "<td><a type='button' class=' edit-emp' data-toggle='tab' data-target='#EditEmployee'  data-target='#EditEmployee'
                                                                     data-emp_name='".$allemployee[$i]->name."'
                                                                     >"."<i class='fa fa-pencil-square-o'></i></a></td>";
                                echo "<td><a type='button' href='#' class='delete-emp' data-toggle='modal' data-target='#DeleteEmployee' data-id='".$allemployee[$i]->id."'><i class='fa fa-trash' aria-hidden='true'></i></a></td>";		
                                echo "<td><a type='button' class='edit-emp' >"."<i class='fa fa-info' aria-hidden= 'true' ></i></a></td>";
								echo "</tr>";
							
							 echo "</tbody>";
							$i++;
						  } 
						  ?>
						</table>
						
					</div>
					<div class="tab-pane " id="EditEmployee">
						<form action="<?php echo $this->config->base_url(); ?>index.php/employee/updateemployee" method="post" class="row" enctype="multipart/form-data">
			        	<div class=" col-md-5 col-md-offset-5 personal">
					  <div class="form-group formLayout">
						 <input type="text" id="id" name="id" class="form-control" placeholder="الاسم " />
					</div>
						<label for="emp_name" class="control-label " >الاسم: </label>
						 <input type="text" id="emp_name" name="emp_name"  class="form-control" placeholder="الاسم " />
					</div> 
					<div class="form-group formLayout">
						<label for="emp_birthdate" class="control-label " >تاريخ الميلاد: </label>
						 <input type="datepicker" id="emp_birthdate" name="emp_birthdate" value="<?php echo $date_of_birth; ?>" class="form-control" placeholder="تاريخ الميلاد " />
					</div> 
					<div class="form-group formLayout">
						<label for="emp_email" class="control-label " >الايميل: </label>
						 <input type="datepicker" id="emp_email" name="emp_email" value="<?php echo $email ?>" class="form-control" placeholder="الايميل " />
					</div> 
					<div class="form-group formLayout">
						<label for="emp_address" class="control-label " >العنوان: </label>
						 <input type="text" id="emp_address" name="emp_address" value="<?php echo $address ?>" class="form-control" placeholder="العنوان " />
					</div>
					<div class="form-group formLayout">
						<label for="cust_mobile" class="control-label " >رقم التليفون: </label>
						 <input type="text" id="emp_mobile" name="emp_mobile"   value="<?php echo $phone ?>"class="form-control" placeholder="رقم التليفون " />
					</div>	
					<div class="form-group formLayout">
						<label for="cust_id" class="control-label " >رقم البطاقة: </label>
						 <input type="text" id="emp_id" name="emp_id"  value="<?php echo $id_of_user ?>" class="form-control" placeholder=" " />
					</div>

                	<div class="form-group formLayout">
						<label for="password" class="control-label " >الرقم السري: </label>
						 <input type="text" id="password" name="password" value="<?php echo $password ;?>" class="form-control" placeholder=" " />
					</div>

					<div class="form-group formLayout">
						<label for="zkt_id" class="control-label " >رقم بصمه الاصبع: </label>
						 <input type="text" id="zkt_id" name="zkt_id" value="<?php echo $zkt_id; ?>" class="form-control" placeholder=" " />
					</div>

					<div class="form-group formLayout">
						<label for="employment_date" class="control-label " >تاريخ التعيين: </label>
						 <input type="text" id="employment_date" name="employment_date" value="<?php echo $date_of_employment; ?>" class="form-control" placeholder=" " />
					</div>

					<div class="form-group formLayout">
						<label for="subtraction_rate" class="control-label " >النسبه المئويه للخصم للتأخير: </label>
						 <input type="text" id="subtraction_rate" name="subtraction_rate" value="<?php echo $rate_of_substraction; ?>" class="form-control" placeholder=" " />
					</div>

					<div class="form-group formLayout">
						<label for="overtime_rate" class="control-label " >النسبه المثويه للوقت الزياده بعد العمل: </label>
						 <input type="text" id="overtime_rate" name="overtime_rate"   value="<?php echo $rate_of_overtime ?>"class="form-control" placeholder=" " />
					</div>

					<div class="form-group formLayout">
						<label for="cust_fromdate" class="control-label " >مواعيد العمل </label><br>
						<label for="cust_fromdate" class="control-label " >من: </label>
						 <input type="text" id="emp_fromdate" name="emp_fromdate" value="<?php echo $coming_from ?>" class="form-control" placeholder=" " />
						 <label for="cust_todate" class="control-label " >إلي: </label>
						 <input type="text" id="emp_todate" name="emp_todate" value="<?php echo $coming_to ?>" class="form-control" placeholder=" " />
					</div>
					<div class="form-group formLayout">
						<label for="emp_salary" class="control-label " >مرتبه: </label>
						 <input type="text" id="emp_salary" name="emp_salary" value="<?php echo $fixed_salary ?>"  class="form-control" placeholder=" " />
					</div>
						<div class="form-group formLayout">
								<label for="gender" class="control-label ">النوع: </label>
									<select class="form-control" name="gender" > 
										<?php if($gender_id=="0"){
										  echo"  <option value='0'> انثي </option> ";
										  echo"  <option value='1'> ذكر </option> ";
										}
										else
										{
											echo"  <option value='1'> ذكر </option> ";
										    echo"  <option value='0'> انثي </option> ";

										}
                                        ?>
									 </select>
							</div>
				</div>

				
				<div class=" col-md-5">
					<div class="form-group formLayout profile">
						<img src="../_/images/profile1.jpg" alt="profile" class="profil_img"><br>
							<input type="file" name="profile"  class="image-upload btn btn-default btn-add-photo btn-xs camerabutton" > 						
<!-- 						     <img src="../_/images/profile1.jpg" alt="profile" class="profil_img"><br>
 -->						</div><br>


						<div class="form-group formLayout profile">
<!-- 							<img src="../_/images/profile1.jpg" alt="profile" class="profil_img"><br>
 -->							<input type="file" name="contract"  class="image-upload btn btn-default btn-add-photo btn-xs camerabutton" >							
						</div><br>

							<div class="form-group formLayout">
								<label for="department" class="control-label ">القسم: </label>
									<select class="form-control" name="department" > 
										    <option value="1"> تسويق </option> 
										    <option value="2"> مدير التسويق </option> 
										    <option value="3"> خدمه عملاء </option> 
										    <option value="4"> مدير </option> 
									 </select>
							</div>


							<div class="form-group formLayout">
								<label for="position" class="control-label ">position: </label>
									<select class="form-control" name="position" > 
										    <option value=""> إختر </option> 
									 </select>
							</div>
				</div>
			
					
				<button type="submit" class="btn btn-default" id="addemployee">تأكيد</button>
				</form>
					</div>
					</div>
			</div>
			</div>
		</div>


	<!--------------------------------------------------------------/menubar---------------------------------------------------------------->

<?php $this->load->view('Scripts');?>
<script>
	function myFunction(){
	$(".editemployee").css("display","block");
	$('#myTab a[href = "#EditEmployee"]').tab('show');
}
</script>
<script>
$(document).on("click",".delete-emp",function () {
	//alert('ok');
	var id=$(this).data('id');
	//alert(id);
	$(".modal-body #delete_employeeid").val(id);
});
</script>

<script>
$(document).on("click",".edit-emp",function () {
	//alert('ok');
	var id=$(this).data('id');
	//alert(id);
	$(".modal-body #delete_employeeid").val(id);
});
</script>
	</body>
</html>