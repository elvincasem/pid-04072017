<!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Sidebar Brand -->
                    <div id="sidebar-brand" class="themed-background">
                        <a href="<?=base_url()?>home" class="sidebar-title sidebar-nav-mini-hide">
						<img src="<?=base_url()?>public/img/ched_logo.png" width="20%">
						<strong>C.H.R.I.S.</strong>
                            
                        </a>
                    </div>
                    <!-- END Sidebar Brand -->

                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
								<li>
                                    <a href="<?=base_url()?>home"><i class="gi gi-compass sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Dashboard</span></a>
                                </li>
                                <li class="sidebar-separator">
                                    <i class="fa fa-ellipsis-h"></i>
                                </li>
								<!-- Employee -->
                                <li class="<?php echo $employeesclass;?>">
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-ruble sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Employee</span></a>
                                    <ul>
										<li>
                                            <a  class="<?php echo $employeesclass;?>" href="<?=base_url()?>employees" ><i class="gi gi-group sidebar-nav-icon"></i>Employees</a>
                                        </li>
										
										<li>
                                            <a href="<?=base_url()?>apr" class="<?php //echo $aprclass;?>hidden"><i class="fa fa-bank sidebar-nav-icon"></i>Request/Approval</a>
                                        </li>

										<li>
                                            <a href="<?=base_url()?>apr" class="<?php //echo $aprclass;?>hidden"><i class="fa fa-bank sidebar-nav-icon"></i>Rating</a>
                                        </li>

									</ul>
								</li>
								
								<!-- Applicants -->
                                <li class="<?php echo $applicantclass;?>">
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-ruble sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Applicants</span></a>
                                    <ul>
										<li>
                                            <a href="<?=base_url()?>applicants" class="<?php echo $applicantsubclass;?>"><i class="fa fa-bank sidebar-nav-icon"></i>Applicants</a>
                                        </li>

									</ul>
								</li>
								
								<!-- Applicants -->
                                <li class="<?php echo $reportsclass;?>">
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-ruble sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Reports</span></a>
                                    <ul>
										<li>
                                            <a href="<?=base_url()?>reports/edesignation" class="<?php //echo $applicantsubclass;?>"><i class="fa fa-bank sidebar-nav-icon"></i>Employee by Designation</a>
                                        </li>

									</ul>
								</li>
                               
								<!-- Settings-->
								<li class="<?php echo $settingsclass;?>">
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-chevron-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="fa fa-gear sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Settings</span></a>
                                    <ul>
										
										<li>
                                            <a class="<?php //echo $suppliersclass;?>" href="<?=base_url()?>position" ><i class="fa fa-cubes sidebar-nav-icon"></i>Position/Designation</a>
                                        </li>
									
										
										<li>
                                            <a  class="<?php //echo $userssubclass;?>" href="<?=base_url()?>users" ><i class="gi gi-user sidebar-nav-icon"></i>Users</a>
                                        </li>
										
										<li class="hidden<?php //echo $userssubclass;?>">
                                            <a href="<?=base_url()?>employees" ><i class="gi gi-settings sidebar-nav-icon"></i>Settings</a>
                                        </li>
										
										
									</ul>
								</li>
								
															
										
                            </ul>
							
							
							
                            <!-- END Sidebar Navigation -->

                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->

                    <!-- Sidebar Extra Info -->
                    <div id="sidebar-extra-info" class="sidebar-content sidebar-nav-mini-hide">
                        
                        <div class="text-center">
                            
                            <small> &copy; <a href="http://chedro1.com" target="_blank">CHRIS v1</a><br>This is a CHED RO1 Initiative and Not For Sale.</small>
                        </div>
                    </div>
                    <!-- END Sidebar Extra Info -->
                </div>
                <!-- END Main Sidebar -->