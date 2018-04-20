+$key=0;
+$status_data = "";
+$.ajax({
+dataType: "json",
+url: "http://www.cs.colostate.edu/~ct310/yr2018sp/master.json",
+data: {},
+success : function(data) {
+
+$student_data = "";
+$.each(data, function(key, value) {
+	
+	$.ajax({
+	$dataType: "json",
+	$contentType: "application/json",
+	url: "http://www.cs.colostate.edu/~"+value.eid+"/ct310/index.php/federation/status",
+	$data: {},
+	error: function(XMLHttpRequest, textStatus, errorThrown) { 
+		$key++;
+      	$("#status"+$key).text("Error");
+	},
+	success : function(data, textStatus, xhr) {
+	$key++	;
+	try{
+		$status_data = "";
+		if (xhr.status == 200) {
+			if(typeof data =="object")
+			{
+			 $("#status"+$key).text(data.status);
+			}
+			else
+			{
+			 // Response is HTML
+			 $data = JSON.parse(data);
+			 $("#status"+$key).text($data.status);
+			}
+		} 
+		else {
+			$("#status"+$key).text("Error"+$key);
+		}
+	}
+	catch(e)
+	{
+		$("#status"+$key).text("Error");
+	}
+
+	$('#status_data').append(status_data);
+}
+});
+	
+	student_data += '<tr>';
+	student_data += '<td>' + value.team+'</td>';
+	student_data += '<td>' + value.nameShort+'</td>';
+	student_data += '<td>' + value.nameLong+'</td>';
+	student_data += '<td>' + value.eid +'</td>';
+	student_data += '<td id = status'+key+'></td>'; 
+});
+$('#student_data').append(student_data);
+}
+});
+ 