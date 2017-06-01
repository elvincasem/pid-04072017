
<div id="page-container" class="header-fixed-top sidebar-visible-lg-full">
			 <input type="hidden" id="applicantid" name="applicantid" value="<?php echo $applicantid;?>">
	
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
		 <input type="hidden" id="fileid" name="fileid" value="<?php echo $applicantid;?>">
		 
		 
		 
         <input type = "file" name="profileimage" id="profileimage" size = "10" class="col-md-8" /> 
        
        <!-- <input type = "submit" value = "upload"  class="btn btn-effect-ripple btn-primary"/>  -->
		 
		 <button type="button" class="btn btn-primary" onclick="uploadprofile()">Upload</button>
      </form> 
                                            <div class="col-xs-12">
                                                <h3 class="widget-heading"><small>Applicant Type<br> <strong>
												
												<input type="text" style="text-align:center;" id="applicant_type" class="form-control" value="<?php echo $applicant_profile['applicant_type'];?>">
												</strong> </small></h3>
                                            </div>
                                            
                                        </div>
										
										
										 <div class="block full">
											<button type="button" class="btn btn-primary" onclick="saveapplicanttype(<?php echo $applicant_profile['applicantid'];?>)">Update</button>
											
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
                                           <li class="hidden"><a href="#familybackground"><i class="fa fa-users"></i> Family Background</a></li>
										  
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
								<input type="text" id="lastname" class="form-control" placeholder="Lastname" value="<?php echo $applicant_profile['lname'];?>" >
								<input type="text" id="firstname" class="form-control" placeholder="Firstname" value="<?php echo $applicant_profile['fname'];?>" >
								<input type="text" id="middlename" class="form-control" placeholder="Middlename" value="<?php echo $applicant_profile['mname'];?>" >
								<input type="text" id="extension" class="form-control" placeholder="Extension" value="<?php echo $applicant_profile['ename'];?>" >
							</div>
                                        </div>
								<div class="row"></div>		
						
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Sex</label>
							
							<?php
							
								if($applicant_profile['gender']=="FEMALE"){
									$selectedf = "checked='checked'";
									$selectedm = "";
								}
								elseif($applicant_profile['gender']=="MALE"){
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
							
								if($applicant_profile['civil_status']=="SINGLE"){
									$civils = "checked='checked'";
									$civilm = "";
								}elseif($applicant_profile['civil_status']=="MARRIED"){
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
							<label class="col-md-3 control-label" for="state-normal">Mobile Number</label>
							<div class="col-md-8">
								<input type="text" id="mobileno" class="form-control" placeholder="" value="<?php echo $applicant_profile['mobile_number'];?>" >
								
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Email</label>
							<div class="col-md-8">
								<input type="text" id="email" class="form-control" placeholder="" value="<?php echo $applicant_profile['email_address'];?>" >
								
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Address</label>
							<div class="col-md-2">
								<input type="text" id="barangay" class="form-control" placeholder="Barangay" value="<?php echo $applicant_profile['a_barangay'];?>" >
								
							</div>
							<div class="col-md-2">
								<input type="text" id="towncity" class="form-control" placeholder="Town/City" value="<?php echo $applicant_profile['a_towncity'];?>" >
								
							</div>
							<div class="col-md-2">
								<input type="text" id="province" class="form-control" placeholder="Province" value="<?php echo $applicant_profile['a_province'];?>" >
								
							</div>
							<div class="col-md-2">
								<input type="text" id="zipcode" class="form-control" placeholder="Zip Code" value="<?php echo $applicant_profile['a_zipcode'];?>" >
								
							</div>
							
							<label class="col-md-3 control-label" for="state-normal">Date of Application</label>
							<div class="col-md-4">
								<input type="text" id="dateapplication"  class="form-control input-datepicker" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" value="<?php echo $applicant_profile['dateofapplication'];?>" >
								
							</div>
							
						</div>
						<div class="row"></div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="state-normal">Age</label>
							<div class="col-md-2">
								<input type="number" id="age" class="form-control" placeholder="" value="<?php echo $applicant_profile['age'];?>" >
								
							</div>
						</div>
						
						
						
						
						
						<div class="row"></div>
							<div class="form-group">			
							
							
							
							<div class="row"></div>
				<div class="form-group">
							
								
							
				</div>
							<div class="col-md-8">
								<button type="button" class="btn btn-primary" onclick="updateapplicant(<?php echo $applicantid;?>)">update</button>
								
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
                                            <li class="active"><a href="#block-tabs-home"><i class="fa fa-file-pdf-o"></i> Other Information</a></li>
                                            <li><a href="#other-files"><i class="fa fa-file-pdf-o"></i> Other Files</a></li>
                                           
                                        </ul>
                                    </div>
                                    <!-- END Block Tabs Title -->

			<!-- Tabs Content -->
			<div class="tab-content">
				<div class="tab-pane active" id="block-tabs-home">
					<h4><b>EDUCATIONAL QUALIFICATION/SCHOOL</b></h4> <a href="#educational-background" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="addeduc();">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Description</th>
										
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach($a_education as $education):
										echo "<tr>";
										echo "<td>".$education['educ_description']."</td>";
																				
										echo "<td><a href='#educational-background' class='btn btn-effect-ripple btn-primary' data-toggle='modal' onclick='updateeduc(".$education['applicanteducid'].")' ><i class='fa fa-pencil'></i></a>  <button onclick='deleteeduc(".$education['applicanteducid'].")' class='btn btn-danger notification' title='Delete' id='notification'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
									
								</tbody>
							</table>
					
					<div class="row"></div>
					<h4><b>RELEVANT SEMINAR/TRAINING</b></h4> <a href="#civil-service" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="addtrainingbutton()">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Description</th>
																				
										<th></th>
									</tr>
								</thead>
								<tbody>
								<?php
									foreach($a_training as $training):
										echo "<tr>";
										echo "<td>".$training['training_description']."</td>";
										
										
										echo "<td><a href='#civil-service' class='btn btn-effect-ripple btn-primary' data-toggle='modal' onclick='updatetraining(".$training['applicanttrainingid'].")'><i class='fa fa-pencil'></i></a>   <button class='btn btn-danger notification' title='Delete' id='notification'><i class='fa fa-times' onclick='deletetraining(".$training['applicanttrainingid'].");'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
								
									
								</tbody>
							</table>
						<div class="row"></div>
					<h4><b>WORK EXPERIENCE </b></h4> <a href="#work-experience" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="addworkbutton();">Add </a>
					
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Description</th>
										
										
										<th></th>
									</tr>
								</thead>
								<tbody>
								<?php
									foreach($a_work as $work):
										echo "<tr>";
										echo "<td>".$work['work_description']."</td>";
										
										
										
										
										
										echo "<td><a href='#work-experience' class='btn btn-effect-ripple btn-primary' data-toggle='modal' onclick='updatework(".$work['applicantworkid'].")' ><i class='fa fa-pencil'></i></a>   <button class='btn btn-danger notification' title='Delete' id='notification' onclick='deletework(".$work['applicantworkid'].")'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
								
								</tbody>
							</table>		
					

<div class="row"></div>
					<h4><b>TALENT/SPECIAL SKILLS/ COMPETENCIES</b></h4> <a href="#training" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="addskillbutton();">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Description</th>
										
										
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach($a_skill as $skill):
										echo "<tr>";
										echo "<td>".$skill['skill_description']."</td>";
										
										echo "<td><a href='#training' class='btn btn-effect-ripple btn-primary' data-toggle='modal' onclick='updateskill(".$skill['applicantskillid'].")'><i class='fa fa-pencil'></i></a>   <button class='btn btn-danger notification' title='Delete' id='notification' onclick='deleteskill(".$skill['applicantskillid'].")'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
								</tbody>
							</table>
				<div class="row"></div>
					<h4><b>ELIGIBILITY</b></h4> <a href="#eligibility" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="addeligibilitybutton();">Add </a>
							<table class="table table-striped table-bordered table-vcenter table-hover">
								<thead>
									<tr style="text-align:center;">
										
										<!-- <th style="width:100px;">Delivery ID</th>-->
										
										<th>Description</th>
										
										
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php
									foreach($a_eligibility as $eligibility):
										echo "<tr>";
										echo "<td>".$eligibility['eligibility_description']."</td>";
										
										echo "<td><a href='#eligibility' class='btn btn-effect-ripple btn-primary' data-toggle='modal' onclick='updateeligibility(".$eligibility['applicanteligibilityid'].")'><i class='fa fa-pencil'></i></a>   <button class='btn btn-danger notification' title='Delete' id='notification' onclick='deleteeligibility(".$eligibility['applicanteligibilityid'].")'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
								</tbody>
							</table>
 
				
			</div>
			<!-- END Tabs Content -->
			
			
			
			<div class="tab-pane" id="other-files">
					<h4><b>Other Files</b></h4> <a href="#201-files" class="btn btn-effect-ripple btn-primary" data-toggle="modal" onclick="">Add </a>
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
									foreach($a_files as $files):
									
										$filesid = $files['filesid'];
										$file_name = $files['file_name'];
										echo "<tr>";
										
										
										echo "<td>".$files['file_document_type']."</td>";
										echo "<td>".$files['file_description']."</td>";
										echo "<td>".mdate('%F %d, %Y',strtotime($files['file_date']))."</td>";
										//echo "<td><a href='#'>".$files['file_name']."</a></td>";
										
										echo "<td>";
											$fileurl2 = base_url();
											$filesurl = $fileurl2."uploads/applicant_files/".$file_name;
											
											if($file_name == "NONE"){
												echo "<a href='#upload-201' class='btn btn-effect-ripple btn-default' data-toggle='modal' onclick='openfile_201(".$files['filesid'].");'><i class='fa fa-upload'></i></a>";
											}else{
												echo "<a href='$filesurl' class='btn btn-effect-ripple btn-default'>$file_name</a><button class='btn btn-danger notification' title='Delete' id='notification' onclick='deleteuploadedfile(".$files['filesid'].")'><i class='fa fa-times'></i></button>";
											}
											
											//curl_close($ch);
										
										
										echo "</td>";
										
										
										echo "<td><a href='#modal-voucher' class='hidden btn btn-effect-ripple btn-primary' data-toggle='modal' onclick='' disabled><i class='fa fa-pencil'></i></a>   <button class='btn btn-danger notification' title='Delete' id='notification' onclick='deletefile(".$files['filesid'].")'><i class='fa fa-times'></i></button></td>";
										echo "</tr>";
									endforeach;
								
								?>
									
								</tbody>
							</table>
					
					<div class="row"></div>
			</div>
			
			
			
			
			
			
			
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
							<h3 class="modal-title"><strong>Educational Qualification/School</strong></h3>
						</div>
						<div class="modal-body">
						
						<input type="hidden" id="applicanteducid">
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Description</label>
							<div class="col-md-9">
								<textarea  class="form-control" id="educ_description"></textarea>
							   
							</div>
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saveeduc();" id="savebutton">Save</button>
							<button type="button" class="btn btn-primary" onclick="saveupdateeduc();" disabled id="updateeducbutton">update</button>
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
							<h3 class="modal-title"><strong>Relevant Seminar/Training</strong></h3>
						</div>
						<div class="modal-body">
							<div class="row"></div>
							<input type="hidden" id="applicanttrainingid">
							<label class="col-md-3 control-label" for="state-normal">Description</label>
							<div class="col-md-9">
								<textarea  class="form-control" id="training_description"></textarea>
							   
							</div>
						
							
							 <div class="row"><br></div>
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="savetraining();" id="savebuttontraining">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saveupdatetraining();" id="updatebuttontraining" disabled>Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="trainingclosebutton">Close</button>
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
						<div class="row"></div>
						<input type="hidden" id="applicantworkid">
							<label class="col-md-3 control-label" for="state-normal">Description</label>
							<div class="col-md-9">
								<textarea  class="form-control" id="work_description"></textarea>
							   
							</div>
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="savework();" id="saveworkbutton">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saveupdatework();" id="updateworkbutton" disabled>Update</button>
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
							<h3 class="modal-title"><strong>Talent/Special Skils/Competencies</strong></h3>
						</div>
						<div class="modal-body">
						
						<input type="hidden" id="applicantskillid">
						<div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Description</label>
							<div class="col-md-9">
								<textarea  class="form-control" id="skill_description"></textarea>
							   
							</div>
						
							
							 <div class="row"><br></div>
						
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" id="saveskillbutton" onclick="saveskill();">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saveupdateskill();" id="updateskillbutton" disabled>Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="skillclosebutton">Close</button>
						</div>
					</div>
				</div>
			</div>
						

		</div>
		<!-- END Regular Modal -->	
									
	<!-- Awards Received Modal -->
			<div id="eligibility" class="modal" role="dialog" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h3 class="modal-title"><strong>Eligibility</strong></h3>
						</div>
						<div class="modal-body">
						<input type="hidden" id="applicanteligibilityid">
						 <div class="row"></div>
							<label class="col-md-3 control-label" for="state-normal">Description</label>
							<div class="col-md-9">
								<textarea  class="form-control" id="eligibility_description"></textarea>
							   
							</div>
						
							
							 <div class="row"><br></div>
							
						<div class="modal-footer">
							<button type="button" class="btn btn-effect-ripple btn-primary" id="saveeligibilitybutton"  onclick="saveeligibility();">Save</button>
							<button type="button" class="btn btn-effect-ripple btn-primary" onclick="saveupdateeligibility();" id="updateeligibilitybutton" disabled>Update</button>
							<button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal" id="eligibilityclosebutton">Close</button>
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
							<button type="button" class="hidden btn btn-effect-ripple btn-primary" onclick="updatepayment();" id="updatebutton" disabled>Update</button>
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
							<h3 class="modal-title"><strong>File Upload</strong></h3>
						</div>
						<div class="modal-body">
						
						 <form action="" method = "post" id="form_uploadfile" enctype="multipart/form-data">
							<input type="hidden" id="folder_destination" name="folder_destination" value="applicant_files">
							 <input type="hidden" id="fileattachmentid" name="fileattachmentid">
							 
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


