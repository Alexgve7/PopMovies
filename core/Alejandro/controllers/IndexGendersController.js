$(document).ready(function(){

        $(function() {
            console.log( "ready!" );
        });

        $('#button').click(function() { 
            var name=$("#name").val();
            $.ajax({
                url:'http://localhost:3000/core/Genders/insert.php',
                method:'POST',
                data:{
                    name:name,
                },
                success:function(data, status){
                alert(data);

                setTimeout(function(){// wait for 5 secs(2)
                    location.reload(); // then reload the page.(3)
               }, 1000); 
            }
            });
         });

         $('#GetGenders').click(function() { 
            $.ajax({
                url:'http://localhost:3000/core/Genders/SelectGenders.php',
                method:'POST',
                datatype:"json",
                success:function(data, status){
                alert(data);
                
                }
            });
         });
  });