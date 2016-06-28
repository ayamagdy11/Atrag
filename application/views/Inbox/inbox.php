<!DOCTYPE html>
<html lang="en">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>الرسائل الواردة</title>
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
				<?php $this->load->view('MenuBar')?>
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
						<table class="pure-table table-responsive tabdetails" >
							<thead>
							
							
									<th>
									<div class="checkbox">
									<label>
									  <input type="checkbox"> 
									</label>
								  </div></th>
									<th>الصورة</th>
								<th>الاسم</th>
								<th>التاريخ</th>
						
								<th>الموضوع</th>
								<th>موافق/غير موافق</th>
							</thead>
							<tbody>
								<tr>
								<form method="post" action="#">
									<td>
									<div class="checkbox">
										<label>
										  <input type="checkbox".
										</label>
									  </div>
									</td>
									<td><img src="<?php echo $this->config->base_url(); ?>_/images/profile2.jpg" class="inboxphoto"></td>
									<td>محمد علي</td>
									<td>20-06-2016</td>
									     <td class="TableDataDiv">
                                                                <ul class="row">
                                                                  <li class="col-md-12"><a type="button" class="SubItemBtnOpen"><span class="fa fa-plus-square"></span> إذن شخصي</a></li>
                                               
                                                                </ul>
                                                                <div class="SubItem collapse">
																<p class="detailpermission">
																برحاء التفضل بالموافقة علي منحي إذن شخصي من الساعة 10 صياحا و حتي ال12 ظهرا
																</p>
                                                            
                                                                </div>
                                                            </td> 
									<td>
									<button  type="submit" class="submit"><i class="fa fa-check" aria-hidden="true"></i></button>
									<button  type="submit" class="none"><i class="fa fa-times" aria-hidden="true"></i></button>
									</td>
									
									
									</form>
								</tr>
							</tbody>
						</table>
	
					 
					</div>
					<div class="left"></div>
			
			</div>
		</div>


	<!--------------------------------------------------------------/menubar---------------------------------------------------------------->

<?php $this->load->view('Scripts');?>

	</body>
</html>