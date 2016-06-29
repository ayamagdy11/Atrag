<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>توزيع الطلبات</title>
	<?php $this->load->view('Header');?>
		</head>
	<body>
	
	<!--------------------------------------------------------------menubar---------------------------------------->
		<div class="menubar">
			<div class="row">
				<?php $this->load->view('toolbar'); ?>
							<div class="topbar">
			
<h3>توزيع الطلبات</h3><i class="fa fa-eyedropper" aria-hidden="true"></i>
</div>
				<div class="col-md-2 col-md-offset-10 ">
				<?php $this->load->view('MenuBar')?>
				</div>
			
					<div class=" col-md-10 details">
				
					  <form id="SearchForm" class="col-md-7 col-md-offset-4 col-sm-12 col-xs-12">
                                <div class="row">
                                    <div class="SearhDiv form-group formLayout col-md-9 col-sm-12 col-xs-12 ">
                                         <span class="Inputspan fa fa-search"></span>
		        					     <input type="text" name=""  class="form-control" placeholder="" />
	       				            </div>
                                </div>
						</form>
				
						<table class="pure-table table-responsive tabdetails" >
							<thead>
		

							
								<th>كود الغقد</th>
								<th>التاريخ</th>
								<th>إسم البائع</th>
								<th>إسم المشتري</th>
								<th>إسم الموظف</th>
								<th>تأكيد</th>
						
							</thead>
							<tbody>
								<tr>
								
									<td>3</td>
									<td>23-05-2016</td>
									<td>احمد</td>
									<td>احمد</td>
									<td>
						                    <select class="form-control selectemployee" name="Select_employee" class="chooseemployee">
												<option></option>
											</select>
											</td>
									<td><button type="submit"class="submit"><i class="fa fa-check" aria-hidden="true"></i></button></td>
								</tr>
							</tbody>
						</table>
	
					 
					</div>
			
			</div>
		</div>


	<!--------------------------------------------------------------/menubar---------------------------------------------------------------->

<?php $this->load->view('Scripts');?>

	</body>
</html>