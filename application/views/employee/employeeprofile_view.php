
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
					
                        <!-- User Profile Row -->
		<div class="row">
			<div class="col-md-5 col-lg-4">
				<div class="widget">
					<div class="widget-image widget-image-sm">
						<img src="<?=base_url()?>public/img/placeholders/photos/photo1@2x.jpg" alt="image">
						<div class="widget-image-content text-center">
						<?php
		 
			if($status=="yes"){
				echo "<img style='width:70%;' src='$fileurl' alt='avatar' class='img-circle img-thumbnail img-thumbnail-transparent img-thumbnail-avatar-3x push'>";
			}else{
				echo "<img style='width:70%;' src='".base_url()."public/img/placeholders/avatars/avatar13@2x.jpg' alt='avatar' class='img-circle img-thumbnail img-thumbnail-transparent img-thumbnail-avatar-3x push'>";
			}
		 ?>
							
							<h3 class="widget-heading text-light"><strong><?php //echo $scholarapplicant_profile['firstname']." ".$scholarapplicant_profile['middlename']." ".$scholarapplicant_profile['lastname']." ".$scholarapplicant_profile['extension'];?> </strong></h3>
							<h5 class="widget-heading text-light-op"><em><?php //echo $scholarapplicant_profile['course'];?></em></h5>
						</div>
					</div>
                                    <div class="widget-content widget-content-full border-bottom">
                                        <div class="row text-center">
										
			<?php //echo form_open_multipart('scholarshipapplicants/image_upload');?> 
	   <form action = "" method = "">
		 <input type="hidden" id="fileid" name="fileid" value="<?php //echo $applicantid;?>">
		 
		 
		 
         <input type = "file" name = "assetimage" id = "assetimage" size = "10" class="col-md-8" /> 
        
         <input type = "submit" value = "upload"  class="btn btn-effect-ripple btn-primary"/> 
      </form> 
                                            <div class="col-xs-6 push-inner-top-bottom border-right">
                                                <h3 class="widget-heading"><small>Position:<strong>
												
												<select class="form-control">
													<option>Education Supervisor II</option>
												</select>
												</strong></small></h3>
                                            </div>
                                            <div class="col-xs-6 push-inner-top-bottom">
                                                <h3 class="widget-heading"><small>Salary (Monthly): <strong><input type="text" placeholder="0.00" class="form-control"></strong> </small></h3>
                                            </div>
                                        </div>
                                    </div>
									 
									 
                                    
                                </div>
                            </div>
                            <div class="col-md-7 col-lg-8">
                                <div class="block full">
                                    <!-- Block Tabs Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <ul class="nav nav-tabs" data-toggle="tabs">
											
                                            <li class="active"><a href="#profile-gallery">Personal Information</a></li>
                                           <li><a href="#familybackground">Family Background</a></li>
										  
                                        </ul>
                                    </div>
                                    <!-- END Block Tabs Title -->

                                    <!-- Tabs Content -->
                                    <div class="tab-content">
			<!-- Voucher -->
	<div class="tab-pane" id="voucher">
		<div class="timeline block-content-full">
         <div class="block">
                            <!-- Table Styles Title -->
                            <div class="block-title clearfix">
                                <!-- Changing classes functionality initialized in js/pages/tablesGeneral.js -->
                                
                                
                                <h2><span class="hidden-xs">Voucher List</span></h2>
								<a href="#modal-voucher" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add Voucher</a>
                            </div>                                      
 <div class="table-responsive">
 <table id="voucherlist-table" class="table table-striped table-bordered table-vcenter table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th>Cluster</th>
                                            <th>Date</th>
                                            <th>DV No</th>
											<th>ORS No</th>
											<th>Amount</th>
											<th>Semester</th>
											<th>SY</th>
											
                                            <th class="text-center"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
				/*
				foreach ($scholar_voucher as $voucher):
					echo "<tr>";
                                            
						echo "<td>".$voucher['fundcluster']."</td>";
						echo "<td>".$voucher['voucherdate']."</td>";
						echo "<td>".$voucher['dvno']."</td>";
						echo "<td>".$voucher['orsno']."</td>";
						echo "<td>".$voucher['amount']."</td>";
						echo "<td>".$voucher['vouchersemester']."</td>";
						echo "<td>".$voucher['vouchersy']."</td>";
						
					
						
						echo "<td class='text-center'>
							<a onclick='editpayment(".$voucher['voucherid'].");' href='#modal-voucher' data-toggle='modal' title='Edit Payment' class='btn btn-effect-ripple btn-sm btn-success'><i class='fa fa-pencil' ></i></a>
							<!--<a href='javascript:void(0)' data-toggle='tooltip' title='Cancel Payment' class='btn btn-effect-ripple btn-sm btn-danger' ><i class='fa fa-times'></i></a> -->
						</td>";
					echo "</tr>";
				
				
				endforeach;
				*/
				?>
                                       
                                        
                                    </tbody>
                                </table>
 </div>
</div>


											   
                                            </div>
                                        </div>
                                        <!-- END Voucher -->
									
									
									
									
                                        <!-- Payments -->
                                        <div class="tab-pane" id="profile-activity">
                                            <div class="timeline block-content-full">
         <div class="block">
                            <!-- Table Styles Title -->
                            <div class="block-title clearfix">
                                <!-- Changing classes functionality initialized in js/pages/tablesGeneral.js -->
                                
                                
                                <h2><span class="hidden-xs">Payment List</span></h2>
								<a href="#modal-regular" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="addpayment();">Add Payment</a>
                            </div>                                      
 <div class="table-responsive">
 <table id="general-table" class="table table-striped table-bordered table-vcenter table-condensed table-hover">
                                    <thead>
                                        <tr>
                                            
                                            <th>Semester</th>
                                            <th>SY</th>
                                            <th>Check #</th>
											<th>Amount</th>
											<th>Remarks</th>
											<th>CY</th>
											<th>Status</th>
                                            <th class="text-center"><i class="fa fa-flash"></i></th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
				/*
				foreach ($scholar_payment as $payment):
					echo "<tr>";
                                            
						echo "<td>".$payment['semester']."</td>";
						echo "<td>".$payment['schoolyear']."</td>";
						echo "<td>".$payment['checkno']."</td>";
						echo "<td>".$payment['amount']."</td>";
						echo "<td>".$payment['remarks']."</td>";
						echo "<td>".$payment['cy']."</td>";
						if($payment['status']=="Available"){
							echo "<td><a href='#' class='label label-success'>".$payment['status']."</a>";
								
						}
						if($payment['status']=="Cancelled"){
							echo "<td><a href='#' class='label label-danger'>".$payment['status']."</a>";
								
						}
						if($payment['status']=="Received"){
							echo "<td><a href='#' class='label label-info'>".$payment['status']."</a>";
								
						}
						if($payment['status']=="Stale"){
							echo "<td><a href='#' class='label label-warning'>".$payment['status']."</a>";
								
						}
					
						
						echo "<td class='text-center'>
							<a onclick='editpayment(".$payment['spaymentid'].");' href='#modal-regular' data-toggle='modal' title='Edit Payment' class='btn btn-effect-ripple btn-sm btn-success'><i class='fa fa-pencil' ></i></a>
							<!--<a href='javascript:void(0)' data-toggle='tooltip' title='Cancel Payment' class='btn btn-effect-ripple btn-sm btn-danger' ><i class='fa fa-times'></i></a> -->
						</td>";
					echo "</tr>";
				
				
				endforeach;
				*/
				?>
                                       
                                        
                                    </tbody>
                                </table>
 </div>
</div>


											   
                                            </div>
                                        </div>
                                        <!-- END Activity -->

                                        <!-- Gallery -->
                                        <div class="tab-pane  active" id="profile-gallery">
                                            <div class="row">
									
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Contact Name *</label>
							<div class="col-md-6">
								<input type="text" id="lastname" class="form-control" placeholder="Lastname" value="<?php //echo $scholarapplicant_profile['lastname'];?>" >
								<input type="text" id="firstname" class="form-control" placeholder="Firstname" value="<?php //echo$scholarapplicant_profile['firstname'];?>" >
								<input type="text" id="middlename" class="form-control" placeholder="Middlename" value="<?php //echo$scholarapplicant_profile['middlename'];?>" >
								<input type="text" id="extension" class="form-control" placeholder="Extension" value="<?php //echo $scholarapplicant_profile['extension'];?>" >
							</div>
                                        </div>
								<div class="row"></div>		
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Date of Birth</label>
							<div class="col-md-8">
								<input type="text" id="dateofbirth"  class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php //echo $scholarapplicant_profile['dateofbirth'];?>" >
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Place of Birth</label>
							<div class="col-md-8">
								<input type="text" id="placeofbirth" class="form-control" placeholder="" value="" >
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Sex</label>
							
							<?php
							/*
								if($scholarapplicant_profile['gender']=="Female"){
									$selectedf = "checked='checked'";
									$selectedm = "";
								}else{
									$selectedm = "checked='checked'";
									$selectedf = "";
								}
							*/
							?>
							<div class="col-md-8">
								<label class="radio-inline" for="example-inline-radio1">
								<input type="radio" id="genderm" name="example-inline-radios" value="Male" <?php //echo $selectedm;?>> Male
							</label>
							<label class="radio-inline" for="example-inline-radio2">
								<input type="radio" id="genderf" name="example-inline-radios" value="Female" <?php //echo $selectedf;?>> Female
							</label>
							
								
							</div>
						</div>
						<div class="row"></div>
						<div class="form-group">
						
						
							<?php
							/*
								if($scholarapplicant_profile['civilstatus']=="Single"){
									$civils = "checked='checked'";
									$civilm = "";
								}else{
									$civilm = "checked='checked'";
									$civils = "";
								}
							*/
							?>
							<label class="col-md-3 control-label" for="state-normal">Civil Status</label>
							<div class="col-md-8">
								<label class="radio-inline" for="example-inline-radio1">
								<input type="radio" id="civilstatuss" name="example-inline-radios2" value="Single" <?php //echo $civils;?>> Single
							</label>
							<label class="radio-inline" for="example-inline-radio2">
								<input type="radio" id="civilstatusm" name="example-inline-radios2" value="Married" <?php //echo $civilm;?>> Married
							</label>
							
								
							</div>
						</div>
						<div class="row"></div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Citizenship</label>
							<div class="col-md-8">
								<input type="text" id="citizenship" class="form-control" placeholder="" value="<?php //echo $scholarapplicant_profile['citizenship'];?>" >
								
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Heigth(m)</label>
							<div class="col-md-2">
								<input type="number" id="citizenship" class="form-control" placeholder="" value="<?php //echo $scholarapplicant_profile['citizenship'];?>" >
								
							</div>
							<label class="col-md-2 control-label" for="state-normal">Weight(k)</label>
							<div class="col-md-2">
								<input type="number" id="citizenship" class="form-control" placeholder="" value="<?php //echo $scholarapplicant_profile['citizenship'];?>" >
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-1 control-label" for="state-normal">Blood Type</label>
							<div class="col-md-1">
								<input type="text" id="contactno" class="form-control" placeholder="" value="<?php //echo $scholarapplicant_profile['contactno'];?>" >
								
							</div>
						</div>
						<div class="row"></div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Mobile Number</label>
							<div class="col-md-8">
								<input type="text" id="contactno" class="form-control" placeholder="" value="<?php //echo $scholarapplicant_profile['contactno'];?>" >
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Email</label>
							<div class="col-md-8">
								<input type="text" id="email" class="form-control" placeholder="" value="<?php //echo $scholarapplicant_profile['email'];?>" >
								
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Address</label>
							<div class="col-md-2">
								<input type="text" id="barangay" class="form-control" placeholder="Barangay" value="<?php //echo$scholarapplicant_profile['barangay'];?>" >
								
							</div>
							<div class="col-md-2">
								<input type="text" id="towncity" class="form-control" placeholder="Town/City" value="<?php //echo $scholarapplicant_profile['towncity'];?>" >
								
							</div>
							<div class="col-md-2">
								<input type="text" id="province" class="form-control" placeholder="Province" value="<?php //echo $scholarapplicant_profile['province'];?>" >
								
							</div>
							<div class="col-md-2">
								<input type="text" id="province" class="form-control" placeholder="Zip Code" value="<?php //echo $scholarapplicant_profile['province'];?>" >
								
							</div>
						</div>
						
						
						
						
						
						<div class="row"></div>
							<div class="form-group">			
							
							
							<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Date Hired</label>
							<div class="col-md-4">
								<input type="text" id="dateofbirth"  class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php //echo $scholarapplicant_profile['dateofbirth'];?>" >
								
							</div>
							
							<div class="row"></div>
				<div class="form-group">
							
								
							
				</div>
							<div class="col-md-8">
								<button type="button" class="btn btn-primary" onclick="saveapplicantinfo(<?php //echo $scholarapplicant_profile['applicantid'];?>)">Save</button>
								
							</div>
							</div>
						
								</div>
								<!-- end tab content -->
											
                                            
                                        </div>
                                        <!-- END Gallery -->

                                        <!-- Followers -->
                                        <div class="tab-pane" id="familybackground">
                                            <div class="block-full">
                                                
				<div class="row">
			<div class="form-group">
						<label class="col-md-3 control-label" for="state-normal">Spouse's Name</label>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control" placeholder="lastname">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control" placeholder="firstname">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control"  placeholder="middlename">
								
							</div>
							
							<label class="col-md-3 control-label" for="state-normal">Father's Name</label>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control" placeholder="lastname">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control" placeholder="firstname">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control"  placeholder="middlename">
								
							</div>
							
							<label class="col-md-3 control-label" for="state-normal">Mother's Maiden Name</label>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control" placeholder="lastname">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control" placeholder="firstname">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control"  placeholder="middlename">
								
							</div>
							
							
							<label class="col-md-3 control-label" for="state-normal">Number of Siblings</label>
							<div class="col-md-4">
								<input type="text" id="siblingno" class="form-control" placeholder="fullname" value="<?php //echo $scholarapplicant_profile['siblingno'];?>" >
								
							</div>
							<div class="col-md-3">
								<input type="text" id="dateofbirth"  class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="Birthdate: yyyy-mm-dd" value="<?php //echo $scholarapplicant_profile['dateofbirth'];?>" >
								
								
							</div>
							<div class="col-md-2">
								<button type="button" class="btn btn-primary" onclick="saveapplicantinfo(<?php //echo $scholarapplicant_profile['applicantid'];?>)">Add</button>
								
							</div>
							
							<div class="row">&nbsp;<br></div>
							<div class="row">&nbsp;<br></div>
							<div class="row"></div>
							
							<div class="col-md-11">
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Name</th>
										<th>Birthdate</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td><td></td><td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>
								
							</div>
							<div class="row"></div>
							<div class="col-md-8">
								<button type="button" class="btn btn-primary" onclick="saveapplicantinfo(<?php //echo $scholarapplicant_profile['applicantid'];?>)">Save</button>
								
							</div>
			</div>
						
			</div><!-- end row -->
                                            </div>
                                        </div>
                                        <!-- END Followers -->
										
										
	 
										
                                    </div>
                                    <!-- END Tabs Content -->
                                </div>
                            </div>
                        </div>
                        <!-- END User Profile Row -->
						

						
<!-- start below row-->
                  
<!-- Block Tabs -->
                                <div class="block full">
                                    <!-- Block Tabs Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <ul class="nav nav-tabs" data-toggle="tabs">
                                            <li class="active"><a href="#block-tabs-home">PDS Related Files</a></li>
                                            <li><a href="#block-tabs-profile">201 Files</a></li>
                                            <li><a href="#request-approvals">Request/Approvals</a></li>
                                            <li><a href="#authority-to-travel">Authority to Travel</a></li>
                                            <li><a href="#rating">Rating</a></li>
                                            <li><a href="#block-tabs-settings" data-toggle="tooltip" title="Settings"><i class="gi gi-settings"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- END Block Tabs Title -->

			<!-- Tabs Content -->
			<div class="tab-content">
				<div class="tab-pane active" id="block-tabs-home">
					<h4><b>EDUCATIONAL BACKGROUND</b></h4> <a href="#modal-voucher" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Level</th>
										<th>Name of School</th>
										<th>Basic Education/Degree/Course</th>
										<th>Period of Attendance</th>
										<th>Highest Level/Units Earned</th>
										<th>Year Graduated</th>
										<th>Scholarship/Academic Honors Received</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Tertiary</td>
										<td>AMA Computer Collge - La Union</td>
										<td>Bachelor of Science in Information Technology</td>
										<td>June 1, 2005 - March 30, 2008</td>
										<td>College</td>
										<td>2008</td>
										<td>NONE</td>
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>
					
					<div class="row"></div>
					<h4><b>CIVIL SERVICE ELIGIBILITY</b></h4> <a href="#modal-voucher" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Career Service/ Ra 1080 (Board/ Bar) Under Special Laws/CES/CSEE/Barangay Eligibility / Driver's License</th>
										<th>Rating</th>
										<th>Date Of Examination / Conferment</th>
										<th>Place Of Examination / Conferment</th>
										<th>License Number</th>
										<th>Date of Validity</th>
										
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Career Service - Professional</td>
										<td>99.9</td>
										<td>April 1, 2012</td>
										<td>Saint Louis College - San Fernando City, La Union</td>
										<td>128419058884</td>
										<td>April 1, 2012</td>
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>
						<div class="row"></div>
					<h4><b>WORK EXPERIENCE</b></h4> <a href="#modal-voucher" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Inclusive Dates</th>
										<th>Position Title</th>
										<th>Department/Agency/Office/Company</th>
										<th>Monthly Salary</th>
										<th>Salary/Job/Pay Grade</th>
										<th>Status of Appointment</th>
										<th>Gov't Service(Y/N)</th>
										
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>January 1, 2010 - December 31, 2015</td>
										<td>Instructor I</td>
										<td>DMMMSU-SLUC College of Computer Science</td>
										<td></td>
										<td>SG 12</td>
										<td>PERMANENT</td>
										<td>Y</td>
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>		
					
<div class="row"></div>
					<h4><b>VOLUNTARY WORK</b></h4> <a href="#modal-voucher" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Inclusive Dates</th>
										<th>Position Title</th>
										<th>Department/Agency/Office/Company</th>
										<th>Monthly Salary</th>
										<th>Salary/Job/Pay Grade</th>
										<th>Status of Appointment</th>
										<th>Gov't Service(Y/N)</th>
										
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td><td></td>
										<td></td><td></td>
										<td></td><td></td><td></td>
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>	
<div class="row"></div>
					<h4><b>TRAINING</b></h4> <a href="#modal-voucher" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Title Of Learning And Development Interventions/Training Programs</th>
										<th>Inclusive Dates Of Attendance</th>
										<th>Number of Hours</th>
										<th>Type of LD( Managerial/ Supervisory/Technical/etc)</th>
										<th>Conducted/ Sponsored By</th>
										
										
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td><td></td>
										<td></td><td></td>
										<td></td>
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>	
							<div class="row"></div>
					<h4><b>OTHER INFORMATION</b></h4> <a href="#modal-voucher" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Information Type</th>
										<th>Description</th>

										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Special Skills and Hobbies</td>
										<td>Graphic Design / Web Development</td>
										<td></td>
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
									<tr>
										<td>Non-Academic Distinctions / Recognition</td>
										<td>Google Education Innovator</td>
										<td></td>
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
									<tr>
										<td>Membership In Association/Organization</td>
										<td>Hukbong Litratista ng La Union</td>
										<td></td>
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>	
					<h4><b>REFERENCES</b></h4> <a href="#modal-voucher" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Name</th>
										<th>Address</th>
										<th>Tel. No.</th>
										
										
										
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>ELVIN CASEM</td>
										<td>San Fernando City, La Union</td>
										<td>09468147457</td>
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>		
												
				
				
				</div><!-- end first tab -->
				
				<div class="tab-pane" id="block-tabs-profile">
				
				<h4><b>201 Files</b></h4> <a href="#modal-voucher" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Document Type</th>
										<th>Description</th>
										<th>Date</th>
										<th>File Attachment</th>
										
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Service Contract</td>
										<td>Contract Document</td>
										<td>April 1, 2017</td>
										<td><a href="#">Service Contract - 04012017</a></td>
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>
							
				</div><!-- end second tab -->
				
				<div class="tab-pane" id="request-approvals">
				
					<h4><b>Application for Leave</b></h4> <a href="#modal-voucher" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Type of Leave</th>
										<th>Location</th>
										<th>Inclusive Dates</th>
										<th>Recommendaton</th>
										<th>Status</th>
										
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Vacation</td>
										<td>Within the Philippines</td>
										<td>April 1, 2017 to April 1, 2017</td>
										<td>Approval</td>
										<td><span class='label label-danger'>PENDING</span></td>
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
									<tr>
										<td>Vacation</td>
										<td>Within the Philippines</td>
										<td>April 2, 2017 to April 2, 2017</td>
										<td>Approval</td>
										<td><span class='label label-success'>APPROVED</span></td>
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>
				
				</div><!-- end fourth tab -->
				<div class="tab-pane" id="authority-to-travel">
					<h4><b>Authority to Travel</b></h4> <a href="#modal-voucher" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Inclusive Dates</th>
										<th>Location</th>
										<th>Description</th>
										<th>Employees</th>
										
										
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>April 1, 2017 - April 2, 2017</td>
										<td>Dagupan, Pangasinan</td>
										<td>To monitor HEI's</td>
										<td>Christianne Lynnette Cabanban, Arnold Ancheta, Marvin Mendoza</td>
										
										<td><button class='btn btn-primary notification' title='Expenses' id='notification'><i class='fa fa-dollar'></i></button> <button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>
				
				
				</div><!-- end of authority to travel tab -->
				<div class="tab-pane" id="rating">
					<h4><b>Performance Rating</b></h4> <a href="#modal-voucher" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Inclusive Dates</th>
										<th>Location</th>
										<th>Description</th>
										<th>Employees</th>
										
										
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										<td></td>
										<td></td>
										
										<td><button class='btn btn-primary notification' title='Expenses' id='notification'><i class='fa fa-dollar'></i></button> <button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>
				
				
				
				</div>
				<div class="tab-pane" id="block-tabs-settings">Settings..</div>
			</div>
			<!-- END Tabs Content -->
		</div>
		<!-- END Block Tabs -->























  </div>
  <!-- END Page Content -->
					
				
					
<!-- Regular Modal -->
			<div id="modal-regular" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Add Payment Details</strong></h3>
						</div>
						<div class="modal-body">
							
							<div>
                                <!-- Input States Block -->
                                <div class="block">
                                    

                                    <!-- Input States Content -->
                                    <form action="page_forms_components.html" method="post" class="form-horizontal" onsubmit="return false;">
									<input type="hidden" id="spaymentid">
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Semester</label>
                                            <div class="col-md-6">
                                                <select class="form-control" id="semester">
												<option value="1st">1st</option>
												<option value="2nd">2nd</option>
												</select>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">School Year</label>
                                            <div class="col-md-6">
                                                <select class="form-control" id="schoolyear">
												<option value="2012-2013">2012-2013</option>
												<option value="2013-2014">2013-2014</option>
												<option value="2014-2015">2014-2015</option>
												<option value="2015-2016">2015-2016</option>
												<option selected="selected" value="2016-2017">2016-2017</option>
												<option value="2017-2018">2017-2018</option>
												<option value="2018-2019">2018-2019</option>
												<option value="2019-2020">2019-2020</option>
												<option value="2020-2021">2020-2021</option>
												
												</select>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Fund Cluster</label>
                                            <div class="col-md-6">
                                               <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Date</label>
                                            <div class="col-md-6">
                                              <input type="text" id="paymentdate" name="example-datepicker3" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Check #</label>
                                            <div class="col-md-6">
                                               <input type="text" name="state-normal" class="form-control" id="checkno">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Amount</label>
                                            <div class="col-md-6">
                                                <input type="text" name="state-normal" class="form-control" id="amount">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Particulars</label>
                                            <div class="col-md-6">
                                                
												<textarea class="form-control" id="remarks"></textarea>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">CY</label>
                                            <div class="col-md-6">
                                                <select class="form-control" id="cy">
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												
												
												</select>
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Status</label>
                                            <div class="col-md-6">
                                                <select class="form-control" id="status">
												<option value="Available">Available</option>
												<option value="Received">Received</option>
												<option value="Stale">Stale</option>
												<option value="Cancelled">Cancelled</option>
												
												
												</select>
                                            </div>
                                        </div>
										
										
									
                                        
                                        
                                    </form>
                                    <!-- END Input States Content -->
                                </div>
                                <!-- END Input States Block -->
							
							
							
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="savepayment(<?php echo $scholarapplicant_profile['scholarid'];?>);" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" >Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			<!-- END Regular Modal -->				

		</div>
			<!-- END Modal -->				
					
					
		
									
	
					
					
					
					
					
					
					
					
					
					
					
					
	</div>
	<!-- END Main Container -->
</div>
<!-- END Page Container -->


