function custom_report(){
	var from = document.getElementById("date1").value;
	var to = document.getElementById("date2").value;
	//var year = document.getElementById("year").value;
	
	if(from =="" && to ==""){
		alert("Please select date range");
	}else{
		window.location.href = "purchaserequest_view/"+from+"/"+to;
	}
	
	
}

function custom_report_view(){
	var from = document.getElementById("date1").value;
	var to = document.getElementById("date2").value;
	//var year = document.getElementById("year").value;
	if(from =="" && to ==""){
		alert("Please select date range");
	}else{
	window.location.href = "../../purchaserequest_view/"+from+"/"+to;
	}
}

function utilization_report(){
	var from = document.getElementById("date1").value;
	var to = document.getElementById("date2").value;
	//var year = document.getElementById("year").value;
	
	if(from =="" && to ==""){
		alert("Please select date range");
	}else{
	window.location.href = "utilization_view/"+from+"/"+to;
	}
	
}

function utilization_report_view(){
	var from = document.getElementById("date1").value;
	var to = document.getElementById("date2").value;
	//var year = document.getElementById("year").value;
	
	if(from =="" && to ==""){
		alert("Please select date range");
	}else{
	window.location.href = "../../utilization_view/"+from+"/"+to;
	}
	
}

function issued_report(){
	var from = document.getElementById("date1").value;
	var to = document.getElementById("date2").value;
	//var year = document.getElementById("year").value;
	if(from =="" && to ==""){
		alert("Please select date range");
	}else{	
	window.location.href = "issued_view/"+from+"/"+to;
	}
}

function issued_report_view(){
	var from = document.getElementById("date1").value;
	var to = document.getElementById("date2").value;
	//var year = document.getElementById("year").value;
	
	if(from =="" && to ==""){
		alert("Please select date range");
	}else{
	window.location.href = "../../issued_view/"+from+"/"+to;
	}
	
}

function printapplicant(){
	var DocumentContainer = document.getElementById('fulldetailsbody');
	var WindowObject = window.open("", "PrintWindow",
	"width=750,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
	WindowObject.document.writeln(DocumentContainer.innerHTML);
	WindowObject.document.close();
	setTimeout(function(){
		WindowObject.focus();
		WindowObject.print();
		WindowObject.close();
	},50);
}