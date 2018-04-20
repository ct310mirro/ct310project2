
    <script> 

    $(document).ready(function()
{
    var eidArr = ["sbhuju"];
    var statusData = [];

    $.ajax({
    url:'https://www.cs.colostate.edu/~ct310/yr2018sp/master.json',
    dataType: 'json',
    type:'POST',
    cache: false,
    success: function(data) {
      // console.log(data.length);
      
       for (i = 0; i < data.length; i++){
           var f = $(data)[i];
           if (f.eid !== null || f.eid != ""){
        eidArr.push(f.eid);
           }
       // document.write(f.eid);
        
       }
       //document.write(eidArr);
    }
    
    }).done( 
        function() {
 
            document.write(eidArr.length);
            document.write(eidArr);
            document.write("<table>");
    for (i = 0; i < eidArr.length; i++){
        if (eidArr[i] !== null || eidArr[i] !== ""){
        var ur = "https://www.cs.colostate.edu/~" + eidArr[i] + "/ct310/index.php/federation/status";
        //document.write(eidArr[i] + " ");
   
    $.ajax({   
    url: ur,
    dataType: 'json',
    type:'POST',
    cache: false,
    success: function(data) {
     //console.log(data.status);
     var Stt = data.status;
     //if (data.status !== "open" || data.status !== "closed"){
    //     Stt = "Bad";
    // }

     statusData.push(Stt);
     document.write("<tr>");
     document.write(Stt);
     document.write(" ");
     document.write("</tr>");
    }
    
    });
    }
    }
    document.write("</table>");

    }).done(function() {
       
document.write(statusData);
  });

  });
   
    </script>
