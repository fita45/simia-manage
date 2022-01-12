<!--========================= Header + Navbar ==============================-->

<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
                <a class="navbar-brand" href="<?php echo base_url('dashboard')?>"><img src="assets/img/b3.png"/>S I M I A </a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="<?php echo base_url('login/logout'); ?>" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   

<?php if ($this->session->userdata('LEVEL') == 'Admin'){ ?>

           <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>	
                    <li>
                        <a class="<?php if($navbar=='index')echo 'active-menu'?>"  href="<?php echo base_url('dashboard')?>"><i class="fa fa-desktop fa-3x"></i>Home</a>
                    </li>
                     <li>
                        <a  class="<?php if($navbar=='forum1'||$navbar=='forum2')echo 'active-menu'?>"href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i></i>Postingan<span class="fa arrow"></a>
						<ul class="nav nav-second-level">
							<li>
								<a class="<?php if($navbar=='forum1')echo 'active-menu'?>" href="<?php echo base_url('forum')?>">Baca Posting</a>
							</li>
							<li>
								<a class="<?php if($navbar=='forum2')echo 'active-menu'?>" href="<?php echo base_url('new_post')?>">Posting Baru</a>
							</li>
						</ul>
                    </li>
                    <li>
                        <a  href="tab-panel.html"><i class="fa fa-table fa-3x"></i>Image<span class="fa arrow"></a>
						<ul class="nav nav-second-level">
                            <li>
                                <a class="<?php if($navbar=='forum')echo 'active-menu'?>" href="view_stock.html">View Stock Darah</a>
                            </li>
                            <li>
                                <a class="<?php if($navbar=='forum')echo 'active-menu'?>" href="updatestokdarah.html">Tambah Stock Darah</a>
                            </li>
						</ul>
                    </li>
					<li>
                        <a class="<?php if($navbar=='pesan')echo 'active-menu'?>" href="<?php echo base_url('cont_view_pemesanan'); ?>"><i class="fa fa-table fa-3x"></i>Pemesanan Darah</a>							
                    </li>
					<li>
                        <a class="<?php if($navbar=='member')echo 'active-menu'?>" href="list_member.html"><i class="fa fa-sitemap fa-3x"></i>Member</a>
                    </li>
				    <li  >
                        <a  class="<?php if($navbar=='profile')echo 'active-menu'?>" href="<?php echo base_url('profile');?>"><i class="fa fa-edit fa-3x"></i>Profile</a>
                    </li>	                   
                </ul>            
            </div>        
        </nav> 
<br>
<?php }else if ($this->session->userdata('LEVEL') == 'Dokter'){ ?>

  <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>				
                    <li>
                        <a class="<?php if($navbar=='index')echo 'active-menu'?>"  href="<?php echo base_url('dashboard')?>"><i class="fa fa-desktop fa-3x"></i> Home</a>
                    </li>   
					<li>
                        <a class="<?php if($navbar=='chat')echo 'active-menu'?>" href="<?php echo base_url('chat')?>" ><i class="fa fa-square-o fa-3x"></i>Live Chat</a>
						<!--<ul class="nav nav-second-level">
                            <li>
                                <a href="javascript:void(0)" onClick="javascript:chatWith('Channel_1')">Channel 1</a>
                            </li>
                            <li>
                               <a href="javascript:void(0)" onClick="javascript:chatWith('Channel_2')">Channel 2</a>
                            </li>
							<li>
                               <a href="javascript:void(0)" onClick="javascript:chatWith('Channel_3')">Channel 3</a>
                            </li>
						</ul>-->
                    </li>	
					<li>
						<script type="text/javascript" src="js/jquery.js"></script>
						<script type="text/javascript" src="js/chat.js"></script>
                    </li>	
                </ul>
               
            </div>
            
        </nav>  

<?php }else{ ?>
    <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="<?php if($navbar=='index')echo 'active-menu'?>" class="<?php if($navbar=='index')echo 'active-menu'?>"  href="<?php echo base_url('dashboard')?>"><i class="fa fa-desktop fa-3x"></i> Home</a>
                    </li>
                     <li>
                        <a  class="<?php if($navbar=='forum1')echo 'active-menu'?>" href="tab-panel.html"><i class="fa fa-qrcode fa-3x"></i>Forum<span class="fa arrow"></a>
						<ul class="nav nav-second-level">
							<li>
								<a class="<?php if($navbar=='forum1')echo 'active-menu'?>" href="<?php echo base_url('forum')?>">Baca Posting</a>
							</li>
							<li>
								<a class="<?php if($navbar=='forum2')echo 'active-menu'?>" href="<?php echo base_url('new_post')?>">Posting Baru</a>
							</li>
						</ul>
                    </li>
                    <li>
                        <a  class="<?php if($navbar=='darah')echo 'active-menu'?>" href="tab-panel.html"><i class="fa fa-table fa-3x"></i>Stock Darah<span class="fa arrow"></a>
						<ul class="nav nav-second-level">
                            <li>
                                <a class="<?php if($navbar=='darah')echo 'active-menu'?>" href="<?php echo base_url('stock_darah')?>">View Stock Darah</a>
                            </li>
                            <li>
                                <a class="<?php if($navbar=='darah')echo 'active-menu'?>" href="<?php echo base_url('cont_pemesanan')?>">Pesan Darah</a>
                            </li>
						</ul>
                    </li>
					<li>
                        <a class="<?php if($navbar=='pesan')echo 'active-menu'?>" href="<?php echo base_url('cont_view_pemesanan'); ?>"><i class="fa fa-table fa-3x"></i>Pemesanan Darah</a>						
                    </li>
				    <li  >
                        <a class="<?php if($navbar=='profile')echo 'active-menu'?>" href="<?php echo base_url('profile');?>"><i class="fa fa-edit fa-3x"></i>Profile</a>
                    </li>	                   
                  <li>
                        <a class="<?php if($navbar=='chat')echo 'active-menu'?>" href="<?php echo base_url('chat')?>" ><i class="fa fa-square-o fa-3x"></i>Live Chat</a>
                    </li>
                </ul>    
            </div>   
        </nav>  
    <br>
<?php } ?>