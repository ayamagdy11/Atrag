<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>بيانات موظف</title>
		<?php $this->load->view('Header');?>
		</head>
	<body>

	
	<!--------------------------------------------------------------contectpage---------------------------------------------------------------->
		<div class="Add">
			
			<?php $this->load->view('toolbar'); ?>
				<div class="col-md-2 col-md-offset-10 ">
						<?php $this->load->view('MenuBar');?>
				</div>
	
				<form action="#" method="post" class="row" enctype="multipart/form-data">
				<div>
				<div class="box-wider-text">
				<div class="personaldetails">
					<h4>البيانات الشخصية</h4>
					  <div class="form-group formLayout">
						<label for="emp_name" class="control-label " >الاسم: </label>
						<label for="emp_name" class="control-label " >ياسمين عبد المنصف </label>
						
					</div> 
					<div class="form-group formLayout">
						<label for="emp_birthdate" class="control-label " >تاريخ الميلاد: </label>
						<label for="emp_birthdate" class="control-label " >20-04-2015 </label>
						 
					</div> 
					
					
					<div class="form-group formLayout">
						<label for="cust_id" class="control-label " >رقم البطاقة: </label>
						<label for="cust_id" class="control-label " >3343434567890 </label>
						
					</div>
						<div class="form-group formLayout">
								<label for="gender" class="control-label ">النوع: </label>
								<label for="gender" class="control-label ">أنثي: </label>
									
							</div>
								<div class="form-group formLayout">
									<label for="emp_address" class="control-label " >العنوان: </label>
									<label for="emp_address" class="control-label " >جليم: </label>
						 
					</div>
					<div class="form-group formLayout">
						<label for="cust_mobile" class="control-label " >رقم التليفون: </label>
						<label for="cust_mobile" class="control-label " >27830308</label>
					</div>	
					<div class="form-group formLayout">
						<label for="emp_email" class="control-label " >الايميل: </label>
						<label for="emp_email" class="control-label " >yass.aast@gmail.com</label>
					</div> 
				</div>
				</div>
				<div class="uploaddata">
					<div class="form-group formLayout profile">
							<img src="../_/images/profile2.jpg" alt="profile" class="profil_imgdetails"><br>
														
						</div>
					
</div>				</div>
				
				<div class="row">
				
				<div class="col-md-4 ">
				<div class="work2">
					<div class="form-group formLayout">
						<label for="subtraction_rate" class="control-label " >النسبه المئويه للخصم للتأخير: </label>
						<label for="subtraction_rate" class="control-label " >23% </label>
					</div>
					<div class="form-group formLayout">
						<label for="overtime_rate" class="control-label " >النسبه المثويه للوقت الزياده بعد العمل: </label>
						<label for="overtime_rate" class="control-label " >23%</label>
					</div>
					
					<div class="form-group formLayout">
						<label for="emp_salary" class="control-label " >المرتب: </label>
						<label for="emp_salary" class="control-label " >2000 </label>
					</div>
					
					<div class="form-group formLayout">
								<label for="department" class="control-label ">القسم: </label>
								<label for="department" class="control-label ">تسويق </label>
									
							</div>
					<div class="form-group formLayout">
								<label for="position" class="control-label ">المسمي الوظيفي: </label>
								<label for="position" class="control-label ">senior</label>
									
							</div>	
					
				
				</div>
				</div>
					<div class="col-md-4">
				<div class="work3">
				<div class="form-group formLayout">
						<label for="cust_fromdate" class="control-label " >مواعيد العمل </label><br>
						<label for="cust_fromdate" class="control-label " >من: </label>
						<label for="cust_fromdate" class="control-label " >9:00 AM</label>
						 
						 <label for="cust_todate" class="control-label " >إلي: </label>
						 <label for="cust_todate" class="control-label " >11:00 AM</label>
						 
					</div>
				</div></div>
				<div class="col-md-4">
				<div class="work">
					<h4>بيانات العمل</h4>
					<div class="form-group formLayout">
						<label for="employment_date" class="control-label " >تاريخ التعيين: </label>
						<label for="employment_date" class="control-label " >23-05-2016 </label>
						 
					</div>
					<div class="form-group formLayout">
						<label for="zkt_id" class="control-label " >رقم بصمه الاصبع: </label>
						<label for="zkt_id" class="control-label " >800 </label>
						
					</div>

					<div class="form-group formLayout">
						<label for="password" class="control-label " >الرقم السري: </label>
						<label for="password" class="control-label " >2345 </label>
					</div>
					
				</div>
				</div>
				</div>
			
				</form>
		</div>	
		</div>


	<!--------------------------------------------------------------/menubar---------------------------------------------------------------->

<?php $this->load->view('Scripts');?>
	</body>
</html>