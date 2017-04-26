
<div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
			 <input type="hidden" id="eid" name="eid" value="<?php echo $eid;?>">
	
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
					<div class="widget-image widget-image-sm" id="image_container">
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
										
			<?php //echo form_open_multipart('employees/uploadprofile');?> 
	   <form action="" method = "post" id="form_uploadprofile" enctype="multipart/form-data">
		 <input type="hidden" id="fileid" name="fileid" value="<?php echo $eid;?>">
		 
		 
		 
         <input type = "file" name="profileimage" id="profileimage" size = "10" class="col-md-8" /> 
        
        <!-- <input type = "submit" value = "upload"  class="btn btn-effect-ripple btn-primary"/>  -->
		 
		 <button type="button" class="btn btn-primary" onclick="uploadprofile()">Upload</button>
      </form> 
                                            <div class="col-xs-12">
                                                <h3 class="widget-heading"><small>Position<br> <strong>
												
												<select id="aprno" name="example-select2" class="select-select2" style="width: 80%;" data-placeholder="Choose one..">
													<?php
														echo "<option value='".$employee_profile['designation']."'>".$employee_profile['designation']."</option>";
													?>
													<?php
														foreach($position_designation as $posdes):
															echo "<option value='".$posdes['position_designation']."'>".$posdes['position_designation']."</option>";
														endforeach;
													
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
											
                                            <li class="active"><a href="#profile-gallery"><i class="fa fa-user"></i> Personal Information</a></li>
                                           <li><a href="#familybackground"><i class="fa fa-users"></i> Family Background</a></li>
										  
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
								}
								elseif($employee_profile['gender']=="FEMALE"){
									$selectedm = "checked='checked'";
									$selectedf = "";
								}
								else{
									$selectedm = "";
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
								}elseif($employee_profile['civil_status']=="MARRIED"){
									$civilm = "checked='checked'";
									$civils = "";
								}else{
									$civilm = "";
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
								<input type="text" id="height" class="form-control" placeholder="" value="<?php echo $employee_profile['height'];?>">
								
							</div>
							<label class="col-sm-1 control-label" for="state-normal">Weight (kg)</label>
							<div class="col-md-2">
								<input type="text" id="weight" class="form-control" placeholder="" value="<?php echo $employee_profile['weight'];?>" >
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-1 control-label" for="state-normal">Blood Type</label>
							<div class="col-md-2">
								<input type="text" id="bloodtype" class="form-control" placeholder="" value="<?php echo $employee_profile['blood_type'];?>" >
								
							</div>
						</div>
						<div class="row"></div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Mobile Number</label>
							<div class="col-md-8">
								<input type="text" id="mobileno" class="form-control" placeholder="" value="<?php echo $employee_profile['mobile_number'];?>" >
								
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
								<input type="text" id="zipcode" class="form-control" placeholder="Zip Code" value="<?php echo $employee_profile['a_zipcode'];?>" >
								
							</div>
						</div>
						
						
						
						
						
						<div class="row"></div>
							<div class="form-group">			
							
							
							<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Date Hired</label>
							<div class="col-md-4">
								<input type="text" id="datehired"  class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php echo $employee_profile['date_hired'];?>" >
								
							</div>
							
							<div class="row"></div>
				<div class="form-group">
							
								
							
				</div>
							<div class="col-md-8">
								<button type="button" class="btn btn-primary" onclick="updateemployee(<?php echo $eid;?>)">update</button>
								
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
								<input type="text" id="spouse_lname" class="form-control" placeholder="lastname" value="<?php echo $employee_profile['spouse_lname'];?>">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="spouse_fname" class="form-control" placeholder="firstname" value="<?php echo $employee_profile['spouse_fname'];?>">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="spouse_mname" class="form-control"  placeholder="middlename" value="<?php echo $employee_profile['spouse_mname'];?>">
								
							</div>
							
							<label class="col-md-3 control-label" for="state-normal">Father's Name</label>
							<div class="col-md-3">
								<input type="text" id="father_lname" class="form-control" placeholder="lastname" value="<?php echo $employee_profile['father_lname'];?>">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="father_fname" class="form-control" placeholder="firstname" value="<?php echo $employee_profile['father_fname'];?>">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="father_mname" class="form-control"  placeholder="middlename" value="<?php echo $employee_profile['father_mname'];?>">
								
							</div>
							
							<label class="col-md-3 control-label" for="state-normal">Mother's Maiden Name</label>
							<div class="col-md-3">
								<input type="text" id="mother_lname" class="form-control" placeholder="lastname" value="<?php echo $employee_profile['mother_lname'];?>">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="mother_fname" class="form-control" placeholder="firstname" value="<?php echo $employee_profile['mother_fname'];?>">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="mother_mname" class="form-control"  placeholder="middlename" value="<?php echo $employee_profile['mother_mname'];?>">
								
							</div>
							<div class="row"></div>
							<div class="col-md-8">
								<button type="button" class="btn btn-primary" onclick="updateemployeefamily(<?php echo $eid;?>)">Update</button>
								
							</div>
							<h4 class="sub-header"></h4>
							
							<label class="col-md-3 control-label" for="state-normal">Name of Children</label>
							<div class="col-md-4">
								<input type="text" id="children_name" class="form-control" placeholder="fullname">
								
							</div>
							<div class="col-md-3">
								<input type="text" id="children_dob"  class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="Birthdate: yyyy-mm-dd">
								
								
							</div>
							<div class="col-md-2">
								<button type="button" class="btn btn-primary" onclick="addchildren(<?php echo $eid;?>)">Add</button>
								
							</div>
							
							<div class="row">&nbsp;<br></div>
							<div class="row">&nbsp;<br></div>
							<div class="row"></div>
							
							<div class="col-md-11" id="children_table">
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
										echo "<td><button class='btn btn-danger notification' title='Delete' id='notification' onclick='deletechildren(".$childlist['childrenid'].")'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
									
								</tbody>
							</table>
								
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
                                            <li class="active"><a href="#block-tabs-home"><i class="fa fa-file-pdf-o"></i> PDS Related Files</a></li>
                                            <li><a href="#block-tabs-profile"><i class="fa fa-paperclip"></i> 201 Files</a></li>
											<li><a href="#rating"><i class="fa fa-percent"></i> Rating</a></li>
											<li><a href="#leave-credits"><i class="fa fa-calendar-plus-o"></i> Leave Credits</a></li>
                                            <li><a href="#request-approvals"><i class="fa fa-calendar-check-o"></i> Request/Approvals</a></li>
                                            <li><a href="#authority-to-travel"><i class="fa fa-automobile"></i> Authority to Travel</a></li>
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
										
										echo "<td><a href='#modal-voucher' class='btn btn-effect-ripple btn-primary' data-toggle='modal' onclick='' disabled><i class='fa fa-pencil'></i></a>  <button onclick='deleteeduc(".$background['educbackgroundid'].")' class='btn btn-danger notification' title='Delete' id='notification'><i class='fa fa-times'></i></button></td>";
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
										
										
										
										echo "<td><a href='#modal-voucher' class='btn btn-effect-ripple btn-primary' data-toggle='modal' onclick='' disabled><i class='fa fa-pencil'></i></a>   <button class='btn btn-danger notification' title='Delete' id='notification'><i class='fa fa-times' onclick='deletecareer(".$careerservice['civilserviceid'].");'></i></button></td>";
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
								<?php
									foreach($e_servicerecord as $servicerecord):
										echo "<tr>";
										echo "<td>".mdate('%F %d, %Y',strtotime($servicerecord['service_from']))." ".mdate('%F %d, %Y',strtotime($servicerecord['service_to']))."</td>";
										echo "<td>".$servicerecord['service_position']."</td>";
										echo "<td>".$servicerecord['service_status']."</td>";
										echo "<td>".$servicerecord['service_salary']."</td>";
										echo "<td>".$servicerecord['service_station']."</td>";
										echo "<td>".$servicerecord['service_branch']."</td>";
										echo "<td>".$servicerecord['service_leave']."</td>";
										echo "<td>".$servicerecord['service_separation']."</td>";
										
										
										
										
										echo "<td><a href='#modal-voucher' class='btn btn-effect-ripple btn-primary' data-toggle='modal' onclick='' disabled><i class='fa fa-pencil'></i></a>   <button class='btn btn-danger notification' title='Delete' id='notification' onclick='deletework(".$servicerecord['servicerecordid'].")'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
								
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
									<?php
									foreach($e_training as $training):
										echo "<tr>";
										echo "<td>".$training['training_title']."</td>";
										echo "<td>".mdate('%F %d, %Y',strtotime($training['training_from']))." ".mdate('%F %d, %Y',strtotime($training['training_to']))."</td>";
										echo "<td>".$training['training_hours']."</td>";
										echo "<td>".$training['training_type']."</td>";
										echo "<td>".$training['training_by']."</td>";

										echo "<td><a href='#modal-voucher' class='btn btn-effect-ripple btn-primary' data-toggle='modal' disabled><i class='fa fa-pencil'></i></a>   <button class='btn btn-danger notification' title='Delete' id='notification' onclick='deletetraining(".$training['trainingid'].")'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
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
								<?php
									foreach($e_award as $award):
										echo "<tr>";
										
										echo "<td>".mdate('%F %d, %Y',strtotime($award['award_date']))."</td>";
										echo "<td>".$award['award_department']."</td>";
										echo "<td>".$award['award_description']."</td>";
										
										echo "<td><a href='#modal-voucher' class='btn btn-effect-ripple btn-primary' data-toggle='modal' onclick='' disabled><i class='fa fa-pencil'></i></a>   <button class='btn btn-danger notification' title='Delete' id='notification' onclick='deleteaward(".$award['awardid'].")'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
									
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
									<?php
									foreach($e_others as $others):
										echo "<tr>";
										
										
										echo "<td>".$others['information_type']."</td>";
										echo "<td>".$others['information_description']."</td>";
										
										echo "<td><a href='#modal-voucher' class='btn btn-effect-ripple btn-primary' data-toggle='modal' onclick='' disabled><i class='fa fa-pencil'></i></a>   <button class='btn btn-danger notification' title='Delete' id='notification' onclick='deleteother(".$others['otherid'].")'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
									
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
								<?php
									foreach($e_files as $files):
									
										$filesid = $files['filesid'];
										$file_name = $files['file_name'];
										echo "<tr>";
										
										
										echo "<td>".$files['file_document_type']."</td>";
										echo "<td>".$files['file_description']."</td>";
										echo "<td>".mdate('%F %d, %Y',strtotime($files['file_date']))."</td>";
										//echo "<td><a href='#'>".$files['file_name']."</a></td>";
										
										echo "<td>";
											$fileurl2 = base_url();
											$filesurl = $fileurl2."uploads/201_files/".$file_name;
											
											if($file_name == "NONE"){
												echo "<a href='#upload-201' class='btn btn-effect-ripple btn-default' data-toggle='modal' onclick='openfile_201(".$files['filesid'].");'><i class='fa fa-upload'></i></a>";
											}else{
												echo "<a href='$filesurl' class='btn btn-effect-ripple btn-default'>$file_name</a><button class='btn btn-danger notification' title='Delete' id='notification' onclick='deleteuploadedfile(".$files['filesid'].")'><i class='fa fa-times'></i></button>";
											}
											
											//curl_close($ch);
										
										
										echo "</td>";
										
										
										echo "<td><a href='#modal-voucher' class='btn btn-effect-ripple btn-primary' data-toggle='modal' onclick='' disabled><i class='fa fa-pencil'></i></a>   <button class='btn btn-danger notification' title='Delete' id='notification' onclick='deletefile(".$files['filesid'].")'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
									
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
										<th>Commutation</th>
										<th>Recommendaton</th>
										<th>Status</th>
										<th>File</th>
										
										<th></th>
									</tr>
								</thead>
								<tbody>
								
								<?php
									foreach($e_leaveapp as $leaveapp):
									$appleaveid = $leaveapp['appleaveid'];
									$appleave_filename = $leaveapp['appleave_filename'];
									
										if($leaveapp['appleave_status']=="APPROVED"){
											$labelstyle = "label-success";
										}elseif($leaveapp['appleave_status']=="CANCELLED"){
											$labelstyle = "label-default";
										}
										else{
											$labelstyle = "label-danger";
										}
										
										echo "<tr>";
										echo "<td>".$leaveapp['appleave_type']."</td>";
										echo "<td>".$leaveapp['appleave_location']."</td>";
										echo "<td>".mdate('%F %d, %Y',strtotime($leaveapp['appleave_from']))." - ".mdate('%F %d, %Y',strtotime($leaveapp['appleave_to']))."</td>";
										echo "<td>".$leaveapp['appleave_commutation']."</td>";
										echo "<td>".$leaveapp['appleave_recommendation']."</td>";
										
										echo "<td><button class='btn btn-effect-ripple $labelstyle' data-html='true' data-toggle='popover' data-content='<select class=\"form-control\"><option>PENDING</option><option>APPROVE</option><option>CANCELLED</option></select><button class=\"form-control\" id=\"statusbutton\"> </button>' data-placement='top'><span class='label $labelstyle'>".$leaveapp['appleave_status']."</span></td>";
										//echo "<td></td>";
										
										echo "<td>";
											
											$appleave_base = base_url();
											$appleave_fileurl = $appleave_base."uploads/request_approvals/".$appleave_filename;
											
											if($appleave_filename == "NONE"){
												echo "<a href='#upload-appleave' class='btn btn-effect-ripple btn-default' data-toggle='modal' onclick='openfile_appleave(".$appleaveid.");'><i class='fa fa-upload'></i></a>";
											}else{
												echo "<a href='$appleave_fileurl' class='btn btn-effect-ripple btn-default'>$appleave_filename</a><button class='btn btn-danger notification' title='Delete' id='notification' onclick='deleteuploadedfile_appleave(".$appleaveid.")'><i class='fa fa-times'></i></button>";
											}
											
											//curl_close($ch);
										
										
										echo "</td>";
										
										
										echo "<td><a href='#modal-voucher' class='btn btn-effect-ripple btn-primary' data-toggle='modal' onclick=''><i class='fa fa-pencil' disabled></i></a>  <a title='Print Application for Leave' href='#modal-voucher' class='btn btn-effect-ripple btn-success' data-toggle='modal' onclick='' disabled><i class='fa fa-print'></i></a>   <button class='btn btn-danger notification' title='Delete' id='notification' onclick='deleteappleave(".$leaveapp['appleaveid'].");'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
								
									
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
										<th>Other Employees</th>
										<th>File</th>
										
										
										<th></th>
									</tr>
								</thead>
								<tbody>
								
								<?php
									foreach($e_travel as $travel):
									
										$authtravel_filename = $travel['travel_filename'];
										$authtravelid = $travel['authtravelid'];
										
										echo "<tr>";
										echo "<td>".mdate('%F %d, %Y',strtotime($travel['travel_from']))." - ".mdate('%F %d, %Y',strtotime($travel['travel_to']))."</td>";
										echo "<td>".$travel['travel_location']."</td>";
										echo "<td>".$travel['travel_description']."</td>";
										
										$travelid = $travel['authtravelid'];
										$travelemployees = $this->employees_model->getetravelemployees($travelid);
										$numberofemployee = count($travelemployees);
										$comma = 1;
										$employees="";
										
											foreach($travelemployees as $temployee):
											
												/*
												if($comma < $numberofemployee){
													$employees .= "<a class='btn btn-effect-ripple btn-primary' href='".$temployee['eid']."'>".$temployee['employee_name']."</a> ";
													
												}else{*/
													$employees .= "<span class='btn btn-primary'>".$temployee['employee_name']."</span><div class='btn-group'>
                                                <button class='btn btn-primary dropdown-toggle' data-toggle='dropdown'><span class='caret'></span></button>
                                                <ul class='dropdown-menu dropdown-menu-right'>
                                                    <li>
                                                        <a href='#' onclick='removetraveleid(".$temployee['travelemployeeid'].")'><i class='fa fa-times'></i></button> Remove</a>
                                                    </li>
                                                  
                                                </ul>
                                            </div> ";
													
												/*}
												$comma++;*/
											endforeach;
										
										echo "<td><a href='#authority-travel-modal-employee' class='btn btn-effect-ripple btn-primary' data-toggle='modal' onclick='addemployeetolist(".$travel['authtravelid'].")'><i class='fa fa-user-plus'></i></a> ".$employees." </td>";
										
										
										echo "<td>";
											
											$authtravel_base = base_url();
											$authtravel_fileurl = $authtravel_base."uploads/authority_travel/".$authtravel_filename;
											
											if($authtravel_filename == "NONE"){
												echo "<a href='#upload-authtravel' class='btn btn-effect-ripple btn-default' data-toggle='modal' onclick='openfile_authtravel(".$authtravelid.");'><i class='fa fa-upload'></i></a>";
											}else{
												echo "<a href='$authtravel_fileurl' class='btn btn-effect-ripple btn-default'>$authtravel_filename</a><button class='btn btn-danger notification' title='Delete' id='notification' onclick='deleteuploadedfile_authtravel(".$authtravelid.")'><i class='fa fa-times'></i></button>";
											}
											
											//curl_close($ch);
										
										
										echo "</td>";
										
										echo "<td><a href='#modal-voucher' class='btn btn-effect-ripple btn-primary' data-toggle='modal' onclick='' disabled><i class='fa fa-pencil'></i></a>  <a title='Print Authority' href='#printtravel' class='btn btn-effect-ripple btn-success' data-toggle='modal' onclick='printtravel(".$travel['authtravelid'].");'><i class='fa fa-print'></i></a>  <button class='btn btn-danger notification' title='Delete' id='notification' onclick='deleteauth(".$travel['authtravelid'].")'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
								
									
									
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
								<?php
									foreach($e_rating as $rating):
										echo "<tr>";
										
										echo "<td>".mdate('%F %d, %Y',strtotime($rating['rating_from']))." - ".mdate('%F %d, %Y',strtotime($rating['rating_to']))."</td>";
										echo "<td>".$rating['rating_value']."</td>";
										
										
										echo "<td><a href='#modal-voucher' class='btn btn-effect-ripple btn-primary' data-toggle='modal' onclick=''><i class='fa fa-pencil' disabled></i></a>   <button class='btn btn-danger notification' title='Delete' id='notification' onclick='deleterating(".$rating['ratingid'].")'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
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
								<?php
									foreach($e_leavecredits as $leavecredits):
									
										echo "<tr>";
										
										echo "<td>".mdate('%F %d, %Y',strtotime($leavecredits['leave_from']))." - ".mdate('%F %d, %Y',strtotime($leavecredits['leave_to']))."</td>";
										echo "<td>".$leavecredits['leave_particular']."</td>";
										echo "<td>".$leavecredits['leave_earned']."</td>";
										echo "<td>".$leavecredits['leave_absences']."</td>";
										echo "<td>".$leavecredits['leave_balance']."</td>";
										echo "<td>".$leavecredits['leave_abswop']."</td>";
										echo "<td>".$leavecredits['sick_earned']."</td>";
										echo "<td>".$leavecredits['sick_abswp']."</td>";
										echo "<td>".$leavecredits['sick_balance']."</td>";
										echo "<td>".$leavecredits['sick_abswop']."</td>";
										echo "<td>".$leavecredits['total_leave']."</td>";
										echo "<td>".$leavecredits['sick_action']."</td>";
										
										
										echo "<td><a href='#modal-voucher' class='btn btn-effect-ripple btn-primary' data-toggle='modal' onclick='' disabled><i class='fa fa-pencil'></i></a>   <button class='btn btn-primary notification' title='Expenses' id='notification' disabled><i class='fa fa-dollar'></i></button>  <button class='btn btn-danger notification' title='Delete' id='notification' onclick='deleteleavecredit(".$leavecredits['leavecreditsid'].");'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
									
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
						<div class="col-md-6">
								<select class="form-control" id="level">
									<option value="ELEMENTARY">ELEMENTARY</option>
									<option value="SECONDARY">SECONDARY</option>
									<option value="VOCATIONAL / TRADE COURSE">VOCATIONAL / TRADE COURSE</option>
									<option value="COLLEGE">COLLEGE</option>
									<option value="GRADUATE STUDIES">GRADUATE STUDIES</option>
								</select>
						</div>
						<div class="row"></div>
						 <label class="col-md-3 control-label" for="state-normal">Name of School</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="nameofschool">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Basic Education/ Degree/ Course</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="basiceducation">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Period of Attendance</label>
							<div class="col-md-9">
							   <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
									<input type="text" id="period_from" name="example-daterange1" class="form-control" placeholder="From">
									<span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
									<input type="text" id="period_to" name="example-daterange2" class="form-control" placeholder="To">
								</div>
							</div>
							
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Highest Level/ Units Earned</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="highest_level">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Year Graduated</label>
							<div class="col-md-3">
							   <input type="text" name="state-normal" class="form-control" id="year_graduated">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Scholarship/ Academic Honors Received</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="scholar_received">
							</div>
						
							
							 <div class="row"></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saveeduc();" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" disabled>Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="closeeducbutton">Close</button>
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
							   <input type="text" name="state-normal" class="form-control" id="career_description">
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Rating</label>
							<div class="col-md-3">
							   <input type="number" name="state-normal" class="form-control" id="career_rating">
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Date Of Examination / Conferment</label>
							<div class="col-md-8">
							   <input type="text" id="career_date" name="example-datepicker" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
							</div>
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Place Of Examination / Conferment</label>
							<div class="col-md-8">
							   <input type="text" name="state-normal" class="form-control" id="career_place">
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">License Number</label>
							<div class="col-md-8">
							   <input type="text" name="state-normal" class="form-control" id="career_number">
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Date of Validity</label>
							<div class="col-md-8">
							   <input type="text" id="career_validity" name="example-datepicker" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
							</div>
						
							
							 <div class="row"></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="savecareer();" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" disabled>Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="careerclosebutton">Close</button>
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
							   <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
									<input type="text" id="service_from" name="example-daterange1" class="form-control" placeholder="From">
									<span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
									<input type="text" id="service_to" name="example-daterange2" class="form-control" placeholder="To">
								</div>
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Position/Designation</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="service_position">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Status</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="service_status">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Salary/Job/Pay Grade</label>
							<div class="col-md-9">
							   <input type="number" name="state-normal" class="form-control" id="service_salary">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Station/Place of Assignment</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="service_station">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Branch</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="service_branch">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Leave w/o Pay</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="service_leave">
							</div>
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Separation Date / Cause</label>
							<div class="col-md-9">
							   <input type="text" name="state-normal" class="form-control" id="service_separation">
							</div>
						
						
							
							 <div class="row"></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="savework();" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" disabled>Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="workclosebutton">Close</button>
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
						
						
						 <label class="col-md-12 control-label" for="state-normal">Title Of Learning And Development Interventions/Training Programs</label>
							<div class="col-md-12">
							   <input type="text" name="state-normal" class="form-control" id="training_title">
							</div>
							
						 <label class="col-md-4 control-label" for="state-normal">Inclusive Dates Of Attendance</label>
							<div class="col-md-8">
							   <div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
									<input type="text" id="training_from" name="example-daterange1" class="form-control" placeholder="From">
									<span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
									<input type="text" id="training_to" name="example-daterange2" class="form-control" placeholder="To">
								</div>
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Number of Hours</label>
							<div class="col-md-4">
							   <input type="number" name="state-normal" class="form-control" id="training_hours">
							</div>
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Type of LD( Managerial/ Supervisory/Technical/etc)</label>
							<div class="col-md-8">
							   <input type="text" name="state-normal" class="form-control" id="training_type">
							</div>
						
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Conducted/ Sponsored By</label>
							<div class="col-md-8">
							   <input type="text" name="state-normal" class="form-control" id="training_by">
							</div>
						
						
						
							
							 <div class="row"></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" id="savebutton" onclick="savetraining();">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" disabled>Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="trainingclosebutton">Close</button>
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
													
						 <label class="col-md-4 control-label" for="state-normal">Award Date</label>
							<div class="col-md-8">
							   <input type="text" id="award_date" name="example-datepicker" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Department/ Agency/ Office/Company</label>
							<div class="col-md-8">
							   <input type="text" name="state-normal" class="form-control" id="award_department">
							</div>
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Description</label>
							<div class="col-md-8">
								<textarea class="form-control" name="state-normal"  id="award_description"></textarea>
							   
							</div>
							
						
						
						
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" id="savebutton"  onclick="saveaward();">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" disabled>Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="awardclosebutton">Close</button>
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
							  <select class="form-control" id="information_type">
								<option value="SPECIAL SKILLS AND HOBBIES">SPECIAL SKILLS AND HOBBIES</option>
								<option value="NON-ACADEMIC DISTINCTIONS / RECOGNITION">NON-ACADEMIC DISTINCTIONS / RECOGNITION</option>
								<option value="MEMBERSHIP IN ASSOCIATION / ORGANIZATION">MEMBERSHIP IN ASSOCIATION / ORGANIZATION</option>
							  </select>
							</div>
						
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Description</label>
							<div class="col-md-8">
								<textarea class="form-control" name="state-normal"  id="information_description"></textarea>
							   
							</div>
							
						
						
						
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saveother();" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" disabled>Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="otherclosebutton">Close</button>
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
							  <select class="form-control" id="file_document_type">
								<option value="CSC FORM 212">CSC FORM 212 (Personal Data Sheet)</option>
								<option value="CS Form 33">CS Form 33 (Appointment Form)</option>
								<option value="POSITION DESCRIPTION FORM">POSITION DESCRIPTION FORM</option>
								<option value="NEURO-PSYCHIATRIC EXAMINATION">NEURO-PSYCHIATRIC EXAMINATION</option>
								<option value="LICENSES">LICENSES</option>
								<option value="PERFORMANCE EVALUATION DOCUMENTS">PERFORMANCE EVALUATION DOCUMENTS</option>
								<option value="SPECIAL ORDER">SPECIAL ORDER</option>
								<option value="DISCIPLINARY ACTION">DISCIPLINARY ACTION</option>
								<option value="SERVICE CONTRACT">SERVICE CONTRACT</option>
								<option value="MEDICAL CERTIFICATE">MEDICAL CERTIFICATE</option>
								<option value="NBI CLEARANCE">NBI CLEARANCE</option>
								<option value="OTHER DOCUMENT">OTHER DOCUMENT</option>
								
							  </select>
							</div>
						
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Description</label>
							<div class="col-md-8">
								<textarea class="form-control" name="state-normal" id="file_description" ></textarea>
							   
							</div>
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Date</label>
							<div class="col-md-8">
								<input type="text" id="file_date" name="example-datepicker3" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
							   
							</div>
							
					
							
						
						
						
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="savefile();" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" disabled>Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="fileclosebutton">Close</button>
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
							 
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Rating Period</label>
							<div class="col-md-8">
								<div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
									<input type="text" id="rating_from" name="example-daterange1" class="form-control" placeholder="From">
									<span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
									<input type="text" id="rating_to" name="example-daterange2" class="form-control" placeholder="To">
								</div>
							   
							</div>
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Rating</label>
							<div class="col-md-8">
								 <input type="text" name="state-normal" class="form-control" id="rating_value">
							   
							</div>
							
												
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saverating();" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" disabled>Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="ratingclosebutton">Close</button>
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
                                                    <input type="text" id="leave_from" name="example-daterange1" class="form-control" placeholder="From">
                                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                                    <input type="text" id="leave_to" name="example-daterange2" class="form-control" placeholder="To">
                                                </div>
							</div> 
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Particular</label>
							<div class="col-md-8">
								<textarea class="form-control" name="state-normal"  id="leave_particular"></textarea>
							   
							</div>
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Earned</label>
							<div class="col-md-4">
								 <input type="number" name="state-normal" class="form-control" id="leave_earned">
							   
							</div>
						
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Absences Undertime w/ Pay</label>
							<div class="col-md-8">
								<input type="text" id="leave_absences" name="example-datepicker3" class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
							   
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Balance</label>
							<div class="col-md-8">
								 <input type="text" name="state-normal" class="form-control" id="leave_balance">
							   
							</div>
						
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">ABS.UND.WOP.</label>
							<div class="col-md-8">
								 <input type="text" name="state-normal" class="form-control" id="leave_abswop">
							   
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Earned</label>
							<div class="col-md-4">
								 <input type="number" name="state-normal" class="form-control" id="sick_earned">
							   
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">ABS.UND.W/P.</label>
							<div class="col-md-8">
								 <input type="text" name="state-normal" class="form-control" id="sick_abswp">
							   
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Balance</label>
							<div class="col-md-8">
								 <input type="text" name="state-normal" class="form-control" id="sick_balance">
							   
							</div>
						
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">ABS.UND.WOP.</label>
							<div class="col-md-8">
								 <input type="text" name="state-normal" class="form-control" id="sick_abswop">
							   
							</div>
						\
						
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Date & Action Taken on Appln for Leave</label>
							<div class="col-md-8">
								<textarea class="form-control" name="state-normal"  id="sick_action"></textarea>
							   
							</div>
							
						
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saveleavecredit();" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" disabled>Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="leavecreditclosebutton">Close</button>
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
						
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Type of Leave</label>
							<div class="col-md-8">
								<select class="form-control" id="appleave_type">
												<option value="VACATION LEAVE">VACATION LEAVE</option>
												<option value="SICK LEAVE">SICK LEAVE</option>
												<option value="TO SEEK EMPLOYEMENT">TO SEEK EMPLOYEMENT</option>
												<option value="MATERNITY">MATERNITY</option>
												<option value="OTHERS">OTHERS</option>
												
												</select>
							   
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Location</label>
							<div class="col-md-8">
								 <input type="text" name="state-normal" class="form-control" id="appleave_location" placeholder="Within the Philippines / Abroad (Specify)">
							   
							</div>
						
						 <label class="col-md-4 control-label" for="state-normal">Inclusive Dates</label>
							<div class="col-md-8">
									<div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
                                                    <input type="text" id="appleave_from" name="example-daterange1" class="form-control" placeholder="From">
                                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                                    <input type="text" id="appleave_to" name="example-daterange2" class="form-control" placeholder="To">
                                                </div>
							</div> 
						
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">COMMUTATION</label>
							<div class="col-md-8">
								<select class="form-control" id="appleave_commutation">
												<option value="REQUESTED">REQUESTED</option>
												<option value="NOT REQUESTED">NOT REQUESTED</option>
												
												</select>
							   
							</div>	
						
						
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Recommendation</label>
							<div class="col-md-8">
								<textarea class="form-control" name="state-normal"  id="appleave_recommendation" placeholder="Approval / Disapproval due to ______"></textarea>
							   
							</div>
							
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Status</label>
							<div class="col-md-8">
								<select class="form-control" id="appleave_status">
												<option value="PENDING">PENDING</option>
												<option value="APPROVED">APPROVED</option>
												<option value="DECLINED">DECLINED</option>
												
												</select>
							   
							</div>
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saveappleave();" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" disabled>Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="appleaveclosebutton">Close</button>
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
                                                    <input type="text" id="travel_from" name="example-daterange1" class="form-control" placeholder="From">
                                                    <span class="input-group-addon"><i class="fa fa-chevron-right"></i></span>
                                                    <input type="text" id="travel_to" name="example-daterange2" class="form-control" placeholder="To">
                                                </div>
							</div> 
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Location</label>
							<div class="col-md-8">
								 <input type="text" name="state-normal" class="form-control" id="travel_location">
							   
							</div>
						<div class="row"></div>
							<label class="col-md-4 control-label" for="state-normal">Description</label>
							<div class="col-md-8">
								<textarea class="form-control" name="state-normal"  id="travel_description"></textarea>
							   
							</div>
							
							
						
						
						
						
							
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saveauth();" id="savebutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" disabled>Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="saveauthclosebutton">Close</button>
						</div>
					</div>
				</div>
			</div>
						

		</div>
		<!-- END Regular Modal -->					
	<!-- Authority to travel Modal -->
			<div id="authority-travel-modal-employee" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					
					
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Authority to Travel: Employees</strong></h3>
						</div>
						<div class="modal-body">
						<input type="hidden" id="authtravelid">
						<div class="row" style="margin-top:10px;"></div>
							<label class="col-md-2 control-label" for="state-normal">Employee</label>
							<div class="col-md-8">
								<select id="traveleid" name="example-select2" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
												<?php
													foreach($employee_list as $elist):
														echo "<option value='".$elist['eid']."'>".$elist['fname']." ".$elist['lname']."</option>";
													endforeach;
												?>
												
												</select>
							  
							</div>

							 <div class="row"><br></div>
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="addemployee();" id="savebutton">Add</button>
							
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="authemployeeclosebutton">Close</button>
						</div>
					</div>
				</div>
			</div>
						

		</div>
		<!-- END Regular Modal -->					
		
		<!-- generate Print travel modal -->
				<!-- Regular Modal Print PR-->
                <div id="printtravel" class="modal bg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                           <div class="modal-header">
								
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								
                                
                            </div> 
                            <div class="modal-body" id="fulldetailsbody">
                                
								
								<!-- Input States Block -->
            <div class="block">
                

                <!-- Input States Content -->
              <style>

tr.noBorder td{
	border:0;
}

table { page-break-inside:auto }
   tr    { page-break-inside:avoid; page-break-after:auto }
@media print {
    thead { display: table-header-group; }
    tfoot { display: table-footer-group; }
}
@media screen {
    /*thead { display: block; }
    tfoot { display: block; }*/
}
</style>


<div style="text-align:center;font-weight:bold;"><?php echo $travel_header;?></div>
<br>

<table border="1" style="border:solid 1px; width:800px;">
	
<thead>
		

	
	
	
</thead>
	<tbody>
			<tr style="text-align:left;font-weight:bold;">
	<td colspan="4">Name of Official/Employee <br><div  id="print_name" style="text-align:center;margin:10px;"></div><div id="print_othernames"  style="text-align:center;margin:10px;"></div></td>
	<td colspan="2" style="width:30%;">Position: <br><div  id="print_position" style="text-align:center; margin:10px;"></div></td>
	</tr>
	
	
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="2">Office/Station <div style="text-align:center;margin:10px;"><?php echo $travel_office;?></div></td>
	<td colspan="2">Destination <div style="text-align:center;margin:10px;" id="print_destination">Oasis Country Resort, City of San Fernando, La Union</div></td>
	<td colspan="2">Period of Travel:  <div style="text-align:center;margin:10px;" id="print_period">Friday, March 10, 2017</div></td>
	</tr>
	
	
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="4" valign="top">Purpose of Travel:<div style="text-align:center;" id="print_purpose">To attend a consultation meeting regarding the Regional Gov....</div></td>
	<td colspan="2">Please Check:  <br><br><div id="rectangle"></div>Official Business<br><br><div id="rectangle"></div>Official Time Only<br></td>
	</tr>
	
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="4"><div style="text-align:center;">ESTIMATED EXPENSES</div></td>
	<style>#rectangle{
    width:20;
    height:20px;
    background:white;
	border: 1px solid;
	float:left;
}</style>
	<td colspan="2" rowspan="10" valign="top">Please Check:  <br><br><div id="rectangle"><span id="cash"></span></div>Cash Advance<br><br><div id="rectangle"><span id="reimburse"></span></div>Reimbursement<br></td>
	</tr>
	
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="1"><div style="text-align:center;">Registration Fee</div></td>
	<td colspan="1"><div style="text-align:center;">Transportation</div></td>
	<td colspan="1"><div style="text-align:center;">Travel Allowance</div></td>
	<td colspan="1"><div style="text-align:center;">Total Amount</div></td>
	
	</tr>
	
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="1" style="height:30px;"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	
	</tr>
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="1" style="height:30px;"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	
	</tr>
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="1" style="height:30px;"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	
	</tr>
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="1" style="height:30px;"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	
	</tr>
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="1" style="height:30px;"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	
	</tr>
	</tr>
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="1" style="height:30px;"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	
	</tr>
	
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="1" style="height:30px;"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	
	</tr>
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="1" style="height:30px;"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	<td colspan="1"><div style="text-align:center;"></div></td>
	
	</tr>
	
	
	<tr style="text-align:left;font-weight:bold;">
	<td colspan="2">RECOMMENDING APPROVAL: <div style="text-align:center;margin-top:30px;"><?php echo $travel_column1;?></div></td>
	<td colspan="2">FUNDS AVAILABLE: <div style="text-align:center;margin-top:30px;"><?php echo $travel_column2;?></div></td>
	<td colspan="2">APPROVED BY: <div style="text-align:center;margin-top:30px;"><?php echo $travel_column3;?></div></td>
	</tr>
	
	
	</tbody>
	<!-- ff -->
	<tfoot>

	
	<tfoot>
	
	
	
</table>




                <!-- END Input States Content -->
            </div>
            <!-- END Input States Block -->
								
								
								
                            </div>
                            <div class="modal-footer">
							
								
                                <button type="button" id="printpo" class="btn btn-effect-ripple btn-primary" onclick="printauth();" ><i class="fa fa-print"></i> Print</button>
                               
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Print Modal -->			
	<!-- Upload 201 -->
			<div id="upload-201" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					
					
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>201 File Upload</strong></h3>
						</div>
						<div class="modal-body">
						
						 <form action="" method = "post" id="form_uploadfile" enctype="multipart/form-data">
							<input type="hidden" id="folder_destination" name="folder_destination" value="201_files">
							 <input type="text" id="fileattachmentid" name="fileattachmentid">
							 
							<input type = "file" name="fileattachment" id="fileattachment" size = "10" class="col-md-8" /> 
							
							<!-- <input type = "submit" value = "upload"  class="btn btn-effect-ripple btn-primary"/>  -->
							 
							<!--  <button type="button" class="btn btn-primary" onclick="uploadprofile()">Upload</button> -->
						  
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="upload_attachment();" id="savebutton">Upload</button>
						</form> 
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="fileuploadclosebutton">Close</button>
						</div>
					</div>
				</div>
			</div>
						

		</div>
		<!-- END Regular Modal -->	
	<!-- Upload Appleave -->
			<div id="upload-appleave" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					
					
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Application for Leave File Upload</strong></h3>
						</div>
						<div class="modal-body">
						
						 <form action="" method = "post" id="form_uploadfile_appleave" enctype="multipart/form-data">
							
							 <input type="text" id="fileattachmentid_appleave" name="fileattachmentid_appleave">
							 
							<input type = "file" name="fileattachment_appleave" id="fileattachment_appleave" size = "10" class="col-md-8" /> 
							
							<!-- <input type = "submit" value = "upload"  class="btn btn-effect-ripple btn-primary"/>  -->
							 
							<!--  <button type="button" class="btn btn-primary" onclick="uploadprofile()">Upload</button> -->
						  
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="upload_attachment_appleave();" id="savebutton">Upload</button>
						</form> 
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="fileuploadclosebutton_appleave">Close</button>
						</div>
					</div>
				</div>
			</div>
						

		</div>
		<!-- END Regular Modal -->		
		
		<!-- Upload auth travel -->
			<div id="upload-authtravel" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					
					
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Authority to Travel File Upload</strong></h3>
						</div>
						<div class="modal-body">
						
						 <form action="" method = "post" id="form_uploadfile_authtravel" enctype="multipart/form-data">
							
							 <input type="text" id="fileattachmentid_authtravel" name="fileattachmentid_authtravel">
							 
							<input type = "file" name="fileattachment_authtravel" id="fileattachment_authtravel" size = "10" class="col-md-8" /> 
							
							<!-- <input type = "submit" value = "upload"  class="btn btn-effect-ripple btn-primary"/>  -->
							 
							<!--  <button type="button" class="btn btn-primary" onclick="uploadprofile()">Upload</button> -->
						  
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="upload_attachment_authtravel();" id="savebutton">Upload</button>
						</form> 
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="fileuploadclosebutton_authtravel">Close</button>
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


