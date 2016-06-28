<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>إضافة موظف</title>
		<?php $this->load->view('Header');?>
		</head>
	<body>

          <?php
//        if ($this->session->userdata('logged_in')) {
//            $session_data = $this->session->userdata('logged_in');
//            if ($session_data['type_id'] == '4') {
                ?>
	
	<!--------------------------------------------------------------menubar---------------------------------------------------------------->
		<div class="menubar">
			<div class="row">
				<div class="col-md-2 col-md-offset-10 ">
						<?php $this->load->view('MenuBar');?>
				</div>
				<form action="<?php echo $this->config->base_url(); ?>employee/insertemployee" method="post" class="row" enctype="multipart/form-data">
				<div class=" col-md-5 col-md-offset-5 personal">
					  <div class="form-group formLayout">
						<label for="emp_name" class="control-label " >الاسم: </label>
						 <input type="text" id="emp_name" name="emp_name"  class="form-control" placeholder="الاسم " />
					</div> 
					<div class="form-group formLayout">
						<label for="emp_birthdate" class="control-label " >تاريخ الميلاد: </label>
						 <input type="datepicker" id="emp_birthdate" name="emp_birthdate"  class="form-control" placeholder="تاريخ الميلاد " />
					</div> 
					<div class="form-group formLayout">
						<label for="emp_email" class="control-label " >الايميل: </label>
						 <input type="datepicker" id="emp_email" name="emp_email"  class="form-control" placeholder="الايميل " />
					</div> 
					<div class="form-group formLayout">
						<label for="emp_address" class="control-label " >العنوان: </label>
						 <input type="text" id="emp_address" name="emp_address"  class="form-control" placeholder="العنوان " />
					</div>
					<div class="form-group formLayout">
						<label for="cust_mobile" class="control-label " >رقم التليفون: </label>
						 <input type="text" id="emp_mobile" name="emp_mobile"  class="form-control" placeholder="رقم التليفون " />
					</div>	
					<div class="form-group formLayout">
						<label for="cust_id" class="control-label " >رقم البطاقة: </label>
						 <input type="text" id="emp_id" name="emp_id"  class="form-control" placeholder=" " />
					</div>

                	<div class="form-group formLayout">
						<label for="password" class="control-label " >الرقم السري: </label>
						 <input type="text" id="password" name="password"  class="form-control" placeholder=" " />
					</div>

					<div class="form-group formLayout">
						<label for="zkt_id" class="control-label " >رقم بصمه الاصبع: </label>
						 <input type="text" id="zkt_id" name="zkt_id"  class="form-control" placeholder=" " />
					</div>

					<div class="form-group formLayout">
						<label for="employment_date" class="control-label " >تاريخ التعيين: </label>
						 <input type="text" id="employment_date" name="employment_date"  class="form-control" placeholder=" " />
					</div>

					<div class="form-group formLayout">
						<label for="subtraction_rate" class="control-label " >النسبه المئويه للخصم للتأخير: </label>
						 <input type="text" id="subtraction_rate" name="subtraction_rate"  class="form-control" placeholder=" " />
					</div>

					<div class="form-group formLayout">
						<label for="overtime_rate" class="control-label " >النسبه المثويه للوقت الزياده بعد العمل: </label>
						 <input type="text" id="overtime_rate" name="overtime_rate"  class="form-control" placeholder=" " />
					</div>

					<div class="form-group formLayout">
						<label for="cust_fromdate" class="control-label " >مواعيد العمل </label><br>
						<label for="cust_fromdate" class="control-label " >من: </label>
						 <input type="text" id="emp_fromdate" name="emp_fromdate"  class="form-control" placeholder=" " />
						 <label for="cust_todate" class="control-label " >إلي: </label>
						 <input type="text" id="emp_todate" name="emp_todate"  class="form-control" placeholder=" " />
					</div>
					<div class="form-group formLayout">
						<label for="emp_salary" class="control-label " >مرتبه: </label>
						 <input type="text" id="emp_salary" name="emp_salary"  class="form-control" placeholder=" " />
					</div>
						<div class="form-group formLayout">
								<label for="gender" class="control-label ">النوع: </label>
									<select class="form-control" name="gender" > 
										    <option value="0"> انثي </option> 
										    <option value="1"> ذكر </option> 

									 </select>
							</div>
				</div>

				
				<div class=" col-md-5">
					<div class="form-group formLayout profile">
							<img src="../_/images/profile1.jpg" alt="profile" class="profil_img"><br>
							<input type="file" name="profile"  class="image-upload btn btn-default btn-add-photo btn-xs camerabutton" >							
						</div><br>


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


	<!--------------------------------------------------------------/menubar---------------------------------------------------------------->

<?php $this->load->view('Scripts');?>
	</body>
</html>
     <?php //}?>
        <?php //}?>