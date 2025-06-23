

<!-- partial:index.partial.html -->
<?php
 include("db.php");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <title> login Form </title>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"     integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #f8f9fa;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}



form{
    height: 520px;
    width: 400px;
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #0b0505;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h2{
    color: #ff7200;
    font-weight: 700;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    font-weight: bold;
    color: #333;
    margin-top: 30px;
    font-size: 16px;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    border: 1px solid #ced4da;
    border-radius: 5px;
    background-color: #f8f9fa;
    transition: border-color 0.3s ease;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #0b0505;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ff7200;
    color: #ffffff;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}

    </style>
</head>
<body>
    
    <form method="post" id="login_form" onsubmit="return true" autocomplete="off">
        <h3>Login Here</h3>

        <label for="username">Email</label>
        <input type="email" name="lemail" placeholder="Email" id="lemail">

        <label for="password">Password</label>
        <input type="password" name="lpassword" placeholder="Password" id="lpassword">

        <button type="submit">login</button>
        
    </form>
</body>
<script >

function validateForm() {
          // Get all required input fields
          var requiredFields = document.querySelectorAll('input[required]');
        
          // Check if any required fields are empty
          for (var i = 0; i < requiredFields.length; i++) {
            if (requiredFields[i].value === '') {
              alert('Please fill in all required fields.');
              return false; // Prevent form submission
            }
          }
       
          // If all required fields are filled, allow submission
          return true;
       
        }
      // Attach the validation function to the form's submit event
      document.getElementById('login_form').addEventListener('submit', function(event) {
          if (!validateForm()) {
            event.preventDefault(); // Prevent the default form submission behavior
          }
        });  
   
$(document).ready(function(){
    var DOMAIN = "/car-repair";

//for registration 

        $("#login_form").on("submit",function(){


            var form_data = $("#login_form").serialize();
            $.ajax({
                url: DOMAIN + "/includes/user.php",
                method : "POST",
                data : form_data,
                success : function(data){
                  console.log("Server Response: ", data.trim()); 
                  alert("Response: " + data.trim());
                    if(data.trim() == "LOGIN_SUCCESS" ){
                        window.location.href = DOMAIN + "/home.php";
                    }else if (data.trim() === "NOT_REGISTERED") {
                    alert("User not registered. Please sign up.");
                } else if (data.trim() === "PASSWORD_NOT_MATCHED"){
                    alert("Incorrect password.");
                }
                 else{ 
                    alert("Login failed: " + data); // Display any other errors from the server
                     }
                error: myfunction(xhr, status, error)
                {
                console.log("AJAX Error:", status, error);
                alert("AJAX Request Failed: " + status + " - " + error);
                 }
                }
            });
        
        });

})

</script>
</html>