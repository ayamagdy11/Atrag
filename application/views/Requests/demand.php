<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>ملئ الاستمارة</title>
	<?php $this->load->view('Header');?>
		</head>
	<body>
	<!------------------------Add Discount---------------->
		<div class="modal fade" id="AddRequest">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
						<h3><strong>بيان عميل</strong></h3>
					</div>
					<form action="<?php echo $this->config->base_url(); ?>employee/adddemand" method="post">
						<div class="modal-body ">
					<div class="form-group formLayout">
						<label for="date" class="control-label " >التاريخ: </label>
						 <input type="text" id="date" name="date"  class="form-control" placeholder="" />
					</div> 
							<div class="form-group formLayout">
								<label for="requesttype" class="control-label ">نوع الطلب: </label>
									<select class="form-control" name="requesttype" > 
										    <option value="0"> تمليك </option> 
										    <option value="1"> سكن</option> 
										    <option value="2"> مفروش</option> 
										    <option value="3"> إداري</option> 

									 </select>
							</div>
				    <div class="form-group formLayout">
								<label for="pay" class="control-label ">طريقه السداد </label>
									<select class="form-control" name="pay" > 
										    <option value="0"> كاش </option> 
										    <option value="1"> تقسيط</option> 
									 </select>
							</div>	
					<div class="form-group formLayout">
						<label for="purpose" class="control-label " >الغرض: </label>
						 <input type="text" id="purpose" name="purpose"  class="form-control" placeholder="" />
					</div> 
						<div class="row">
					<div class="form-group formLayout col-md-6">
						<label for="period" class="control-label " >المدة: </label>
						 <input type="text" id="period" name="period"  class="form-control" placeholder="" />
					</div> 
					<div class="form-group formLayout col-md-6">
						<label for="commision" class="control-label " >العمولة: </label>
						 <input type="text" id="commision" name="commision"  class="form-control" placeholder="" />
					</div> 
					</div> 
					<h4>تفاصيل البيان</h4>
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="Areas2" class="control-label " >المنطقه 2: </label>
						 <input type="text" id="Areas2" name="Areas2"  class="form-control" placeholder="" />
					</div> 
					<div class="form-group formLayout col-md-6">
						<label for="Areas1" class="control-label " >المنطقه 1: </label>
						 <input type="text" id="Areas1" name="Areas1"  class="form-control" placeholder="" />
					</div> 

					<div class="form-group formLayout col-md-6">
						<label for="Areas3" class="control-label " >المنطقه 4: </label>
						 <input type="text" id="Areas3" name="Areas3"  class="form-control" placeholder="" />
					</div> 
					<div class="form-group formLayout col-md-6">
						<label for="Areas4" class="control-label " >المنطقه 3: </label>
						 <input type="text" id="Areas4" name="Areas4"  class="form-control" placeholder="" />
					</div> 

					</div>
					<div class="row">
					<div class="form-group formLayout col-md-6">
						<label for="size" class="control-label " >المساحة: </label>
						 <input type="text" id="size" name="size"  class="form-control" placeholder="" />
					</div> 
					</div> 
						
					<div class="row">
						<div class="form-group formLayout">
						<label for="floors" class="control-label " >أدوار: </label>
						 <input type="text" id="floors" name="floors"  class="form-control" placeholder="" />
					</div> 					
						</div>
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="rooms" class="control-label " >الغرف: </label>
						 <input type="text" id="rooms" name="rooms"  class="form-control" placeholder="" />
					</div> 	
					<div class="form-group formLayout col-md-6">
						<label for="reception" class="control-label" >ريسبشن: </label>
						 <input type="text" id="reception" name="reception"  class="form-control" placeholder="" />
					</div> 	
					</div> 	
					<div class="row">
			
					<div class="form-group formLayout col-md-6">
						<label for="bathroom" class="control-label " >حمامات: </label>
						 <input type="text" id="bathroom" name="bathroom"  class="form-control" placeholder="" />
					</div> 	
						
					</div> 	
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="note" class="control-label " >ملاحظة: </label>
						 <input type="text" id="note" name="note"  class="form-control" placeholder="" />
					</div> 	
					<div class="form-group formLayout col-md-6">
								<label for="finishing" class="control-label ">التشطيب: </label>
									<select class="form-control" name="finishing" > 
										    <option value="0"> بدون </option> 
										    <option value="1"> 1/2 تشطيب</option> 
										    <option value="2"> سوبر لوكس</option> 
										    <option value="3"> أول سكن</option> 

									 </select>
							</div>
						
						</div>
					<div class="row">
						<div class="form-group formLayout ">
						<label for="notes" class="control-label " >ملاحظات: </label>
						 <textarea id="notes" name="notes"></textarea>
					   </div> 	
					</div>
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="date1" class="control-label " >مواعيد المعاينة 1: </label>
						 <input type="text" id="date1" name="date1"  class="form-control" placeholder="" />
					</div> 	
                    </div> 	
			<div class="row">
				<div class="form-group formLayout col-md-6">
						<label for="date2" class="control-label " >مواعيد المعاينة 2: </label>
						 <input type="text" id="date2" name="date2"  class="form-control" placeholder="" />
					</div> 	
				</div> 	
				<div class="row">
							<div class="form-group formLayout col-md-6">
						<label for="date3" class="control-label " >مواعيد المعاينة 3: </label>
						 <input type="text" id="date3" name="date3"  class="form-control" placeholder="" />
					</div> 	
				</div> 	
					
					
					 
					<div class="row">
					<div class="form-group formLayout col-md-6">
						<label for="job" class="control-label " >الوظيفة: </label>
						 <input type="text" id="job" name="job"  class="form-control" placeholder="" />
					</div> 	
							<div class="form-group formLayout col-md-6">
						<label for="name" class="control-label " >الاسم: </label>
						 <input type="text" id="name" name="name"  class="form-control" placeholder="" />
					</div> 	
					 	
					</div> 
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="tele2" class="control-label " >تليفون 2: </label>
						 <input type="text" id="tele2" name="tele2"  class="form-control" placeholder="" />
					</div> 	 
							<div class="form-group formLayout col-md-6">
						<label for="tele1" class="control-label " >تليفون 1: </label>
						 <input type="text" id="tele1" name="tele1"  class="form-control" placeholder="" />
					</div> 	
					
					</div> 
					<div class="form-group formLayout">
						<label for="source" class="control-label " >المصدر: </label>
						 <input type="text" id="source" name="source"  class="form-control" placeholder="" />
					</div> 
						</div>
						<div class="modal-footer mf">
							<button class="btn btn-info btn-sm " type="submit" id="DoneAdd">أضف</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
	   </div> 
     
  	<!-------------------------End Add Discount---------------->
	<!-------------------------Edit Discount---------------->
		<div class="modal fade" id="EditRequest">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button> 
						<h3><strong>تعديل بيانات</strong></h3>
					</div>
					<form action="<?php echo $this->config->base_url(); ?>employee/adddemand" method="post">
						<div class="modal-body ">
					<div class="form-group formLayout">
						<label for="date" class="control-label " >التاريخ: </label>
						 <input type="text" id="date" name="date"  class="form-control" placeholder="" />
					</div> 
							<div class="form-group formLayout">
								<label for="requesttype" class="control-label ">نوع الطلب: </label>
									<select class="form-control" name="requesttype" > 
										    <option value="0"> تمليك </option> 
										    <option value="1"> سكن</option> 
										    <option value="2"> مفروش</option> 
										    <option value="3"> إداري</option> 

									 </select>
							</div>
				    <div class="form-group formLayout">
								<label for="pay" class="control-label ">طريقه السداد </label>
									<select class="form-control" name="pay" > 
										    <option value="0"> كاش </option> 
										    <option value="1"> تقسيط</option> 
									 </select>
							</div>	
					<div class="form-group formLayout">
						<label for="purpose" class="control-label " >الغرض: </label>
						 <input type="text" id="purpose" name="purpose"  class="form-control" placeholder="" />
					</div> 
						<div class="row">
					<div class="form-group formLayout col-md-6">
						<label for="period" class="control-label " >المدة: </label>
						 <input type="text" id="period" name="period"  class="form-control" placeholder="" />
					</div> 
					<div class="form-group formLayout col-md-6">
						<label for="commision" class="control-label " >العمولة: </label>
						 <input type="text" id="commision" name="commision"  class="form-control" placeholder="" />
					</div> 
					</div> 
					<h4>تفاصيل البيان</h4>
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="Areas2" class="control-label " >المنطقه 2: </label>
						 <input type="text" id="Areas2" name="Areas2"  class="form-control" placeholder="" />
					</div> 
					<div class="form-group formLayout col-md-6">
						<label for="Areas1" class="control-label " >المنطقه 1: </label>
						 <input type="text" id="Areas1" name="Areas1"  class="form-control" placeholder="" />
					</div> 

					<div class="form-group formLayout col-md-6">
						<label for="Areas3" class="control-label " >المنطقه 4: </label>
						 <input type="text" id="Areas3" name="Areas3"  class="form-control" placeholder="" />
					</div> 
					<div class="form-group formLayout col-md-6">
						<label for="Areas4" class="control-label " >المنطقه 3: </label>
						 <input type="text" id="Areas4" name="Areas4"  class="form-control" placeholder="" />
					</div> 

					</div>
					<div class="row">
					<div class="form-group formLayout col-md-6">
						<label for="size" class="control-label " >المساحة: </label>
						 <input type="text" id="size" name="size"  class="form-control" placeholder="" />
					</div> 
					</div> 
						
					<div class="row">
						<div class="form-group formLayout">
						<label for="floors" class="control-label " >أدوار: </label>
						 <input type="text" id="floors" name="floors"  class="form-control" placeholder="" />
					</div> 					
						</div>
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="rooms" class="control-label " >الغرف: </label>
						 <input type="text" id="rooms" name="rooms"  class="form-control" placeholder="" />
					</div> 	
					<div class="form-group formLayout col-md-6">
						<label for="reception" class="control-label" >ريسبشن: </label>
						 <input type="text" id="reception" name="reception"  class="form-control" placeholder="" />
					</div> 	
					</div> 	
					<div class="row">
			
					<div class="form-group formLayout col-md-6">
						<label for="bathroom" class="control-label " >حمامات: </label>
						 <input type="text" id="bathroom" name="bathroom"  class="form-control" placeholder="" />
					</div> 	
						
					</div> 	
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="note" class="control-label " >ملاحظة: </label>
						 <input type="text" id="note" name="note"  class="form-control" placeholder="" />
					</div> 	
					<div class="form-group formLayout col-md-6">
								<label for="finishing" class="control-label ">التشطيب: </label>
									<select class="form-control" name="finishing" > 
										    <option value="0"> بدون </option> 
										    <option value="1"> 1/2 تشطيب</option> 
										    <option value="2"> سوبر لوكس</option> 
										    <option value="3"> أول سكن</option> 

									 </select>
							</div>
						
						</div>
					<div class="row">
						<div class="form-group formLayout ">
						<label for="notes" class="control-label " >ملاحظات: </label>
						 <textarea id="notes" name="notes"></textarea>
					   </div> 	
					</div>
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="date1" class="control-label " >مواعيد المعاينة 1: </label>
						 <input type="text" id="date1" name="date1"  class="form-control" placeholder="" />
					</div> 	
                    </div> 	
			<div class="row">
				<div class="form-group formLayout col-md-6">
						<label for="date2" class="control-label " >مواعيد المعاينة 2: </label>
						 <input type="text" id="date2" name="date2"  class="form-control" placeholder="" />
					</div> 	
				</div> 	
				<div class="row">
							<div class="form-group formLayout col-md-6">
						<label for="date3" class="control-label " >مواعيد المعاينة 3: </label>
						 <input type="text" id="date3" name="date3"  class="form-control" placeholder="" />
					</div> 	
				</div> 	
					
					
					 
					<div class="row">
					<div class="form-group formLayout col-md-6">
						<label for="job" class="control-label " >الوظيفة: </label>
						 <input type="text" id="job" name="job"  class="form-control" placeholder="" />
					</div> 	
							<div class="form-group formLayout col-md-6">
						<label for="name" class="control-label " >الاسم: </label>
						 <input type="text" id="name" name="name"  class="form-control" placeholder="" />
					</div> 	
					 	
					</div> 
					<div class="row">
						<div class="form-group formLayout col-md-6">
						<label for="tele2" class="control-label " >تليفون 2: </label>
						 <input type="text" id="tele2" name="tele2"  class="form-control" placeholder="" />
					</div> 	 
							<div class="form-group formLayout col-md-6">
						<label for="tele1" class="control-label " >تليفون 1: </label>
						 <input type="text" id="tele1" name="tele1"  class="form-control" placeholder="" />
					</div> 	
					
					</div> 
					<div class="form-group formLayout">
						<label for="source" class="control-label " >المصدر: </label>
						 <input type="text" id="source" name="source"  class="form-control" placeholder="" />
					</div> 
						</div>
						<div class="modal-footer mf">
							<button class="btn btn-info btn-sm " type="submit" id="DoneAdd">أضف</button>
						</div>
					</form>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
	   </div> 
	   
   <!-------------------------End Delete Discount----------------->
	<!--------------------------------------------------------------menubar---------------------------------------->
		<div class="menubar">
			<div class="row">
				
				<div class="col-md-2 col-md-offset-10 ">
				
				</div>
			
					<div class=" col-md-10 details">
					<h3>طلبات</h3>
					<button class="btn btn-default addbtn" data-toggle='modal' data-target="#AddRequest">أضف طلب</button>
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
							
							
									<th>
									<div class="checkbox">
									<label>
									  <input type="checkbox"> 
									</label>
								  </div></th>
								<th>الاسم</th>
								<th>التاريخ</th>
								<th>تعديل</th>
								<th>حذف</th>
							</thead>
							<tbody>
								<tr>
								
									<td>
									<div class="checkbox">
										<label>
										  <input type="checkbox".
										</label>
									  </div>
									</td>
									<td>11:00 AM</td>
									<td>12-6-2016</td>
									<td><a type='button' class=' edit-emp' data-toggle='modal' data-target="#EditRequest"><i class='fa fa-pencil-square-o'></i></a></td>
									<td><a type='button' class='edit-emp' data-toggle='modal' data-target="#DeleteRequest"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
									
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