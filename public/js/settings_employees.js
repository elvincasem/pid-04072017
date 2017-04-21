function saveemployee(){
	
	$('#savebutton').prop("disabled", true);    
	var empno = document.getElementById("empno").value;
	var lname = document.getElementById("lname").value;
	var fname = document.getElementById("fname").value;
	var mname = document.getElementById("mname").value;
	var extension = document.getElementById("extension").value;
	var designation = document.getElementById("designation").value;
	
	$.ajax({
		url: 'employees/saveemployee',
		type: 'post',
		data: {empno: empno,lname:lname,fname:fname,mname:mname,extension:extension,designation:designation},
		success: function(response) {
			//console.log(response);
			//location.reload();
			var lastid = JSON.parse(response);
			window.location.href = "employees/details/"+lastid;
			
		}
	});
	
}

function deleteemployee(id){
	
	var r = confirm("Are your sure you want to delete this employee?");
    if (r == true) {
        //alert ("You pressed OK!");
		var person = prompt("Please enter Administrator Password");
		if (person =='superadmin') {
		$.ajax({
                    url: 'employees/deleteemployee',
                    type: 'post',
                    data: {eid: id},
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

function updateemployee(id){
	
	//$('#savebutton').prop("disabled", true);    
	var lastname = document.getElementById("lastname").value;
	var firstname = document.getElementById("firstname").value;
	var middlename = document.getElementById("middlename").value;
	var extension = document.getElementById("extension").value;
	var dateofbirth = document.getElementById("dateofbirth").value;
	var placeofbirth = document.getElementById("placeofbirth").value;
	if(document.getElementById("genderm").checked==true){
		var gender = "Male";
	}if(document.getElementById("genderf").checked==true){
		var gender = "Female";
	}
	if(document.getElementById("civilstatuss").checked==true){
		var civilstatus = "Single";
	}if(document.getElementById("civilstatusm").checked==true){
		var civilstatus = "Married";
	}
	var citizenship = document.getElementById("citizenship").value;
	var height = document.getElementById("height").value;
	var weight = document.getElementById("weight").value;
	var bloodtype = document.getElementById("bloodtype").value;
	var mobileno = document.getElementById("mobileno").value;
	var email = document.getElementById("email").value;
	var barangay = document.getElementById("barangay").value;
	var towncity = document.getElementById("towncity").value;
	var province = document.getElementById("province").value;
	var zipcode = document.getElementById("zipcode").value;
	var datehired = document.getElementById("datehired").value;
	
	

	
	$.ajax({
		url: '../updateemployee',
		type: 'post',
		data: {eid:id,lastname:lastname,firstname:firstname,middlename:middlename,extension:extension,dateofbirth:dateofbirth,placeofbirth:placeofbirth,gender:gender,civilstatus:civilstatus,citizenship:citizenship,height:height,weight:weight,bloodtype:bloodtype,mobileno:mobileno,email:email,barangay:barangay,towncity:towncity,province:province,zipcode:zipcode,datehired:datehired},
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

