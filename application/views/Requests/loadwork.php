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
		

							    <th>id</th>
								<th>نوع الطلب</th>
								<th>التاريخ</th>
								<th>صاحب الطلب</th>
								<th>إسم المشتري</th>
								<th>إسم الموظف</th>
								<th>تأكيد</th>
						
							</thead>
							<?php foreach ($allrequest as $value) {

							?>
							<tbody>
								<tr>
								 <td><?php echo $value->id?></td>

								<form>
									<?php if($value->form_type==0) {
									echo"	<td>عرض</td>";
									}
									else
									{
										echo"	<td>طلب</td>";
									}

									?>
									<td><?php echo $value->date?></td>
									<td><?php echo $value->customer_name?></td>
									<td><?php echo $value->type?></td>

									<td>
						                    <select class="form-control selectemployee" id="Select_employee" name="Select_employee" class="chooseemployee">
												 
												 <?php foreach ($allemployee as $KEY) {
                                           echo '<option value="'.$KEY->id.'">'.$KEY->name.'</option>';									     	
									     	}
										    ?>
											</select>
											</td>
									<td><button  type="submit" id="request" class="submit editaya" data-id="<?php echo $value->id ;?>">
										<i class="fa fa-check" aria-hidden="true"></i></button></td>

								</form>
								</tr>
							</tbody>
				<?php 		}?>
						</table>
	
					 
					</div>
			
			</div>
		</div>


	<!--------------------------------------------------------------/menubar---------------------------------------------------------------->

<?php $this->load->view('Scripts');?>
<script>
$(document).on("click",".editaya",function(){
	var request=$('#request').data('id');
	var x=$('#Select_employee').val();
alert(request);
//alert(x);
	var id = $(this).data('id');

	// $.post(<?php  ?>ctrl/fubnc,data,function(result){

	// })

});
</script>
	</body>
</html>