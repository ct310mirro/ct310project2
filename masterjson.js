$key=0;


$.ajax({	
dataType: "json",
url: "http://www.cs.colostate.edu/~ct310/yr2018sp/master.json",
data: {}
})
.then(function(data) {

$.each(data, function(key, value) {
	$status_data = "";
	$.ajax({
	$dataType: "json",
	$contentType: "application/json",
	url: "http://www.cs.colostate.edu/~"+value.eid+"/ct310/index.php/federation/status",
})
.then(function(data, textStatus, xhr) {
	//$key++;
	try{
	 
		if (xhr.status == 200) {
			if(typeof data =="object")
			{
			if (data.status == "open") {
			$("#status"+key).text(data.status).css({"background-color": "green", "border-style": "groove", "border-color": "black", "border-width": "1px"});
		 }
			else {
		 $("#status"+key).text(data.status).css({"background-color": "red", "border-style": "groove", "border-color": "black", "border-width": "1px"});
		 }
			// $("#status"+key).text(data.status);
	
			}
			else
			{
			 // Response is HTML
			 	 
			 $data = JSON.parse(data);
			 	if ($data.status == "open") {
			 $("#status"+key).text($data.status).css({"background-color": "green", "border-style": "groove", "border-color": "black", "border-width": "1px"});
		 }
			else {
 $("#status"+key).text($data.status).css({"background-color": "red", "border-style": "groove", "border-color": "black", "border-width": "1px"});
		 }
			 //$("#status"+key).text($data.status);
		
			}
			
		}
		else {
	
				$("#status"+key).text("Error").css({"background-color": "yellow", "border-style": "groove", "border-color": "black", "border-width": "1px"});
				
	}
}
	catch(e)
	{
		$("#status"+key).text("Error").css({"background-color": "yellow", "border-style": "groove", "border-color": "black", "border-width": "1px"});
		
	}

	
}).fail(function(xhr){
	$("#status"+key).text("Error").css({"background-color": "yellow", "border-style": "groove", "border-color": "black", "border-width": "1px"});
});
	
	student_data += '<tr>';
	student_data += '<td>' + value.team+'</td>';
	student_data += '<td>' + value.nameShort+'</td>';
	student_data += '<td>' + value.nameLong+'</td>';
	student_data += '<td>' + value.eid +'</td>';
	student_data += '<td id = status'+key+'></td>'; 
});
$('#student_data').append(student_data);
})
.fail(function(xhr) {
	console.log('error',xhr);
});

