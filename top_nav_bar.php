<!-- Top NavBar -->
<div id="wrapper">
<nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><?php echo $_SESSION['company_name']; ?></a> 
            </div>
				<div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Logout</a> </div>
</nav>

<!-- Side NavBar -->
<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="<?php echo SITE_ROOT; ?>assets/img/logo.gif" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="#"><i class="fa fa-desktop fa-3x"></i> Master Files Setup<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
                            <li>
                                <a  data-toggle="modal" href="#myModal"><span class='glyphicon glyphicon-home'></span> &nbsp; Company Basics</a>
                            </li>
							
							<li class="active-menu">&nbsp; <font color="white"> Chart of Accounts</font> </li>
                            <li>
                                <a href="<?php echo $_SERVER['PHP_SELF']."?route=maintain_coa_groups"; ?>"><span class='glyphicon glyphicon-book'>
								</span> &nbsp;Account Groups</a>
                            </li>
                            
                              <li>
                                       <a href="<?php echo $_SERVER['PHP_SELF']."?route=maintain_coa"; ?>">
														<span class='glyphicon glyphicon-list'>
														</span> &nbsp;Chart of Account <span class="fa arrow"></span>
										</a>
									<ul class="nav nav-third-level">
										<li>
                                        <a href="<?php echo $_SERVER['PHP_SELF']."?route=create_new_account"; ?>"><span class='glyphicon glyphicon-plus'>
											</span>&nbsp;Create New Account</a>
										</li>
									</ul>
                              </li>
								
						</ul>
						
                    </li>
					
					
                     <li>
                        <a  href="#"><i class="fa fa-shopping-cart fa-3x"></i> Purchase<span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo $_SERVER['PHP_SELF']."?route=purchase_order"; ?>"> &nbsp; Purchase Orders</a>
                            </li>
                            <li>
                               <a href="<?php echo $_SERVER['PHP_SELF']."?route=product_vendors"; ?>"> &nbsp;Product by Vendors</a>
                            </li>
                            <li>
                                <li><a href="<?php echo $_SERVER['PHP_SELF']."?route=vendor_invoice"; ?>"> &nbsp;INVOICE Given by Vendors </a></li>
						</ul>
                    </li>
                        <li class="dropdown">
							<a href="#" ><i class="fa fa-briefcase fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sales<span class="fa arrow"></span></span></a>
							<ul class="nav nav-second-level">
								<li><a href="<?php echo $_SERVER['PHP_SELF']."?route=sale_order"; ?>"> &nbsp; New Sale Order</a></li>	
								 
								<li><a href="<?php echo $_SERVER['PHP_SELF']."?route=sale_invoice"; ?>"> &nbsp;Sale INVOICE</a></li>
								
								<li><a href="<?php echo $_SERVER['PHP_SELF']."?route=customer_payment"; ?>"> &nbsp;Customer Payment</a></li>
								
							</ul>
                    </li>
						   <li  >
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bar-chart-o fa-3x"></i>Finance<span class="fa arrow"></span></span></a>
						<ul class="nav nav-second-level">
						<li> <a href="<?php echo $_SERVER['PHP_SELF']."?route=expense_voucher_add"; ?>"> &nbsp; Add Expense Voucher</a></li>
						<li><a href="<?php echo $_SERVER['PHP_SELF']."?route=received_voucher"; ?>"> &nbsp;Cash Received Voucher</a></li>
						</ul>
                    </li>
<!--- CRM --->					
					<li>
						<a href="#"><i class="fa fa-puzzle-piece fa-3x"></i> &nbsp;CRM <span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li class="active-menu"><font color="white"> &nbsp;Suppliers or Vendors Management</font></li>
							<li><a href="<?php echo $_SERVER['PHP_SELF']."?route=vendors_management"; ?>">&nbsp; Manage Vendors</a></li> 
							<li class="active-menu"><font color="white"> &nbsp;Clients or Buyer Management </font></li>
							<li><a href="<?php echo $_SERVER['PHP_SELF']."?route=clients_management"; ?>">&nbsp;Manage Clients</a></li>							
							<li class="active-menu"><font color="white"> &nbsp; Other Party Members Management </font></li>
							<li><a tabindex="-1" href="#">&nbsp;Others<span class="fa arrow"></span></a>
								<ul class="nav nav-third-level">
									<li><a href="#">Area Management</a></li>									
									<li><a href="#">Area Managers</a></li>									
									<li><a href="#">Loading Parties</a></li>
								</ul>
							</li>							
						</ul>
					</li>
<!-- My Account-->					
                      <li>
								<a  href="#"><i class="fa fa-user fa-3x"></i>&nbsp;&nbsp;&nbsp;&nbsp;My Account<span class="fa arrow"></span></a>
							<ul class="nav nav-second-level" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>  
								<li><a href="<?php echo $_SERVER['PHP_SELF']."?route=user_profile"; ?>"><span class='glyphicon glyphicon-user'></span> User Profile</a></li> 
								<?php
									if($role_id < 2) {
								?>			
								<li><a href="<?php echo $_SERVER['PHP_SELF']."?route=user_management"; ?>"><span class='glyphicon glyphicon-user'></span>&nbsp; Manage Users</a></li> 
								<li><a href="<?php echo $_SERVER['PHP_SELF']."?route=system_config"; ?>"><span class='glyphicon glyphicon-cog'></span> &nbsp;System Configuration</a></li>								
								<?php }?>			             
								<li><a href="<?php echo $_SERVER['PHP_SELF'].'?logout=1'; ?>" ><span class="glyphicon glyphicon-off"></span> Logout</a></li>
							</ul>							
					  </li>					                                      
                </ul>
               
            </div>
            
        </nav>
</div>

</nav>

