<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>طلب إذن</title>
	<?php $this->load->view('Header');?>
		</head>
	<body>
	<!------------------------Add Discount----------------->
		
  	<!-------------------------End Edit Discount----------------->
  	<!-------------------------start Delete Discount----------------->

	<!--------------------------------------------------------------menubar----------------------------------------->
		<div class="menubar">
			<div class="row">
				<?php $this->load->view('toolbar'); ?>
				<div class="topbar">
			
<h3>طلب إذن</h3><i class="fa fa-eyedropper" aria-hidden="true"></i>
</div>
				</div>
				<div class="col-md-2 col-md-offset-10 ">
				<?php $this->load->view('MenuBar')?>
				</div>
			
					<div class=" col-md-9 col-md-offset-1 details">
					
				<div class="confirm col-md-3">
						<div class="alert">
						  <strong>تم الموافقة <i class="fa fa-check" aria-hidden="true"></i>
</strong>
						</div>
						</div>
					  <form id="SearchForm" class="col-md-7 col-md-offset-4 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="SearhDiv form-group formLayout col-md-9 col-sm-12 col-xs-12 ">
                                         <span class="Inputspan fa fa-search"></span>
		        					     <input type="text" name=""  class="form-control" placeholder="" />
	       				            </div>
                                </div>
						</form>
						
						<div class="permission ">
							<form action="#" method="post">
								<div class="row">
									<!--div class="form-group formLayout col-md-6 col-md-offset-6" id="formlayout">
										<label for="permissionname" class="control-label ">الاسم:</label>
										<input type="text" id="Permissionname" name="permissionname"  class="form-control" placeholder="الاسم" />
									</div-->
									
									
								</div>
								<div class="row">
									<div class="form-group formLayout col-md-3 col-md-offset-9" id="formlayout">
										<label for="permissionDepartment" class="control-label ">القسم:</label>
										<select name="permissionDepartment" class="form-control">
											<option>12</option>
										</select>
									</div>
								</div>
								<div class="row">
									<div class="form-group formLayout col-md-3 col-md-offset-6" id="formlayout">
											<label for="permissionto" class="control-label ">إلي:</label>
											<input type="text" id="permissionto" name="permissionto" class="form-control" placeholder="">
									</div>
									<div class="form-group formLayout col-md-3 " id="formlayout">
										<label for="permissionfrom" class="control-label ">من:</label>
										<input type="text" id="permissionfrom" name="permissionfrom"  class="form-control" placeholder="" />
									</div>
							
								</div>
								<div class="form-group formLayout col-md-6 col-md-offset-6" id="formlayout">
										<label for="permissioncause" class="control-label ">السبب:</label><br>
										<textarea class="causepermission"></textarea>
								</div>
								<button type="submit" class="sendpermission">أرسل</button>
							</form>
						</div>
	
					 
					</div>
					<div class="left"></div>
			
			</div>
		</div>


	<!--------------------------------------------------------------/menubar---------------------------------------------------------------->

<?php $this->load->view('Scripts');?>

	</body>
</html>