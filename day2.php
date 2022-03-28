<!doctype html>
<html style ="background-color:darkcyan;">
<head>

	<style>

        

		.forms{
			border: 2px solid lightslategrey;
			width: 60%;
			height: 600px;	
			margin-left: 300px;
			text-align: left;
			background-color: mintcream;
		}	


	</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>


<h1 style="text-align: center;">welcome to student login</h1>

<div class="forms">
<form action="insert.php" method="post" style="margin-left:150px;font-size: 25px;margin-top: 60px;">

<label> id </label>       
<input type="text" name="id" size="15"/> <br> <br>
<!-- <label> firstname: </label>       
<input type="text" name="firstname:" size="15"/> <br> <br> -->

<label> firstname: </label>   
<input type="text" name="firstname" size="15"/> <br> <br>

<label> lastname: </label>       
<input type="text" name="lastname" size="15"/> <br> <br>

<label> 
course 
</label> 
<input type="text" name="course" size="15"/> <br> <br>
<!-- <select>
<option value="Course">Course</option>
<option value="BCA">BCA</option>
<option value="BBA">BBA</option>
<option value="B.Tech">B.Tech</option>
<option value="MBA">MBA</option>
<option value="MCA">MCA</option>
<option value="M.Tech">M.Tech</option>
</select> -->


<label> 
gender 
</label> 
<input type="text" name="gender" size="15"/> <br> <br>
<!-- <input type="radio" name="male"/> Male <br>
<input type="radio" name="female"/> Female <br>
<input type="radio" name="other"/> Other
<br>
<br> -->

<label> 
phone 
</label>

<input type="text" name="phone" size="10"/> <br>

 <input type="submit" value="Submit"> 



</script>
</form>


<script>
        $(document).ready(function() {
 
            $("#submit").click(function() {

 				var id = $("id").val();
                // var firstame = $("#firstname").val();
                var middlename = $("#firstname").val();
                var lastname = $("#lastname").val();
                var course = $("#course").val();
                var gender = $("#gender").val();
                var phome = $("#phone").val();
                
 
                if(id==''||firstname==''||lastname==''||course==''||gender==''||phone=='') {
                    alert("Please fill all fields.");
                    return false;
                }
 
        //         $.ajax({
        //             type: "POST",
        //             url: "store.php",
        //             data: {
        //                 firstname: firstname,
        //                 firstname: firstname,
        //                 lastname: lastname,
        //                 course: course,
        //                 gender: gender,
        //                 phone: phone
        //             },
        //             cache: false,
        //             success: function(data) {
        //                 alert(data);
        //             },
        //             error: function(xhr, status, error) {
        //                 console.error(xhr);
        //             }
        //         });
                 
        //     });
 
        // });
    </script>

        
</body>	
</html>