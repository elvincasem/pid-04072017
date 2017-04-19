
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
                                            <div class="col-xs-12">
                                                <h3 class="widget-heading"><small>Position<br> <strong>
												
												<select id="aprno" name="example-select2" class="select-select2" style="width: 80%;" data-placeholder="Choose one..">
													<?php
														echo "<option value='".$employee_profile['designation']."'>".$employee_profile['designation']."</option>";
													?>
												</select>
												</strong> </small></h3>
                                            </div>
                                            <div class="col-xs-12">
                                                <h3 class="widget-heading"><small>Salary (Monthly): <strong>
												
												<select id="aprno" name="example-select2" class="select-select2" style="width: 80%;" data-placeholder="Choose one..">
													<option>SG 18 Step 1 (35,693.00)</option>
												</select>
												</strong> </small></h3>
                                            </div>
                                        </div>
										
										
										 <div class="block full">
											<button type="button" class="btn btn-primary" onclick="saveapplicantinfo(<?php //echo $scholarapplicant_profile['applicantid'];?>)">Save</button>
											
										</div>
										
                                    
									
									</div> <!-- end bottom -->
									 
									
                                    
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
			
                                        <!-- Gallery -->
                                        <div class="tab-pane  active" id="profile-gallery">
                                            <div class="row">
									
										<div class="form-group">
                                            <label class="col-md-3 control-label" for="state-normal">Contact Name *</label>
							<div class="col-md-6">
								<input type="text" id="lastname" class="form-control" placeholder="Lastname" value="<?php echo $employee_profile['lname'];?>" >
								<input type="text" id="firstname" class="form-control" placeholder="Firstname" value="<?php echo $employee_profile['fname'];?>" >
								<input type="text" id="middlename" class="form-control" placeholder="Middlename" value="<?php echo $employee_profile['mname'];?>" >
								<input type="text" id="extension" class="form-control" placeholder="Extension" value="<?php echo $employee_profile['ename'];?>" >
							</div>
                                        </div>
								<div class="row"></div>		
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Date of Birth</label>
							<div class="col-md-8">
								<input type="text" id="dateofbirth"  class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php echo $employee_profile['dob'];?>" >
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Place of Birth</label>
							<div class="col-md-8">
								<input type="text" id="placeofbirth" class="form-control" placeholder="" value="<?php echo $employee_profile['pob'];?>" >
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Sex</label>
							
							<?php
							
								if($employee_profile['gender']=="FEMALE"){
									$selectedf = "checked='checked'";
									$selectedm = "";
								}else{
									$selectedm = "checked='checked'";
									$selectedf = "";
								}
							
							?>
							<div class="col-md-8">
								<label class="radio-inline" for="example-inline-radio1">
								<input type="radio" id="genderm" name="example-inline-radios" value="MALE" <?php echo $selectedm;?>> Male
							</label>
							<label class="radio-inline" for="example-inline-radio2">
								<input type="radio" id="genderf" name="example-inline-radios" value="FEMALE" <?php echo $selectedf;?>> Female
							</label>
							
								
							</div>
						</div>
						<div class="row"></div>
						<div class="form-group">
						
						
							<?php
							
								if($employee_profile['civil_status']=="SINGLE"){
									$civils = "checked='checked'";
									$civilm = "";
								}else{
									$civilm = "checked='checked'";
									$civils = "";
								}
							
							?>
							<label class="col-md-3 control-label" for="state-normal">Civil Status</label>
							<div class="col-md-8">
								<label class="radio-inline" for="example-inline-radio1">
								<input type="radio" id="civilstatuss" name="example-inline-radios2" value="SINGLE" <?php echo $civils;?>> Single
							</label>
							<label class="radio-inline" for="example-inline-radio2">
								<input type="radio" id="civilstatusm" name="example-inline-radios2" value="MARRIED" <?php echo $civilm;?>> Married
							</label>
							
								
							</div>
						</div>
						<div class="row"></div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Citizenship</label>
							<div class="col-md-8">
								<input type="text" id="citizenship" class="form-control" placeholder="" value="<?php echo $employee_profile['citizenship'];?>" >
								
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Heigth(m)</label>
							<div class="col-md-2">
								<input type="text" id="citizenship" class="form-control" placeholder="" value="<?php echo $employee_profile['height'];?>" >
								
							</div>
							<label class="col-sm-1 control-label" for="state-normal">Weight (kg)</label>
							<div class="col-md-2">
								<input type="text" id="citizenship" class="form-control" placeholder="" value="<?php echo $employee_profile['weight'];?>" >
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-1 control-label" for="state-normal">Blood Type</label>
							<div class="col-md-2">
								<input type="text" id="contactno" class="form-control" placeholder="" value="<?php echo $employee_profile['blood_type'];?>" >
								
							</div>
						</div>
						<div class="row"></div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Mobile Number</label>
							<div class="col-md-8">
								<input type="text" id="contactno" class="form-control" placeholder="" value="<?php echo $employee_profile['mobile_number'];?>" >
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Email</label>
							<div class="col-md-8">
								<input type="text" id="email" class="form-control" placeholder="" value="<?php echo $employee_profile['email_address'];?>" >
								
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Address</label>
							<div class="col-md-2">
								<input type="text" id="barangay" class="form-control" placeholder="Barangay" value="<?php echo $employee_profile['a_barangay'];?>" >
								
							</div>
							<div class="col-md-2">
								<input type="text" id="towncity" class="form-control" placeholder="Town/City" value="<?php echo $employee_profile['a_towncity'];?>" >
								
							</div>
							<div class="col-md-2">
								<input type="text" id="province" class="form-control" placeholder="Province" value="<?php echo $employee_profile['a_province'];?>" >
								
							</div>
							<div class="col-md-2">
								<input type="text" id="province" class="form-control" placeholder="Zip Code" value="<?php echo $employee_profile['a_zipcode'];?>" >
								
							</div>
						</div>
						
						
						
						
						
						<div class="row"></div>
							<div class="form-group">			
							
							
							<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Date Hired</label>
							<div class="col-md-4">
								<input type="text" id="dateofbirth"  class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php echo $employee_profile['date_hired'];?>" >
								
							</div>
							
							<div class="row"></div>
				<div class="form-group">
							
								
							
				</div>
							<div class="col-md-8">
								<button type="button" class="btn btn-primary" onclick="saveapplicantinfo(<?php echo $eid;?>)">Save</button>
								
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
								<input type="text" id="father" class="form-control" placeholder="lastname" value="<?php echo $employee_profile['spouse_lname'];?>">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control" placeholder="firstname" value="<?php echo $employee_profile['spouse_lname'];?>">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control"  placeholder="middlename" value="<?php echo $employee_profile['spouse_mname'];?>">
								
							</div>
							
							<label class="col-md-3 control-label" for="state-normal">Father's Name</label>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control" placeholder="lastname" value="<?php echo $employee_profile['father_lname'];?>">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control" placeholder="firstname" value="<?php echo $employee_profile['father_fname'];?>">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control"  placeholder="middlename" value="<?php echo $employee_profile['father_mname'];?>">
								
							</div>
							
							<label class="col-md-3 control-label" for="state-normal">Mother's Maiden Name</label>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control" placeholder="lastname" value="<?php echo $employee_profile['mother_lname'];?>">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control" placeholder="firstname" value="<?php echo $employee_profile['mother_fname'];?>">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="father" class="form-control"  placeholder="middlename" <?php echo $employee_profile['mother_mname'];?>">
								
							</div>
							
							
							<label class="col-md-3 control-label" for="state-normal">Name of Children</label>
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
								
								<?php
									foreach($e_children as $childlist):
										echo "<tr>";
										echo "<td>".$childlist['children_name']."</td>";
										echo "<td>".$childlist['children_bdate']."</td>";
										echo "<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
									
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
											<li><a href="#rating">Rating</a></li>
											<li><a href="#leave-credits">Leave Credits</a></li>
                                            <li><a href="#request-approvals">Request/Approvals</a></li>
                                            <li><a href="#authority-to-travel">Authority to Travel</a></li>
                                            <li class="hidden"><a href="#daily-time-record">Daily Time Record</a></li>
                                            <li class="hidden"><a href="#block-tabs-settings" data-toggle="tooltip" title="Settings"><i class="gi gi-settings"></i></a></li>
                                        </ul>
                                    </div>
                                    <!-- END Block Tabs Title -->

			<!-- Tabs Content -->
			<div class="tab-content">
				<div class="tab-pane active" id="block-tabs-home">
					<h4><b>EDUCATIONAL BACKGROUND</b></h4> <a href="#educational-background" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
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
									<?php
									foreach($e_background as $background):
										echo "<tr>";
										echo "<td>".$background['level']."</td>";
										echo "<td>".$background['name_of_school']."</td>";
										echo "<td>".$background['basic_education']."</td>";
										echo "<td>".$background['period_from']." to ".$background['period_to']."</td>";
										echo "<td>".$background['highest_level']."</td>";
										echo "<td>".$background['year_graduated']."</td>";
										echo "<td>".$background['scholar_received']."</td>";
										
										echo "<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
									
								</tbody>
							</table>
					
					<div class="row"></div>
					<h4><b>CIVIL SERVICE ELIGIBILITY</b></h4> <a href="#civil-service" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
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
								<?php
									foreach($e_careerservice as $careerservice):
										echo "<tr>";
										echo "<td>".$careerservice['career_description']."</td>";
										echo "<td>".$careerservice['career_rating']."</td>";
										echo "<td>".mdate('%F %d, %Y',strtotime($careerservice['career_date']))."</td>";
										echo "<td>".$careerservice['career_place']."</td>";
										echo "<td>".$careerservice['career_number']."</td>";
										echo "<td>".mdate('%F %d, %Y',strtotime($careerservice['career_validity']))."</td>";
										
										
										
										echo "<td><button class='btn btn-danger notification' title='Delete' id='notification'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
								
									
								</tbody>
							</table>
						<div class="row"></div>
					<h4><b>WORK EXPERIENCE / SERVICE RECORD</b></h4> <a href="#work-experience" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a> <a href="#modal-voucher" class="btn btn-effect-ripple btn-success" data-toggle="modal" onclick=""><i class='fa fa-print'></i></a> 
					
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Inclusive Dates</th>
										<th>Position/Designation</th>
										<th>Status</th>
										<th>Salary/Job/Pay Grade</th>
										
										<th>Station/Place of Assignment</th>
										<th>Branch</th>
										
										<th>Leave w/o Pay</th>
										<th>Separation<br>Date / Cause</th>
										
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>January 1, 2010 - December 31, 2015</td>
										<td>Instructor I</td>
										<td>PERMANENT</td>
										<td>150,000.00</td>
										<td>DMMMSU-SLUC College of Computer Science</td>
										<td>Private</td>
										
										
										<td>None</td>
										<td>First Day of Service (SG20 Step 1)</td>
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>		
					

<div class="row"></div>
					<h4><b>TRAINING</b></h4> <a href="#training" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
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
					<h4><b>AWARD/S RECEIVED</b></h4> <a href="#awards-received" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Award Date</th>
										
										<th>Department/Agency/Office/Company</th>
										<th>Description</th>
																				
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										
										<td></td><td></td><td></td>
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>	


							
							<div class="row"></div>
					<h4><b>OTHER INFORMATION</b></h4> <a href="#other-information" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
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
										
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
									<tr>
										<td>Non-Academic Distinctions / Recognition</td>
										<td>Google Education Innovator</td>
										
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
									<tr>
										<td>Membership In Association/Organization</td>
										<td>Hukbong Litratista ng La Union</td>
										
										<td><button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>	
							
				
				
				</div><!-- end first tab -->
				
				<div class="tab-pane" id="block-tabs-profile">
				
				<h4><b>201 Files</b></h4> <a href="#201-files" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
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
				
					<h4><b>Application for Leave</b></h4> <a href="#application-for-leave-modal" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
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
					<h4><b>Authority to Travel</b></h4> <a href="#authority-travel-modal" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
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
										
										<td><button class='btn btn-success notification' title='Employee' id='notification'><i class="fa fa-user-plus"></i></button> <button class='btn btn-primary notification' title='Expenses' id='notification'><i class='fa fa-dollar'></i></button> <button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>
				
				
				</div><!-- end of authority to travel tab -->
				<div class="tab-pane" id="rating">
					<h4><b>Performance Rating</b></h4> <a href="#performance-rating" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Rating Period</th>
										<th>Rating</th>
										
										
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td></td>
										
										
										<td><button class='btn btn-primary notification' title='Expenses' id='notification'><i class='fa fa-dollar'></i></button> <button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>
				
				
				
				</div>
				<div class="tab-pane" id="leave-credits">
						<h4><b>Leave Credits</b></h4> <a href="#leave-credits-modal" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a> <a title="Print Leave Credit Card" href="#modal-voucher" class="btn btn-effect-ripple btn-success" data-toggle="modal" onclick=""><i class='fa fa-print'></i></a> 
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Period</th>
										<th>Particular</th>
										<th>Earned</th>
										<th>Absences Undertime w/ Pay</th>
										<th>Balance</th>
										<th>ABS.UND.WOP.</th>
										<th>Earned</th>
										<th>ABS.UND.W/P.</th>
										<th>Balance</th>
										<th>ABS.UND.WOP.</th>
										<th>Total Leave Credits Earned</th>
										<th>Date & Action Taken on Appln for Leave</th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>January 1, 2017 - January 30, 2017</td>
										<td>NA</td>
										<td>1.25</td>
										<td>January 1, 2017</td>
										<td>26.923</td>
										<td></td>
										<td>1.25</td>
										<td></td>
										<td>71.24</td>
										<td></td>
										<td>99.413</td>
										<td></td>
										
										<td><button class='btn btn-primary notification' title='Expenses' id='notification'><i class='fa fa-dollar'></i></button> <button class='btn btn-danger notification' title='Delete User' id='notification'><i class='fa fa-times'></i></button></td>
									</tr>
								</tbody>
							</table>
							
				</div><!-- end leave credits-->
				<div class="tab-pane" id="daily-time-record">
					<h4><b>Daily Time Record</b></h4> <a href="#modal-voucher" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
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
				
				</div> <!-- daily time record-->
				<div class="tab-pane" id="block-tabs-settings">Settings..</div>
			</div>
			<!-- END Tabs Content -->
		</div>
		<!-- END Block Tabs -->








  </div>
  <!-- END Page Content -->
					
				
		<!-- Regular Modal -->
			<div id="educational-background" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Educational Background</strong></h3>
						</div>
						<div class="modal-body">
						<input type="hidden" id="spaymentid">
						<label class="col-md-3 control-label" for="state-normal">Level</label>
						<div class="col-md-3">
								<select class="form-control" id="semester">
									<option value="Tertiary">Tertiary</option>
									<option value="Secondary">Secondary</option>
								</select>
						</div>
						<div class="row"></div>
						 <label class="col-md-3 control-label" for="state-normal">Name of School</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Basic Education/ Degree/ Course</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Period of Attendance</label>
							<div class="col-md-9">
							   <div class="input-group input-daterange" data-date-format="mm/dd/yyyy">
									<input type="text" id="example-daterange1" name="example-daterange1" class="form-control" placeholder="From">
									<span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
									<input type="text" id="example-daterange2" name="example-daterange2" class="form-control" placeholder="To">
								</div>
							</div>
							
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Highest Level/ Units Earned</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Year Graduated</label>
							<div class="col-md-3">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Scholarship/ Academic Honors Received</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						
							
							 <div class="row"></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" >Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
						

		</div>
		<!-- END Regular Modal -->				
			
	<!-- Civil Service Modal -->
			<div id="civil-service" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>CIVIL SERVICE ELIGIBILITY</strong></h3>
						</div>
						<div class="modal-body">
						<input type="hidden" id="spaymentid">
						
						 <label class="col-md-12 control-label" for="state-normal">Career Service/ Ra 1080 (Board/ Bar) Under Special Laws/CES/CSEE/Barangay Eligibility / Driver's License</label>
							<div class="col-md-12">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Rating</label>
							<div class="col-md-3">
							   <input type="number" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Date Of Examination / Conferment</label>
							<div class="col-md-8">
							   <input type="text" id="example-datepicker" name="example-datepicker" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
							</div>
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Place Of Examination / Conferment</label>
							<div class="col-md-8">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">License Number</label>
							<div class="col-md-8">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Date of Validity</label>
							<div class="col-md-8">
							   <input type="text" id="example-datepicker" name="example-datepicker" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
							</div>
						
							
							 <div class="row"></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" >Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
						

		</div>
		<!-- END Regular Modal -->							
					
	<!-- Work Experience Modal -->
			<div id="work-experience" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>WORK EXPERIENCE</strong></h3>
						</div>
						<div class="modal-body">
						<input type="hidden" id="spaymentid">
						
						 <label class="col-md-3 control-label" for="state-normal">Inclusive Dates</label>
							<div class="col-md-9">
							   <div class="input-group input-daterange" data-date-format="mm/dd/yyyy">
									<input type="text" id="example-daterange1" name="example-daterange1" class="form-control" placeholder="From">
									<span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
									<input type="text" id="example-daterange2" name="example-daterange2" class="form-control" placeholder="To">
								</div>
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Position/Designation</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Salary/Job/Pay Grade</label>
							<div class="col-md-9">
							   <input type="number" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Station/Place of Assignment</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Branch</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Leave w/o Pay</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Separation Date / Cause</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						
						
							
							 <div class="row"></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" >Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
						

		</div>
		<!-- END Regular Modal -->		
	
	<!-- Training Modal -->
			<div id="training" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>TRAINING</strong></h3>
						</div>
						<div class="modal-body">
						<input type="hidden" id="spaymentid">
						
						 <label class="col-md-12 control-label" for="state-normal">Title Of Learning And Development Interventions/Training Programs</label>
							<div class="col-md-12">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
							
						 <label class="col-md-4 control-label" for="state-normal">Inclusive Dates Of Attendance</label>
							<div class="col-md-8">
							   <div class="input-group input-daterange" data-date-format="mm/dd/yyyy">
									<input type="text" id="example-daterange1" name="example-daterange1" class="form-control" placeholder="From">
									<span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
									<input type="text" id="example-daterange2" name="example-daterange2" class="form-control" placeholder="To">
								</div>
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Number of Hours</label>
							<div class="col-md-4">
							   <input type="number" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Type of LD( Managerial/ Supervisory/Technical/etc)</label>
							<div class="col-md-8">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Conducted/ Sponsored By</label>
							<div class="col-md-8">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
						
						
						
							
							 <div class="row"></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" >Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
						

		</div>
		<!-- END Regular Modal -->	
									
	<!-- Awards Received Modal -->
			<div id="awards-received" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>AWARD/S RECEIVED</strong></h3>
						</div>
						<div class="modal-body">
						<input type="hidden" id="spaymentid">
						
						
							
						 <label class="col-md-4 control-label" for="state-normal">Award Date</label>
							<div class="col-md-8">
							   <input type="text" id="example-datepicker" name="example-datepicker" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Department/ Agency/ Office/Company</label>
							<div class="col-md-8">
							   <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							</div>
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Description</label>
							<div class="col-md-8">
								<textarea class="form-control" name="state-normal"  ></textarea>
							   
							</div>
							
						
						
						
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" >Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
						

		</div>
		<!-- END Regular Modal -->	
		
<!-- Other Information Modal -->
			<div id="other-information" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>OTHER INFORMATION</strong></h3>
						</div>
						<div class="modal-body">
						<input type="hidden" id="spaymentid">
						
						
							
						 <label class="col-md-4 control-label" for="state-normal">Information Type</label>
							<div class="col-md-8">
							  <select class="form-control">
								<option>Special Skills and Hobbies</option>
								<option>Non-Academic Distinctions / Recognition</option>
								<option>Membership In Association/Organization</option>
							  </select>
							</div>
						
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Description</label>
							<div class="col-md-8">
								<textarea class="form-control" name="state-normal"  ></textarea>
							   
							</div>
							
						
						
						
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" >Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
						

		</div>
		<!-- END Regular Modal -->			
					
<!-- 201 files Modal -->
			<div id="201-files" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>201 Files</strong></h3>
						</div>
						<div class="modal-body">
						<input type="hidden" id="spaymentid">
						
						
							
						 <label class="col-md-4 control-label" for="state-normal">Document Type</label>
							<div class="col-md-8">
							  <select class="form-control">
								<option>Special Skills and Hobbies</option>
								<option>Non-Academic Distinctions / Recognition</option>
								<option>Membership In Association/Organization</option>
							  </select>
							</div>
						
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Description</label>
							<div class="col-md-8">
								<textarea class="form-control" name="state-normal"  ></textarea>
							   
							</div>
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Date</label>
							<div class="col-md-8">
								<input type="text" id="paymentdate" name="example-datepicker3" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
							   
							</div>
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">File Attachment</label>
							<div class="col-md-8">
								<input type = "file" name = "assetimage" id = "assetimage" size = "10" class="col-md-8" /> 
							   
							</div>
							
						
						
						
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" >Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
						

		</div>
		<!-- END Regular Modal -->	
<!-- Performance Rating Modal -->
			<div id="performance-rating" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Performance Rating</strong></h3>
						</div>
						<div class="modal-body">
						<input type="hidden" id="spaymentid">
						
						
							
						 
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Rating Period</label>
							<div class="col-md-8">
								 <input type="text" name="state-normal" class="form-control" id="fundclusterpayment" placeholder="2016-2017">
							   
							</div>
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Rating</label>
							<div class="col-md-8">
								 <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							   
							</div>
							
												
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" >Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
						

		</div>
		<!-- END Regular Modal -->	
		
<!-- Leave Credits Modal -->
			<div id="leave-credits-modal" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Leave Credits</strong></h3>
						</div>
						<div class="modal-body">
						<input type="hidden" id="spaymentid">
						
						
							
						 <label class="col-md-4 control-label" for="state-normal">Period</label>
							<div class="col-md-8">
									<div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                                                    <input type="text" id="example-daterange1" name="example-daterange1" class="form-control" placeholder="From">
                                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                                    <input type="text" id="example-daterange2" name="example-daterange2" class="form-control" placeholder="To">
                                                </div>
							</div> 
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Particular</label>
							<div class="col-md-8">
								<textarea class="form-control" name="state-normal"  ></textarea>
							   
							</div>
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Earned</label>
							<div class="col-md-4">
								 <input type="number" name="state-normal" class="form-control" id="fundclusterpayment">
							   
							</div>
						
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Absences Undertime w/ Pay</label>
							<div class="col-md-8">
								<input type="text" id="paymentdate" name="example-datepicker3" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
							   
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Balance</label>
							<div class="col-md-4">
								 <input type="number" name="state-normal" class="form-control" id="fundclusterpayment">
							   
							</div>
						
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">ABS.UND.WOP.</label>
							<div class="col-md-8">
								 <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							   
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Earned</label>
							<div class="col-md-4">
								 <input type="number" name="state-normal" class="form-control" id="fundclusterpayment">
							   
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">ABS.UND.W/P.</label>
							<div class="col-md-8">
								 <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							   
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Balance</label>
							<div class="col-md-4">
								 <input type="number" name="state-normal" class="form-control" id="fundclusterpayment">
							   
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">ABS.UND.WOP.</label>
							<div class="col-md-8">
								 <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							   
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Total Leave Credits Earned</label>
							<div class="col-md-4">
								 <input type="number" name="state-normal" class="form-control" id="fundclusterpayment">
							   
							</div>
						
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Date & Action Taken on Appln for Leave</label>
							<div class="col-md-8">
								<textarea class="form-control" name="state-normal"  ></textarea>
							   
							</div>
							
						
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" >Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
						

		</div>
		<!-- END Regular Modal -->						
	
<!-- application for leave Modal -->
			<div id="application-for-leave-modal" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Application for Leave</strong></h3>
						</div>
						<div class="modal-body">
						<input type="hidden" id="spaymentid">
						
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Type of Leave</label>
							<div class="col-md-8">
								<select class="form-control" id="cy">
												<option value="VACATION LEAVE">VACATION LEAVE</option>
												<option value="SICK LEAVE">SICK LEAVE</option>
												
												</select>
							   
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Location</label>
							<div class="col-md-8">
								 <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							   
							</div>
						
						 <label class="col-md-4 control-label" for="state-normal">Inclusive Dates</label>
							<div class="col-md-8">
									<div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                                                    <input type="text" id="example-daterange1" name="example-daterange1" class="form-control" placeholder="From">
                                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                                    <input type="text" id="example-daterange2" name="example-daterange2" class="form-control" placeholder="To">
                                                </div>
							</div> 
						
							
						
						
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Recommendation</label>
							<div class="col-md-8">
								<textarea class="form-control" name="state-normal"  ></textarea>
							   
							</div>
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Status</label>
							<div class="col-md-8">
								<select class="form-control" id="cy">
												<option value="PENDING">PENDING</option>
												<option value="APPROVED">APPROVED</option>
												<option value="DECLINED">DECLINED</option>
												
												</select>
							   
							</div>
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" >Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
						

		</div>
		<!-- END Regular Modal -->		
					
	<!-- Authority to travel Modal -->
			<div id="authority-travel-modal" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<input type="hidden" id="spaymentid">
					
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Authority to Travel</strong></h3>
						</div>
						<div class="modal-body">
						
						
						
							
						
						<label class="col-md-4 control-label" for="state-normal">Inclusive Dates</label>
							<div class="col-md-8">
									<div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                                                    <input type="text" id="example-daterange1" name="example-daterange1" class="form-control" placeholder="From">
                                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                                    <input type="text" id="example-daterange2" name="example-daterange2" class="form-control" placeholder="To">
                                                </div>
							</div> 
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Location</label>
							<div class="col-md-8">
								 <input type="text" name="state-normal" class="form-control" id="fundclusterpayment">
							   
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Description</label>
							<div class="col-md-8">
								<textarea class="form-control" name="state-normal"  ></textarea>
							   
							</div>
							
							
						
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Employee</label>
							<div class="col-md-6">
								<select id="supplierid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
												<option value="VACATION LEAVE">Christianne Lynnette Cabanban</option>
												<option value="SICK LEAVE">SICK LEAVE</option>
												
												</select>
							  
							</div>
							<div class="col-md-1">
								 <button style="float:left;" type="button" class="btn btn-effect-ripple btn-primary" onclick="" id="savebutton"><i class="fa fa-plus"></i></button>
							</div>
						
						
						<div class="row" style="margin-top:10px;"></div>
							
							<div class="col-md-12">
									<div class="table-responsive">
									<table class="table table-striped table-bordered table-vcenter table-hover">
										<thead>
											<tr style="text-align:center;">
												
												<!-- <th style="width:100px;">Delivery ID</th>-->
												<th>Employee</th>
												
												<th></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Lynnette Cabanban</td>
												<td>X</td>
											</tr>
										
										</tbody>
										</table>
									</div>
							</div>
						
						 
							
						
						
						
							
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" >Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
						

		</div>
		<!-- END Regular Modal -->					
					
					
					
					
					
	</div>
	<!-- END Main Container -->
</div>
<!-- END Page Container -->


