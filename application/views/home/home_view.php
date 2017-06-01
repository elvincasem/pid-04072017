
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
                        <!-- First Row -->
                        <div class="row">
                            <!-- Simple Stats Widgets -->
                            <div class="col-sm-6 col-lg-3">
                                <a href="#" class="widget">
                                    <div class="widget-content widget-content-mini text-right clearfix">
                                        <div class="widget-icon pull-left themed-background">
                                            <i class="gi gi-group text-light-op"></i>
                                        </div>
                                        <h2 class="widget-heading h3">
                                            <strong><span data-toggle="counter" data-to="<?php echo $applicantcount;?>"></span></strong>
                                        </h2>
                                        <span class="text-muted">Applicant</span>
                                    </div>
                                </a>
								
								
                            </div>
							
							
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini text-right clearfix">
                                        <div class="widget-icon pull-left themed-background-success">
                                            <i class="gi gi-user text-light-op"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-success">
                                            <strong><span data-toggle="counter" data-to="<?php echo $employeecount;?>"></span></strong>
                                        </h2>
                                        <span class="text-muted">Employee</span>
                                    </div>
                                </a>
                            </div>
						<!--	
                            <div class="col-sm-6 col-lg-3 hidden">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini text-right clearfix">
                                        <div class="widget-icon pull-left themed-background-warning">
                                            <i class="gi gi-list text-light-op"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-warning">
                                            <strong><span data-toggle="counter" data-to="<?php 
										//echo $lowstock['totallow'];
										?>"></span></strong>
                                        </h2>
                                        <span class="text-muted">Low on Supply</span>
                                    </div>
                                </a>
                            </div>
							
                            <div class="col-sm-6 col-lg-3 hidden">
                                <a href="javascript:void(0)" class="widget">
                                    <div class="widget-content widget-content-mini text-right clearfix">
                                        <div class="widget-icon pull-left themed-background-danger">
                                            <i class="gi gi-file text-light-op"></i>
                                        </div>
                                        <h2 class="widget-heading h3 text-danger">
                                            <strong><span data-toggle="counter" data-to="<?php 
										//echo $totalreq['totalrequisition'];
										?>"></span></strong>
                                        </h2>
                                        <span class="text-muted">Total Requisition</span>
                                    </div>
                                </a>
                            </div>
							
							<!--<div class="col-sm-6">
                                        <a href="javascript:void(0)" class="widget">
                                            <div class="widget-content themed-background-info text-light-op">
                                                <i class="fa fa-fw fa-chevron-right"></i> <strong>Satisfied with the Service Received</strong>
                                            </div>
                                            <div class="widget-content themed-background-muted text-center">
                                                <i class="fa fa-thumbs-o-up fa-3x text-info"></i>
												<h3>Strongly Agree</h3>
                                            </div>
                                            <div class="widget-content text-center">
                                                <strong><h2><span data-toggle="counter" data-to="<?php 
										//echo $totalstrongly->totalstrong;
										?>"></span> / <?php 
										//echo $totalsatisfied->totalsatisfied;
										?></strong></h2>
                                            </div>
                                        </a>
							</div> -->
							
							<div class="row">
							
							</div>
							 
                        </div>
                       <!-- END First Row -->
					<div class="row">
					
						<div class="widget">
		<div class="widget-content border-bottom">
			<span class="pull-right text-muted"></span>
                                       Employee Designation
			</div>
			<div class="widget-content border-bottom themed-background-muted">
				<input type="hidden" id="chartvalues" value='<?php echo$dashboardchart;?>'>
				<input type="hidden" value="<?php echo date('Y');?>" id="currentyear">
						<!-- Partial Responsive Block -->
				<div class="block">
					<div style="text-align:center;">
						<div id="chart-container" ></div>
					</div>
				</div>
			</div>
                                    
		</div>
					</div>
						
<script type="text/javascript">
  FusionCharts.ready(function(){
	  
	  //console.log(document.getElementById("chartvalues").value);
	  var jsonvalues = JSON.parse(document.getElementById("chartvalues").value);
	  //var currentyear = document.getElementById("currentyear").value;
	  //var start = document.getElementById("start").value;
	  //var end = document.getElementById("end").value;
	  //var year = document.getElementById("year").value;
	  //console.log(start);
	  
    var fusioncharts = new FusionCharts({
   type: 'pie3d',
    renderAt: 'chart-container',
    width: '800',
    height: '450',
    dataFormat: 'json',
    dataSource: {
        "chart": {
		"caption": "Employee by Position",
		"animation": "1",
        "subCaption": "",
        "paletteColors": "#0075c2,#1aaf5d,#f2c500,#f45b00,#8e0000",
        "bgColor": "#ffffff",
        "showBorder": "0",
        "use3DLighting": "1",
        "showShadow": "0",
        "enableSmartLabels": "1",
        "startingAngle": "0",
        "showPercentValues": "1",
        "showPercentInTooltip": "0",
        "decimals": "1",
        "captionFontSize": "14",
        "subcaptionFontSize": "14",
        "subcaptionFontBold": "0",
        "toolTipColor": "#ffffff",
        "toolTipBorderThickness": "1",
        "toolTipBgColor": "#000000",
        "toolTipBgAlpha": "80",
        "toolTipBorderRadius": "2",
        "toolTipPadding": "5",
        "showHoverEffect": "1",
        "showLegend": "1",
        "legendBgColor": "#ffffff",
        "legendBorderAlpha": "0",
        "legendShadow": "0",
        "legendItemFontSize": "10",
        "legendItemFontColor": "#666666",
        "useDataPlotColorForLabels": "1"
			
        },
        "data":jsonvalues
    }
}
);


			
    fusioncharts.render();
    
});
</script>

                        
                    </div>
                    <!-- END Page Content -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
       
