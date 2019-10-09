
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
			<?php $this->load->view('inc/subnav_view'); ?>
<!-- Tables Row -->
<div class="row">
   <div class="col-lg-12">
            <!-- Partial Responsive Block -->
			
			 <!-- Regular Modal -->
                <div id="adddeliverymodal" class="modal bg" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                           <div class="modal-header">
								
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h3 class="modal-title"><strong>Add Item</strong></h3>
                                
                            </div> 
                            <div class="modal-body">
                                <div class="form-group">
						
						<div class="row"></div>
						<label class="col-md-3 control-label text-right">Last Name</label>
                        <div class="col-md-7">
                            <input type="text" id="lname" name="state-normal" class="form-control" tabindex="0" value="">
                        </div>	
						<label class="col-md-3 control-label text-right">First Name</label>
                        <div class="col-md-7">
                            <input type="text" id="fname" name="state-normal" class="form-control" tabindex="0" value="">
                        </div>	
						<label class="col-md-3 control-label text-right">Middle Name</label>
                        <div class="col-md-7">
                            <input type="text" id="mname" name="state-normal" class="form-control col-xs-1" tabindex="0" value="">
                        </div>	
						<label class="col-md-3 control-label text-right">Extension</label>
                        <div class="col-md-7">
                            <input type="text" id="extension" name="state-normal" class="form-control col-xs-1" tabindex="0" value="">
                        </div>	
						<label class="col-md-3 control-label text-right">Applicant Type</label>
                        <div class="col-md-7">
                           <select id="applicanttype" name="example-select2" class="select-select2" style="width: 80%;" data-placeholder="Choose one..">
													<option value="SUPERVISORY">SUPERVISORY</option>
													<option value="NON-SUPERVISORY">NON-SUPERVISORY</option>
												</select>
                        </div>	
						<label class="col-md-3 control-label text-right">Position Applied</label>
                        <div class="col-md-9">
                           <select id="position_applied" name="example-select2" class="select-select2" style="width: 80%;" data-placeholder="Choose one..">
												<?php
												
												
													foreach($positionlist as $plist):
														echo "<option value='".$plist['position_designation']."'>".$plist['position_designation']."</option>";
													endforeach;
												?>
												</select>
                        </div>	
						
	
								
						<div class="row"></div>
							
					</div>
								
								<!-- Input States Block -->
            <div class="block">
                

                <!-- Input States Content -->

                <!-- END Input States Content -->
            </div>
            <!-- END Input States Block -->
								
								
								
                            </div>
                            <div class="modal-footer">
							<button type="button" id="savebutton" class="btn btn-effect-ripple btn-primary" onclick="saveapplicant();">Save Employee</button>
							
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
				
				<!-- download Modal -->
                <div id="downloadmodal" class="modal bg" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                           <div class="modal-header">
								
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
								<h3 class="modal-title"><strong>Download Applicant</strong></h3>
                                
                            </div> 
                            <div class="modal-body">
                                <div class="form-group">
						
						<div class="row"></div>
						
						<label class="col-md-3 control-label text-right">Applicant Type</label>
                        <div class="col-md-7">
                           <select id="applicanttype_download" name="example-select2" class="select-select2" style="width: 80%;" data-placeholder="Choose one..">
													<option value="ALL">ALL</option>
													<option value="SUPERVISORY">SUPERVISORY</option>
													<option value="NON-SUPERVISORY">NON-SUPERVISORY</option>
												</select>
                        </div>	
						
	
								
						<div class="row"></div>
							
					</div>
								
								<!-- Input States Block -->
            <div class="block">
                

                <!-- Input States Content -->

                <!-- END Input States Content -->
            </div>
            <!-- END Input States Block -->
								
								
								
                            </div>
                            <div class="modal-footer">
							<button type="button" id="savebutton" class="btn btn-effect-ripple btn-primary" onclick="downloadapplicant();">Download XLS</button>
							
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
		
            
	<div class="block full">
        <div class="block-title">
		<h5>Applicants List</h5>
			 <button type="button" id="adddelivery" class="pull-right btn btn-effect-ripple btn-primary" href="#downloadmodal" data-toggle="modal">Download </button> &nbsp;<button type="button" id="adddelivery" class="pull-right btn btn-effect-ripple btn-primary" href="#adddeliverymodal" data-toggle="modal">Add Applicant</button>
			<?php //print_r($heidirectory);?>
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr style="text-align:center;">
                        
                        <!-- <th style="width:100px;">Delivery ID</th>-->
                        
						<th style="width:480px;">Name</th>
                        <th>Gender</th>
                        <th>Age</th>
						<th>Address</th>
						<th>Applicant Type</th>
						<th>Date of Application</th>
                        
                        
						<th></th>
                    </tr>
                </thead>
                <tbody>
				<?php
				
				foreach ($applicantlist as $applicant_list):
				
					/*$base = base_url();
					$fileurl = $base."uploads/".$employees_list['eid'].".jpg";
					 $ch = curl_init($fileurl);    
					curl_setopt($ch, CURLOPT_NOBODY, true);
					curl_exec($ch);
					$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

					if($code == 404){
						$status = "no";
						$fileurl = "";
					}else{
						$status = "yes";
						$fileurl = $fileurl;
					}
					curl_close($ch);
				
				
		 
			
		
				
				echo "<tr class='odd gradeX' >";

				
				echo "<td>";
				if($status=="yes"){
				echo "<img style='width:18%;' src='$fileurl' alt='avatar' class='img-circle img-thumbnail img-thumbnail-transparent img-thumbnail-avatar-3x push'>";
			}else{
				echo "<img style='width:18%;' src='".base_url()."public/img/placeholders/avatars/avatar13@2x.jpg' alt='avatar' class='img-circle img-thumbnail img-thumbnail-transparent img-thumbnail-avatar-3x push'>";
			}
				*/
				
				echo "<td><a href='applicants/details/".$applicant_list['applicantid']."'>".$applicant_list['fname']." ".$applicant_list['mname']." ".$applicant_list['lname']."</a></td>";
				echo "<td>".$applicant_list['gender']."</td>";
				echo "<td>".$applicant_list['age']."</td>";
				
				echo "<td>".$applicant_list['a_barangay']." ".$applicant_list['a_towncity'].", ".$applicant_list['a_province']."</td>";
				echo "<td>".$applicant_list['applicant_type']."</td>";
				echo "<td>".mdate('%F %d, %Y',strtotime($applicant_list['dateofapplication']))."</td>";
				
				
			
				echo "<td class='center'> 
					
										
					<button class='btn btn-danger notification' title='Delete User' id='notification' onClick='deleteapplicant(".$applicant_list['applicantid'].")'><i class='fa fa-times'></i></button>
				</td>";
				echo "</tr>";
				
				endforeach;
				
				?>
				
				
				
				
                    
                </tbody>
            </table>
        </div>
    </div>
   </div> <!-- end column -->
</div> <!-- end row -->
			
			
			

			
		</div>
		<!-- END Page Content -->
	</div>
	<!-- END Main Container -->
</div>
<!-- END Page Container -->


