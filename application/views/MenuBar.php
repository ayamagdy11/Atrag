<div class="page-container">
  <div class="sidebar-menu">
    <header class="logo"> <a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
	<a href="#">
	<img src="<?php echo $this->config->base_url(); ?>_/images/profile1.jpg" alt="profile" class="menuprofile">
	          <?php if ($this->session->userdata('logged_in')) {
                    $session_data = $this->session->userdata('logged_in'); ?>   
                    <h4><?php echo $session_data['username']; ?> </h4>
<?php } ?>
	
	<!--span id="logo" class="fa fa-html5 fa-5x"></span--> 
      <!--<img id="logo" src="" alt="Logo"/>--> 
      </a> </header>
    <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
    <div class="menu">
      <ul id="menu" >
        <li id="menu-home" ><a href="#"><i class="fa fa-home"></i><span>الصفحة الرئيسية</span></a></li>
        <li id="menu-comunicacao" ><a href="<?php echo $this->config->base_url(); ?>employee/Inbox"><i class="fa fa-envelope"></i><span>الرسائل الواردة</span><!--span class="fa fa-angle-double-right" style="float: right"></span--></a>          <!--ul id="menu-comunicacao-sub" >
          
          <!--ul id="menu-comunicacao-sub" >
            <!--li id="menu-mensagens" style="width: 120px" ><a href="#">الخزنة<!--i class="fa fa-angle-right" style="float: right; margin-right: -8px; margin-top: 2px;"></i--><!--/a>
              <!--ul id="menu-mensagens-sub" >
                <li id="menu-mensagens-enviadas" ><a href="#">Item 1.1</a></li>
                <li id="menu-mensagens-recebidas" ><a href="#">Item 1.2</a></li>
                <li id="menu-mensagens-nova" ><a href="#">Item 1.3</a></li>
              </ul-->
            <!--/li>
            <|!--li id="menu-arquivos" ><a href="#">الموظفين</a></li>
            <li id="menu-arquivos" ><a href="#">مستندات</a></li-->
          <!--/ul-->
        </li>
        <li id="menu-academico" ><a href="#"><i class="fa fa-users" aria-hidden="true"></i><span>الموظفين</span></a>
          <ul id="menu-academico-sub" >
            <li id="menu-academico-avaliacoes" ><a href="<?php echo $this->config->base_url(); ?>employee/index">
			<i class="fa fa-user-plus" aria-hidden="true"></i>
				إضافة موظف</a>
			</li>
            <li id="menu-academico-avaliacoes" ><a href="<?php echo $this->config->base_url(); ?>employee/ShowEmployee"><i class="fa fa-tasks" aria-hidden="true"></i>
				بيانات الموظفين</a></li>
          
          </ul>
        </li>
        <li><a href="#"><i class="fa fa-share-alt"></i><span>الخزنة</span></a>
          <ul>
            <li><a href="#"><i class="fa fa-reply" aria-hidden="true"></i>إذن صرف</a></li>
            <li><a href="#"><i class="fa fa-share" aria-hidden="true"></i>إذن توريد</a></li>
            
          </ul>
        </li>
		<li id="menu-academico" ><a href="#"><i class="fa fa-users" aria-hidden="true"></i><span>مفردات المرتب</span></a>
		 <ul id="menu-academico-sub" >
            <li id="menu-academico-avaliacoes" ><a href="<?php echo $this->config->base_url(); ?>employee/Discounts">
			<i class="fa fa-percent" aria-hidden="true"></i>
				خصومات</a>
			</li>
            <li id="menu-academico-avaliacoes" ><a href="<?php echo $this->config->base_url(); ?>employee/Commission"><i class="fa fa-tasks" aria-hidden="true"></i>
			علاوات</a></li>
          
          </ul>
		</li>
   
        <li><a href="<?php echo $this->config->base_url(); ?>employee/Department"><i class="fa fa-list-ul" aria-hidden="true"></i><span>الاقسام</span></a></li>
		<li><a href="<?php echo $this->config->base_url(); ?>employee/Request"><i class="fa fa-list-ul" aria-hidden="true"></i><span>الطلبات</span></a></li>
	
        <li><a href="#"><i class="fa fa-info" aria-hidden="true"></i><span>المسمي الوظيفي</span></a></li>
      </ul>
    </div>
  </div>
</div>