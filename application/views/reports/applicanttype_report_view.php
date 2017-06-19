
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
                                   <form action="applicanttype_view" method="post" class="form-horizontal form-bordered" onsubmit="return true;">
                                        <!-- Datepicker for Bootstrap (classes are initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://eternicode.github.io/bootstrap-datepicker -->
                                        <div class="form-group">
										
											<div class="row">&nbsp;</div>
											<label class="col-md-3 control-label" for="example-daterange1">Designation</label>
											<div class="col-md-7">
										<select id="applicant_type" name="applicant_type" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
										<?php echo "<option value='".$applicant_type."'>".$applicant_type."</option>";?>
										
										
										<option value="All">All</option>
										<option value="SUPERVISORY">SUPERVISORY</option>
										<option value="NON-SUPERVISORY">NON-SUPERVISORY</option>
										
										
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
			
			<h5>Applicants</h5>
			<button type="button" id="adddelivery" class="pull-right btn btn-effect-ripple btn-primary" href="#adddeliverymodal" data-toggle="modal">Print List</button>
		<!--	<a type="button" class="pull-right btn btn-md btn-primary" href="<?=base_url()?>reports/ticketbyagentdownload/<?php ?>">Print</a> -->
			
			<?php //print_r($heidirectory);?>
        </div>
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                    <tr>
						
                        <th>Name</th>
						
                        <th>Gender</th>
                        <th>Mobile</th>
                        <th>Email</th>
						<th>Applicant Type</th>
                        <th>Date Applied</th>
                        
						
                    </tr>
                </thead>
                <tbody>
				<?php
				
				foreach ($applicant_list as $applicants):
				//$heiname = strtoupper($hei['instname']);
				echo "<tr class='odd gradeX'>";
				
				
				
				echo "<td>".$applicants['fname']." ".$applicants['lname']."</td>";
				//echo "<td>".$applicants['designation']."</td>";
				echo "<td>".$applicants['gender']."</td>";
				echo "<td>".$applicants['mobile_number']."</td>";
				echo "<td>".$applicants['email_address']."</td>";
				echo "<td>".$applicants['applicant_type']."</td>";
				
				
				
				echo "<td>".mdate('%F %d, %Y',strtotime($applicants['dateofapplication']))."</td>";
				//echo "<td>".$applicants['employee_status']."</td>";
			
				
				echo "</tr>";
				
				endforeach;
				
				?>
				
				
				
				
                    
                </tbody>
            </table>
        </div>
    </div>
						

						
						
						
						<!-- Print Voucher-->
                <div id="adddeliverymodal" class="modal bg" tabindex="-1" role="dialog" aria-hidden="true">
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


<div style="text-align:center;font-weight:bold;">COMMISSION ON HIGHER EDUCATION<BR>Regional Office No. 1<br>City of San Fernando, La Union</div>
<BR>
<div style="text-align:center;font-weight:bold;">MATRIX OF APPLICANTS FOR THE SUPERVISORY POSITION</div>
<br>

<table border="1" style="border:solid 1px; width:100%;">
	
<thead>
		
<tr>
	<td>Name</td>
	<td>Address</td>
	<td>Sex</td>
	<td>Age</td>
	<td>Educational Qualification/School</td>
	<td>Relevant Seminar/Trainings</td>
	<td>Work Experience</td>
	<td>Skills</td>
	<td>Eligibility</td>
</tr>
	
	
	
</thead>
	<tbody>
		<?php
				
				foreach ($applicant_list as $applicants):
				//$heiname = strtoupper($hei['instname']);
				echo "<tr class='odd gradeX'>";
				
				
				
				echo "<td>".$applicants['fname']." ".$applicants['lname']."</td>";
				//echo "<td>".$applicants['designation']."</td>";
				echo "<td>".$applicants['a_barangay']." ".$applicants['a_towncity']." ".$applicants['a_province']."</td>";
				echo "<td>".$applicants['gender']."</td>";
				echo "<td>".$applicants['age']."</td>";
				echo "<td>"."</td>";
				echo "<td>"."</td>";
				
				
				
				echo "<td>".mdate('%F %d, %Y',strtotime($applicants['dateofapplication']))."</td>";
				//echo "<td>".$applicants['employee_status']."</td>";
			
				
				echo "</tr>";
				
				endforeach;
				
				?>
			
	
	
	
	
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
							
                                <button type="button" id="printpo" class="btn btn-effect-ripple btn-primary" onclick="printapplicant();" ><i class="fa fa-print"></i> Print</button>
								
                                <button type="button" class="btn btn-effect-ripple btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END Regular Modal -->
				
				
				
				
				
				
				

                        
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
       
