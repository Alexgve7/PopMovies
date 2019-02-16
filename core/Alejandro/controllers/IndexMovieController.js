$(document).ready(function(){
        
      $("#button").click(function() { 
        var name=$("#name").val();
        $.ajax({
            url:'http://localhost:3000/core/Movies/insert.php',
            method:'POST',
            data:{
                name:name,
            },
           success:function(data){
               alert(data);
               console.log(data);
           }
        });
          
      });
  });