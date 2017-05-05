function saveapplicant(){
	
	    
	
	var lname = document.getElementById("lname").value;
	var fname = document.getElementById("fname").value;
	var mname = document.getElementById("mname").value;
	var extension = document.getElementById("extension").value;
	var applicanttype = document.getElementById("applicanttype").value;
	
	if(fname!="" && lname!=""){
		
	
		$.ajax({
			url: 'applicants/saveapplicant',
			type: 'post',
			data: {lname:lname,fname:fname,mname:mname,extension:extension,applicanttype:applicanttype},
			success: function(response) {
				$('#savebutton').prop("disabled", true);
				//console.log(response);
				//location.reload();
				var lastid = JSON.parse(response);
				window.location.href = "applicants/details/"+lastid;
				
			}
		});
	}else{
		alert("Firstname or Lastname must not be blank.");
	}
	
}

function deleteapplicant(id){
	
	var r = confirm("Are your sure you want to delete this applicant?");
    if (r == true) {
        //alert ("You pressed OK!");
		var person = prompt("Please enter Administrator Password");
		if (person =='superadmin') {
		$.ajax({
                    url: 'applicants/deleteapplicant',
                    type: 'post',
                    data: {applicantid: id},
                    success: function(response) {
						console.log(response);
						location.reload();
						//$('#general-table').load(document.URL +  ' #general-table');
                    }
                });
		}else{
			alert("Invalid Password");
		}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}

function updateapplicant(id){
	
	//$('#savebutton').prop("disabled", true);    
	var lastname = document.getElementById("lastname").value;
	var firstname = document.getElementById("firstname").value;
	var middlename = document.getElementById("middlename").value;
	var extension = document.getElementById("extension").value;
	
	if(document.getElementById("genderm").checked==true){
		var gender = "MALE";
	}if(document.getElementById("genderf").checked==true){
		var gender = "FEMALE";
	}
	if(document.getElementById("civilstatuss").checked==true){
		var civilstatus = "SINGLE";
	}if(document.getElementById("civilstatusm").checked==true){
		var civilstatus = "MARRIED";
	}
	
	var mobileno = document.getElementById("mobileno").value;
	var email = document.getElementById("email").value;
	var barangay = document.getElementById("barangay").value;
	var towncity = document.getElementById("towncity").value;
	var province = document.getElementById("province").value;
	var zipcode = document.getElementById("zipcode").value;
	var dateapplication = document.getElementById("dateapplication").value;
	var age = document.getElementById("age").value;
	
	

	
	$.ajax({
		url: '../updateapplicant',
		type: 'post',
		data: {applicantid:id,lastname:lastname,firstname:firstname,middlename:middlename,extension:extension,gender:gender,civilstatus:civilstatus,mobileno:mobileno,email:email,barangay:barangay,towncity:towncity,province:province,zipcode:zipcode,dateapplication:dateapplication,age:age},
		success: function(response) {
			console.log(response);
			
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Basic info updated!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			
			//location.reload();
			//var lastid = JSON.parse(response);
			//window.location.href = "employees/details/"+lastid;
			
		}
	});
	
}

function updateemployeefamily(id){
	
	//$('#savebutton').prop("disabled", true);    
	var spouse_lname = document.getElementById("spouse_lname").value;
	var spouse_fname = document.getElementById("spouse_fname").value;
	var spouse_mname = document.getElementById("spouse_mname").value;
	var father_lname = document.getElementById("father_lname").value;
	var father_fname = document.getElementById("father_fname").value;
	var father_mname = document.getElementById("father_mname").value;
	var mother_lname = document.getElementById("mother_lname").value;
	var mother_fname = document.getElementById("mother_fname").value;
	var mother_mname = document.getElementById("mother_mname").value;
	
	
	$.ajax({
		url: '../updateemployeefamily',
		type: 'post',
		data: {eid:id,spouse_lname:spouse_lname,spouse_fname:spouse_fname,spouse_mname:spouse_mname,father_lname:father_lname,father_fname:father_fname,father_mname:father_mname,mother_lname:mother_lname,mother_fname:mother_fname,mother_mname:mother_mname},
		success: function(response) {
			console.log(response);
			
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Basic info updated!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			
			//location.reload();
			//var lastid = JSON.parse(response);
			//window.location.href = "employees/details/"+lastid;
			
		}
	});
	
}

function addchildren(id){
	
	//$('#savebutton').prop("disabled", true);    
	var children_name = document.getElementById("children_name").value;
	var children_dob = document.getElementById("children_dob").value;
	

	
	$.ajax({
		url: '../addchildren',
		type: 'post',
		data: {eid:id,children_name:children_name,children_dob:children_dob},
		success: function(response) {
			console.log(response);
			
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Basic info updated!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			$('#children_table').load(document.URL +  ' #children_table');
			
			//location.reload();
			//var lastid = JSON.parse(response);
			//window.location.href = "employees/details/"+lastid;
			
		}
	});
	
}

function deletechildren(id){
	
	
	$.ajax({
		url: '../deletechildren',
		type: 'post',
		data: {childrenid:id},
		success: function(response) {
			console.log(response);
			
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Child deleted!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			$('#children_table').load(document.URL +  ' #children_table');
			
			//location.reload();
			//var lastid = JSON.parse(response);
			//window.location.href = "employees/details/"+lastid;
			
		}
	});
	
}

function uploadprofile(){
	
	var form = document.getElementById("form_uploadprofile");


  //form.submit();

	
	//document.getElementById('form_uploadprofile').submit(function(){
	
			 var formData = new FormData(form);
			 //alert(formData);
			$.ajax({
				url: '../uploadprofile',
				type: 'POST',
				data: formData,
				async: false,
				success: function (data) {
					//alert(data)
					location.reload();
				},
				cache: false,
				contentType: false,
				processData: false
			});
	
	
}

function upload_attachment(){
	
	var form = document.getElementById("form_uploadfile");


  //form.submit();

	
	//document.getElementById('form_uploadprofile').submit(function(){
	
			 var formData = new FormData(form);
			 //alert(formData);
			$.ajax({
				url: '../upload_attachment',
				type: 'POST',
				data: formData,
				async: false,
				success: function (data) {
					//console.log(data);
					$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>File uploaded!</p>', {
						type: 'success',
						delay: 3000,
						allow_dismiss: true,
						offset: {from: 'top', amount: 20}
					});
					document.getElementById("fileuploadclosebutton").click();
					$('#block-tabs-profile').load(document.URL +  ' #block-tabs-profile');
					//alert(data)
					//location.reload();
				},
				cache: false,
				contentType: false,
				processData: false
			});
	
	
}

/*  educational background */

function saveeduc(){
	
	
	var applicantid = document.getElementById("applicantid").value;
	var educ_description = document.getElementById("educ_description").value;
	
	
	$.ajax({
		url: '../saveeduc',
		type: 'post',
		data: {applicantid: applicantid,educ_description:educ_description},
		success: function(response) {
			console.log(response);
			//location.reload();
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Educational Background Added!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			document.getElementById("educ_description").value ="";
			document.getElementById("closeeducbutton").click();
			$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
			
			
			
		}
	});
	
}


function deleteeduc(id){
	
	var r = confirm("Are your sure you want to delete this Information?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: '../deleteeduc',
                    type: 'post',
                    data: {educbackgroundid: id},
                    success: function(response) {
						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Record deleted!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
                    }
                });
		//}else{
			//alert("Invalid Password");
		//}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}
/* save career */

function savetraining(){
	
	
	var applicantid = document.getElementById("applicantid").value;
	var training_description = document.getElementById("training_description").value;
	
	
	$.ajax({
		url: '../savetraining',
		type: 'post',
		data: {applicantid: applicantid,training_description:training_description},
		success: function(response) {
			console.log(response);
			//location.reload();
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Information Added!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			document.getElementById("training_description").value = "";
			document.getElementById("careerclosebutton").click();
			$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
			
			
			
		}
	});
	
}

function deletecareer(id){
	
	var r = confirm("Are your sure you want to delete this Information?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: '../deletecareer',
                    type: 'post',
                    data: {civilserviceid: id},
                    success: function(response) {
						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Record deleted!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
                    }
                });
		//}else{
			//alert("Invalid Password");
		//}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}

/* save work */

function savework(){
	
	  
	var applicantid = document.getElementById("applicantid").value;
	var work_description = document.getElementById("work_description").value;
	
	
	
	$.ajax({
		url: '../savework',
		type: 'post',
		data: {applicantid: applicantid,work_description:work_description},
		success: function(response) {
			console.log(response);
			//location.reload();
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Service Record Added!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			document.getElementById("work_description").value = "";
			document.getElementById("workclosebutton").click();
			$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
			
			
			
		}
	});
	
}

function deletework(id){
	
	var r = confirm("Are your sure you want to delete this Information?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: '../deletework',
                    type: 'post',
                    data: {applicantworkid: id},
                    success: function(response) {
						console.log(response);
						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Record deleted!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
                    }
                });
		//}else{
			//alert("Invalid Password");
		//}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}

function saveskill(){
	
	  
	var applicantid = document.getElementById("applicantid").value;
	var skill_description = document.getElementById("skill_description").value;
	
	
	
	$.ajax({
		url: '../saveskill',
		type: 'post',
		data: {applicantid: applicantid,skill_description:skill_description},
		success: function(response) {
			console.log(response);
			//location.reload();
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Service Record Added!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			document.getElementById("skill_description").value = "";
			document.getElementById("trainingclosebutton").click();
			$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
			
			
			
		}
	});
	
}

function deleteskill(id){
	
	var r = confirm("Are your sure you want to delete this Information?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: '../deleteskill',
                    type: 'post',
                    data: {applicantskillid: id},
                    success: function(response) {
						console.log(response);
						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Record deleted!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
                    }
                });
		//}else{
			//alert("Invalid Password");
		//}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}


function saveeligibility(){
	
	  
	var applicantid = document.getElementById("applicantid").value;
	var eligibility_description = document.getElementById("eligibility_description").value;
	
	
	
	$.ajax({
		url: '../saveeligibility',
		type: 'post',
		data: {applicantid: applicantid,eligibility_description:eligibility_description},
		success: function(response) {
			console.log(response);
			//location.reload();
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Service Record Added!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			document.getElementById("eligibility_description").value = "";
			document.getElementById("eligibilityclosebutton").click();
			$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
			
			
			
		}
	});
	
}
function deleteeligibility(id){
	
	var r = confirm("Are your sure you want to delete this Information?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: '../deleteeligibility',
                    type: 'post',
                    data: {applicanteligibilityid: id},
                    success: function(response) {
						console.log(response);
						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Record deleted!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
                    }
                });
		//}else{
			//alert("Invalid Password");
		//}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}

function deletetraining(id){
	
	var r = confirm("Are your sure you want to delete this Information?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: '../deletetraining',
                    type: 'post',
                    data: {trainingid: id},
                    success: function(response) {
						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Record deleted!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
                    }
                });
		//}else{
			//alert("Invalid Password");
		//}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}

/* save award */

function saveaward(){
	
	$('#savebutton').prop("disabled", true);    
	var eid = document.getElementById("eid").value;
	var award_date = document.getElementById("award_date").value;
	var award_department = document.getElementById("award_department").value;
	var award_description = document.getElementById("award_description").value;

	
	
	
	
	$.ajax({
		url: '../saveaward',
		type: 'post',
		data: {eid: eid,award_date:award_date,award_department:award_department,award_description:award_description},
		success: function(response) {
			console.log(response);
			//location.reload();
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Training Record Added!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			document.getElementById("awardclosebutton").click();
			$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
			
			
			
		}
	});
	
}

function deleteaward(id){
	
	var r = confirm("Are your sure you want to delete this Information?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: '../deleteaward',
                    type: 'post',
                    data: {awardid: id},
                    success: function(response) {
						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Record deleted!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
                    }
                });
		//}else{
			//alert("Invalid Password");
		//}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}

/* save other */

function saveother(){
	
	$('#savebutton').prop("disabled", true);    
	var eid = document.getElementById("eid").value;
	var information_type = document.getElementById("information_type").value;
	var information_description = document.getElementById("information_description").value;
	
	
	$.ajax({
		url: '../saveother',
		type: 'post',
		data: {eid: eid,information_type:information_type,information_description:information_description},
		success: function(response) {
			console.log(response);
			//location.reload();
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Training Record Added!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			document.getElementById("otherclosebutton").click();
			$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
			
			
			
		}
	});
	
}

function deleteother(id){
	
	var r = confirm("Are your sure you want to delete this Information?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: '../deleteother',
                    type: 'post',
                    data: {otherid: id},
                    success: function(response) {
						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Record deleted!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
                    }
                });
		//}else{
			//alert("Invalid Password");
		//}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}

function savefile(){
	
	$('#savebutton').prop("disabled", true);    
	var eid = document.getElementById("eid").value;
	var file_document_type = document.getElementById("file_document_type").value;
	var file_description = document.getElementById("file_description").value;
	var file_date = document.getElementById("file_date").value;
	
	
	$.ajax({
		url: '../savefile',
		type: 'post',
		data: {eid: eid,file_document_type:file_document_type,file_description:file_description,file_date:file_date},
		success: function(response) {
			console.log(response);
			//location.reload();
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Training Record Added!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			document.getElementById("fileclosebutton").click();
			$('#block-tabs-profile').load(document.URL +  ' #block-tabs-profile');
			
			
			
		}
	});
	
}

function deletefile(id){
	
	var r = confirm("Are your sure you want to delete this Information?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: '../deletefile',
                    type: 'post',
                    data: {filesid: id},
                    success: function(response) {
						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Record deleted!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						$('#block-tabs-profile').load(document.URL +  ' #block-tabs-profile');
                    }
                });
		//}else{
			//alert("Invalid Password");
		//}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}

function saverating(){
	
	$('#savebutton').prop("disabled", true);    
	var eid = document.getElementById("eid").value;
	var rating_from = document.getElementById("rating_from").value;
	var rating_to = document.getElementById("rating_to").value;
	var rating = document.getElementById("rating_value").value;
	
	
	$.ajax({
		url: '../saverating',
		type: 'post',
		data: {eid: eid,rating_from:rating_from,rating_to:rating_to,rating:rating},
		success: function(response) {
			console.log(response);
			//location.reload();
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Training Record Added!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			document.getElementById("ratingclosebutton").click();
			$('#rating').load(document.URL +  ' #rating');
			
			
			
		}
	});
	
}

function deleterating(id){
	
	var r = confirm("Are your sure you want to delete this Information?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: '../deleterating',
                    type: 'post',
                    data: {ratingid: id},
                    success: function(response) {
						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Record deleted!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						$('#rating').load(document.URL +  ' #rating');
                    }
                });
		//}else{
			//alert("Invalid Password");
		//}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}

function saveleavecredit(){
	
	$('#savebutton').prop("disabled", true);    
	var eid = document.getElementById("eid").value;
	var leave_from = document.getElementById("leave_from").value;
	var leave_to = document.getElementById("leave_to").value;
	var leave_particular = document.getElementById("leave_particular").value;
	var leave_earned = document.getElementById("leave_earned").value;
	var leave_absences = document.getElementById("leave_absences").value;
	var leave_abswop = document.getElementById("leave_abswop").value;
	var sick_earned = document.getElementById("sick_earned").value;
	var sick_abswp = document.getElementById("sick_abswp").value;
	var sick_abswop = document.getElementById("sick_abswop").value;
	var sick_action = document.getElementById("sick_action").value;
	var leave_balance = document.getElementById("leave_balance").value;
	var sick_balance = document.getElementById("sick_balance").value;
	
	
	$.ajax({
		url: '../saveleavecredit',
		type: 'post',
		data: {eid: eid,leave_from:leave_from,leave_to:leave_to,leave_particular:leave_particular,leave_earned:leave_earned,leave_absences:leave_absences,leave_abswop:leave_abswop,sick_earned:sick_earned,sick_abswp:sick_abswp,sick_abswop:sick_abswop,sick_action:sick_action,leave_balance:leave_balance,sick_balance:sick_balance},
		success: function(response) {
			console.log(response);
			//location.reload();
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Leave Credit Added!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			document.getElementById("leavecreditclosebutton").click();
			$('#leave-credits').load(document.URL +  ' #leave-credits');
			
			
			
		}
	});
	
}

function deleteleavecredit(id){
	
	var r = confirm("Are your sure you want to delete this Information?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: '../deleteleavecredit',
                    type: 'post',
                    data: {leavecreditsid: id},
                    success: function(response) {
						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Record deleted!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						$('#leave-credits').load(document.URL +  ' #leave-credits');
                    }
                });
		//}else{
			//alert("Invalid Password");
		//}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}

function saveappleave(){
	
	$('#savebutton').prop("disabled", true);    
	var eid = document.getElementById("eid").value;
	var appleave_type = document.getElementById("appleave_type").value;
	var appleave_location = document.getElementById("appleave_location").value;
	var appleave_from = document.getElementById("appleave_from").value;
	var appleave_to = document.getElementById("appleave_to").value;
	var appleave_recommendation = document.getElementById("appleave_recommendation").value;
	var appleave_status = document.getElementById("appleave_status").value;
	var appleave_commutation = document.getElementById("appleave_commutation").value;

	
	
	$.ajax({
		url: '../saveappleave',
		type: 'post',
		data: {eid: eid,appleave_type:appleave_type,appleave_location:appleave_location,appleave_from:appleave_from,appleave_to:appleave_to,appleave_recommendation:appleave_recommendation,appleave_status:appleave_status,appleave_commutation:appleave_commutation},
		success: function(response) {
			console.log(response);
			//location.reload();
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Leave Record Added!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			document.getElementById("appleaveclosebutton").click();
			$('#request-approvals').load(document.URL +  ' #request-approvals');
			
			
			
		}
	});
	
}

function deleteappleave(id){
	
	var r = confirm("Are your sure you want to delete this Information?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: '../deleteappleave',
                    type: 'post',
                    data: {appleaveid: id},
                    success: function(response) {
						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Record deleted!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						$('#request-approvals').load(document.URL +  ' #request-approvals');
                    }
                });
		//}else{
			//alert("Invalid Password");
		//}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}

function saveauth(){
	
	$('#savebutton').prop("disabled", true);    
	var eid = document.getElementById("eid").value;
	var travel_from = document.getElementById("travel_from").value;
	var travel_to = document.getElementById("travel_to").value;
	var travel_location = document.getElementById("travel_location").value;
	var travel_description = document.getElementById("travel_description").value;
	
	
	
	$.ajax({
		url: '../saveauth',
		type: 'post',
		data: {eid: eid,travel_from:travel_from,travel_to:travel_to,travel_location:travel_location,travel_description:travel_description},
		success: function(response) {
			console.log(response);
			//location.reload();
			$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Travel Record Added!</p>', {
				type: 'success',
				delay: 3000,
				allow_dismiss: true,
				offset: {from: 'top', amount: 20}
			});
			document.getElementById("saveauthclosebutton").click();
			$('#authority-to-travel').load(document.URL +  ' #authority-to-travel');
			
			
			
		}
	});
	
}

function deleteauth(id){
	
	var r = confirm("Are your sure you want to delete this Information?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: '../deleteauth',
                    type: 'post',
                    data: {authtravelid: id},
                    success: function(response) {
						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Record deleted!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						$('#authority-to-travel').load(document.URL +  ' #authority-to-travel');
                    }
                });
		//}else{
			//alert("Invalid Password");
		//}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}

function addemployeetolist(authid){
	document.getElementById("authtravelid").value = authid
}

function addemployee(){
	var traveleid = document.getElementById("traveleid").value;
	var authtravelid = document.getElementById("authtravelid").value;
	$.ajax({
                    url: '../addemployee',
                    type: 'post',
                    data: {traveleid: traveleid,authtravelid:authtravelid},
                    success: function(response) {
						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Record Added!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						$('#authority-to-travel').load(document.URL +  ' #authority-to-travel');
                    }
                });
	
}

function removetraveleid(id){
	
	var r = confirm("Are your sure you want to delete this Employee?");
    if (r == true) {
        //alert ("You pressed OK!");
		//var person = prompt("Please enter Administrator Password");
		//if (person =='superadmin') {
		$.ajax({
                    url: '../removetraveleid',
                    type: 'post',
                    data: {travelemployeeid: id},
                    success: function(response) {
						$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>Employee deleted!</p>', {
							type: 'success',
							delay: 3000,
							allow_dismiss: true,
							offset: {from: 'top', amount: 20}
						});
						$('#authority-to-travel').load(document.URL +  ' #authority-to-travel');
                    }
                });
		//}else{
			//alert("Invalid Password");
		//}
		
    } if(r == false) {
        //txt = "You pressed Cancel!";
		
    }
	
}

function printtravel(travelid){
	
	//$('#update').removeAttr("disabled");
	//$('#updateproject').prop("disabled", false);    
	//$('#saveproject').prop("disabled", true);    

	
	$.ajax({
		url: '../printtravel',
		type: 'post',
		data: {travelid : travelid},
		success: function(response) {
			console.log(response);
			 var data = JSON.parse(response);
			document.getElementById("print_name").innerHTML = data.fname+" "+data.lname;
			document.getElementById("print_position").innerHTML = data.designation;
			document.getElementById("print_destination").innerHTML = data.travel_location;
			document.getElementById("print_period").innerHTML = data.travel_from +" To "+data.travel_to;
			document.getElementById("print_purpose").innerHTML = data.travel_description;
			if(data.travel_expense=="CASH ADVANCE"){
					document.getElementById("cash").innerHTML = "X";
					document.getElementById("reimburse").innerHTML = "";
			}else{
					document.getElementById("cash").innerHTML = "";
					document.getElementById("reimburse").innerHTML = "X";
				
			}
			
			
			
		} 
	});
	
	$.ajax({
		url: '../printtravel_employee',
		type: 'post',
		data: {travelid : travelid},
		success: function(response) {
			console.log(response);
			 var data = JSON.parse(response);
			 
			var employeelist = "";
			for(var ctr=0;ctr<data.length; ctr++){
				employeelist= employeelist+  data[ctr].fname +" "+ data[ctr].lname+"<br>";
			}
			document.getElementById("print_othernames").innerHTML = employeelist;
			
			
			
			
		} 
	});
		

	
	
}


function printauth(){
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

function openfile_201(filesid){
	document.getElementById("fileattachmentid").value=filesid;
}

function deleteuploadedfile(filesid){
	
	$.ajax({
		url: '../deleteuploadedfile',
		type: 'post',
		data: {filesid : filesid},
		success: function(response) {
			console.log(response);
			 $.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>File deleted!</p>', {
						type: 'success',
						delay: 3000,
						allow_dismiss: true,
						offset: {from: 'top', amount: 20}
					});
					
					$('#block-tabs-profile').load(document.URL +  ' #block-tabs-profile');

		} 
	});
	
}

function openfile_appleave(appleaveid){
	document.getElementById("fileattachmentid_appleave").value=appleaveid;
}

function upload_attachment_appleave(){
	
	var form = document.getElementById("form_uploadfile_appleave");


  //form.submit();

	
	//document.getElementById('form_uploadprofile').submit(function(){
	
			 var formData = new FormData(form);
			 //alert(formData);
			$.ajax({
				url: '../upload_attachment_appleave',
				type: 'POST',
				data: formData,
				async: false,
				success: function (data) {
					console.log(data);
					$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>File uploaded!</p>', {
						type: 'success',
						delay: 3000,
						allow_dismiss: true,
						offset: {from: 'top', amount: 20}
					});
					document.getElementById("fileuploadclosebutton_appleave").click();
					$('#request-approvals').load(document.URL +  ' #request-approvals');
					//alert(data)
					//location.reload();
				},
				cache: false,
				contentType: false,
				processData: false
			});
	
	
}

function deleteuploadedfile_appleave(appleaveid){
	
	$.ajax({
		url: '../deleteuploadedfile_appleaveid',
		type: 'post',
		data: {appleaveid : appleaveid},
		success: function(response) {
			console.log(response);
			 $.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>File deleted!</p>', {
						type: 'success',
						delay: 3000,
						allow_dismiss: true,
						offset: {from: 'top', amount: 20}
					});
					
					$('#request-approvals').load(document.URL +  ' #request-approvals');

		} 
	});
	
}

/* authority to travel */

function openfile_authtravel(authtravelid){
	
	document.getElementById("fileattachmentid_authtravel").value=authtravelid;
}

function upload_attachment_authtravel(){
	
	var form = document.getElementById("form_uploadfile_authtravel");


  //form.submit();

	
	//document.getElementById('form_uploadprofile').submit(function(){
	
			 var formData = new FormData(form);
			 //alert(formData);
			$.ajax({
				url: '../upload_attachment_authtravel',
				type: 'POST',
				data: formData,
				async: false,
				success: function (data) {
					console.log(data);
					$.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>File uploaded!</p>', {
						type: 'success',
						delay: 3000,
						allow_dismiss: true,
						offset: {from: 'top', amount: 20}
					});
					document.getElementById("fileuploadclosebutton_authtravel").click();
					$('#authority-to-travel').load(document.URL +  ' #authority-to-travel');
					//alert(data)
					//location.reload();
				},
				cache: false,
				contentType: false,
				processData: false
			});
	
	
}

function deleteuploadedfile_authtravel(authtravelid){
	
	$.ajax({
		url: '../deleteuploadedfile_authtravel',
		type: 'post',
		data: {authtravelid : authtravelid},
		success: function(response) {
			console.log(response);
			 $.bootstrapGrowl('<h4><strong>Success!</strong></h4> <p>File deleted!</p>', {
						type: 'success',
						delay: 3000,
						allow_dismiss: true,
						offset: {from: 'top', amount: 20}
					});
					
					$('#authority-to-travel').load(document.URL +  ' #authority-to-travel');

		} 
	});
	
}


//edit parts
function addeduc(){
	$('#updateeducbutton').prop("disabled",true);
	  
	$('#savebutton').prop("disabled", false);    
	document.getElementById("educ_description").value = ""
}
function updateeduc(educid){
	
	$('#updateeducbutton').removeAttr("disabled");
	//$('#updateproject').prop("disabled", false);    
	$('#savebutton').prop("disabled", true);    

	$.ajax({
		url: '../geteduc',
		type: 'post',
		data: {educid : educid},
		success: function(response) {
			console.log(response);
			var data = JSON.parse(response);
			document.getElementById("applicanteducid").value = data.applicanteducid;
			document.getElementById("educ_description").value = data.educ_description;
						
			
			
		} 
	});
	
	
	
	
}

function saveupdateeduc(){
	
	    
	
	var applicanteducid = document.getElementById("applicanteducid").value;
	var educ_description = document.getElementById("educ_description").value;
	
		$.ajax({
			url: '../saveupdateeduc',
			type: 'post',
			data: {applicanteducid:applicanteducid,educ_description:educ_description},
			success: function(response) {
				$('#savebutton').prop("disabled", true);
				//console.log(response);
				$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
				document.getElementById("closeeducbutton").click();
				//var lastid = JSON.parse(response);
				//window.location.href = "applicants/details/"+lastid;
				
			}
		});

}

function updatetraining(applicanttrainingid){
	
	$('#updatebuttontraining').removeAttr("disabled");
	//$('#updateproject').prop("disabled", false);    
	$('#savebuttontraining').prop("disabled", true);    

	$.ajax({
		url: '../gettraining',
		type: 'post',
		data: {applicanttrainingid : applicanttrainingid},
		success: function(response) {
			console.log(response);
			var data = JSON.parse(response);
			document.getElementById("applicanttrainingid").value = data.applicanttrainingid;
			document.getElementById("training_description").value = data.training_description;
						
			
			
		} 
	});
	
	
	
	
}

function saveupdatetraining(){
	
	    
	
	var applicanttrainingid = document.getElementById("applicanttrainingid").value;
	var training_description = document.getElementById("training_description").value;
	
		$.ajax({
			url: '../saveupdatetraining',
			type: 'post',
			data: {applicanttrainingid:applicanttrainingid,training_description:training_description},
			success: function(response) {
				$('#savebutton').prop("disabled", true);
				//console.log(response);
				$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
				document.getElementById("trainingclosebutton").click();
				//var lastid = JSON.parse(response);
				//window.location.href = "applicants/details/"+lastid;
				
			}
		});

}


function updatework(applicantworkid){
	
	$('#updateworkbutton').removeAttr("disabled");
	//$('#updateproject').prop("disabled", false);    
	$('#saveworkbutton').prop("disabled", true);    

	$.ajax({
		url: '../getworkdetails',
		type: 'post',
		data: {applicantworkid : applicantworkid},
		success: function(response) {
			console.log(response);
			var data = JSON.parse(response);
			document.getElementById("applicantworkid").value = data.applicantworkid;
			document.getElementById("work_description").value = data.work_description;
						
			
			
		} 
	});
	
	
	
	
}

function saveupdatework(){
	
	    
	
	var applicantworkid = document.getElementById("applicantworkid").value;
	var work_description = document.getElementById("work_description").value;
	
		$.ajax({
			url: '../saveupdatework',
			type: 'post',
			data: {applicantworkid:applicantworkid,work_description:work_description},
			success: function(response) {
				$('#savebutton').prop("disabled", true);
				//console.log(response);
				$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
				document.getElementById("workclosebutton").click();
				//var lastid = JSON.parse(response);
				//window.location.href = "applicants/details/"+lastid;
				
			}
		});

}


function updateskill(applicantskillid){
	
	$('#updateskillbutton').removeAttr("disabled");
	//$('#updateproject').prop("disabled", false);    
	$('#saveskillbutton').prop("disabled", true);    

	$.ajax({
		url: '../getskilldetails',
		type: 'post',
		data: {applicantskillid : applicantskillid},
		success: function(response) {
			console.log(response);
			var data = JSON.parse(response);
			document.getElementById("applicantskillid").value = data.applicantskillid;
			document.getElementById("skill_description").value = data.skill_description;
						
			
			
		} 
	});
		
}

function saveupdateskill(){
	
	    
	
	var applicantskillid = document.getElementById("applicantskillid").value;
	var skill_description = document.getElementById("skill_description").value;
	
		$.ajax({
			url: '../saveupdateskill',
			type: 'post',
			data: {applicantskillid:applicantskillid,skill_description:skill_description},
			success: function(response) {
				$('#savebutton').prop("disabled", true);
				//console.log(response);
				$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
				document.getElementById("skillclosebutton").click();
				//var lastid = JSON.parse(response);
				//window.location.href = "applicants/details/"+lastid;
				
			}
		});

}

function updateeligibility(applicanteligibilityid){
	
	$('#updateeligibilitybutton').removeAttr("disabled");
	//$('#updateproject').prop("disabled", false);    
	$('#saveeligibilitybutton').prop("disabled", true);    

	$.ajax({
		url: '../geteligibilitydetails',
		type: 'post',
		data: {applicanteligibilityid : applicanteligibilityid},
		success: function(response) {
			console.log(response);
			var data = JSON.parse(response);
			document.getElementById("applicanteligibilityid").value = data.applicanteligibilityid;
			document.getElementById("eligibility_description").value = data.eligibility_description;
						
			
			
		} 
	});
		
}

function saveupdateeligibility(){
	
	    
	
	var applicanteligibilityid = document.getElementById("applicanteligibilityid").value;
	var eligibility_description = document.getElementById("eligibility_description").value;
	
		$.ajax({
			url: '../saveupdateeligibility',
			type: 'post',
			data: {applicanteligibilityid:applicanteligibilityid,eligibility_description:eligibility_description},
			success: function(response) {
				$('#saveeligibilitybutton').prop("disabled", true);
				//console.log(response);
				$('#block-tabs-home').load(document.URL +  ' #block-tabs-home');
				document.getElementById("eligibilityclosebutton").click();
				//var lastid = JSON.parse(response);
				//window.location.href = "applicants/details/"+lastid;
				
			}
		});

}

function addtrainingbutton(){
	$('#savebuttontraining').prop("disabled",false);
	  
	$('#updatebuttontraining').prop("disabled", true);    
	document.getElementById("training_description").value = ""
}
function addworkbutton(){
	$('#saveworkbutton').prop("disabled",false);
	$('#updateworkbutton').prop("disabled", true);    
	document.getElementById("work_description").value = ""
}

function addskillbutton(){
	$('#saveskillbutton').prop("disabled",false);
	$('#updateskillbutton').prop("disabled", true);    
	document.getElementById("skill_description").value = ""
}
function addeligibilitybutton(){
	$('#saveeligibilitybutton').prop("disabled",false);
	$('#updateeligibilitybutton').prop("disabled", true);    
	document.getElementById("eligibility_description").value = ""
}


