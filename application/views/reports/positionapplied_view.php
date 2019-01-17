
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
                                        
                                        <h2>Applicant</h2>
                                    </div>
                                    <!-- END Datepicker Title -->

                                    <!-- Datepicker Content -->
                                    <form action="positionapplied_view" method="post" class="form-horizontal form-bordered" onsubmit="return true;">
                                        <!-- Datepicker for Bootstrap (classes are initialized in js/app.js -> uiInit()), for extra usage examples you can check out http://eternicode.github.io/bootstrap-datepicker -->
                                        <div class="form-group">
										
											<div class="row">&nbsp;</div>
											<label class="col-md-3 control-label" for="example-daterange1">Application Type</label>
											<div class="col-md-7">
										<select id="applicant_type" name="applicant_type" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
										<option value="All">All</option>
										<option value="SUPERVISORY">SUPERVISORY</option>
										<option value="NON-SUPERVISORY">NON-SUPERVISORY</option>

										</select>
											</div>
											
										<label class="col-md-3 control-label" for="example-daterange1">Position Applied</label>
											<div class="col-md-7">
										<select id="position_applied" name="position_applied" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
										<option value="All">All</option>
										<?php
											foreach($position_applied as $positionlist):
												echo "<option value='".$positionlist['position_designation']."'>".$positionlist['position_designation']."</option>";
											endforeach;
										
										?>


										</select>
											</div>
											
										<div class="row">&nbsp;</div>
											<label class="col-md-3 control-label" for="example-daterange1">Date of Application</label>
											<div class="col-md-7">
											
											<div class="input-group input-daterange" data-date-format="yyyy-mm-dd">
											   <input type="text" id="startdate" name="startdate" class="form-control" placeholder="From" value="<?php echo $startdate;?>">
                                                    
                                                    <input type="text" id="enddate" name="enddate" class="form-control" placeholder="To" value="<?php echo $enddate;?>">
													
											</div>
													<!--
													
										<select id="applicant_type" name="applicant_type" class="select-select2" style="width: 100%;" data-placeholder="Choose one..">
										<option value="All">All</option>
										<option value="SUPERVISORY">SUPERVISORY</option>
										<option value="NON-SUPERVISORY">NON-SUPERVISORY</option> -->

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
							

                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
       
