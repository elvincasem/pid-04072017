
            <div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
                
				
				<!--rightsidebar here-->
				<?php //$this->load->view('rightsidebar_view'); ?>
				
                <!--main sidebar here -->
				<?php $this->load->view('leftsidebar_view'); ?>

                <!-- Main Container -->
                <div id="main-container">
                   <?php $this->load->view('subheader_view'); ?>

                    <!-- Page content -->
                    <div id="page-content">

                      
                            
							<div class="row">
							</div>
							  <!-- Datepicker Block -->
                                <div class="block">
                                    <!-- Datepicker Title -->
                                    <div class="block-title">
                                        
                                        <h2>Filter</h2>
                                    </div>
                                    <!-- END Datepicker Title -->

                                    <!-- Datepicker Content -->
                                   <form action="edesignation_view" method="post" class="form-horizontal form-bordered" onsubmit="return true;">
                                        <!-- Datepicker for Bootstrap (classes are initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://eternicode.github.io/bootstrap-datepicker -->
                                        <div class="form-group">
										
											<div class="row">&nbsp;</div>
											<label class="col-md-3 control-label" for="example-daterange1">Designation</label>
											<div class="col-md-7">
										<select id="designation" name="designation" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
										<?php echo "<option value='".$designation_value."'>".$designation_value."</option>";?>
										<option value="All">All</option>
										
										<?php
											foreach($designation_list as $designationlist):
												echo "<option value='".$designationlist['designation']."'>".$designationlist['designation']."</option>";
											endforeach;
										
										?>
										
										
										</select>
											</div>
											
											
											
											
											
                                        </div>
                                        
                                        <div class="form-group form-actions">
                                            <div class="col-md-12 col-md-offset-6">
                                                <button type="submit" class="btn btn-effect-ripple btn-primary">Generate</button>
                                               
                                            </div>
                                        </div>
                                    </form>
                                    <!-- END Datepicker Content -->
                                </div>
                                <!-- END Datepicker Block -->
							
		<div class="block full">
        <div class="block-title">
			
			<h5>Employee by Designation</h5>
			<a type="button" class="pull-right btn btn-md btn-primary" href="<?=base_url()?>reports/ticketbyagentdownload/<?php echo $designation_value;?>">Export Result XLS</a>
			
			<?php //print_r($heidirectory);?>
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr>
						
                        <th>Name</th>
						<th>Designation</th>
                        <th>Gender</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Date hired</th>
                        <th>Status</th>
						
                    </tr>
                </thead>
                <tbody>
				<?php
				
				foreach ($employee_list as $employees):
				//$heiname = strtoupper($hei['instname']);
				echo "<tr class='odd gradeX'>";
				
				
				
				echo "<td>".$employees['fname']." ".$employees['lname']."</td>";
				echo "<td>".$employees['designation']."</td>";
				echo "<td>".$employees['gender']."</td>";
				echo "<td>".$employees['mobile_number']."</td>";
				echo "<td>".$employees['email_address']."</td>";
				
				
				echo "<td>".mdate('%F %d, %Y',strtotime($employees['date_hired']))."</td>";
				echo "<td>".$employees['employee_status']."</td>";
			
				
				echo "</tr>";
				
				endforeach;
				
				?>
				
				
				
				
                    
                </tbody>
            </table>
        </div>
    </div>
						


                        
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
       
