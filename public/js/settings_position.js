function saveposition(){
	
	$('#savesupplierbutton').prop("disabled", true);    
	var position_designation = document.getElementById("position_designation").value;
	
	
	$.ajax({
		url: 'position/saveposition',
		type: 'post',
		data: {position_designation: position_designation},
		success: function(response) {
			//console.log(response);
			location.reload();
			
		}
	});
	
}

function deleteposition(id){
	
	var r = confirm("Are your sure you want to delete this position?");
    if (r == true) {
        //alert ("You pressed OK!");
		var person = prompt("Please enter Administrator Password");
		if (person =='superadmin') {
		$.ajax({
                    url: 'position/deleteposition',
                    type: 'post',
                    data: {positionid: id},
                    success: function(response) {
						console.log(response);
						//location.reload();
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