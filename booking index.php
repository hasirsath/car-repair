<?php
 include("db.php");
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Car Service Booking</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"     integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="booking style.css">
</head>
<body>
  <div class="container">
    <h2>Car Service Booking</h2>
    <form id="bookingForm" action="submit.html" method="post" onsubmit="return handleFormSubmission()">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" pattern="+91 [0-9]{10}" name="phone" placeholder="+91 00000-00000" required>
      </div>
      <div class="form-group">
        <label for="service">Service Type:</label>
        <select id="service" name="service" required>
          <option value="Oil Service">Oil Service ($200)</option>
          <option value="Engine Service">Engine Service ($350)</option>
          <option value="Tires Replacement">Tires Replacement ($500)</option>
          <option value="Diagnostic Test ($650)">Diagnostic Test ($650)</option>
          <!-- Add more service options as needed -->
        </select>
      </div>
      <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required>
      </div>
      <div class="form-group">
        <label for="time">Time:</label>
        <input type="time" id="time" name="time" required>
      </div>
      
      <div class="form-group">
        <label for="paymentQR">Payment QR Code:</label>
        <div id="paymentQR">
          <img src="qr.jpg" alt="Payment QR Code" width="200">
        </div>
      </div>
      <div class="form-group">
        <button type="submit">Book Now</button>
      </div>
    </form>
  </div>

  <div id="successMessage" class="popup-message">
    <p>Slot booked successfully! Redirecting...</p>
  </div>

  <script>
    function handleFormSubmission() {
      // Show success message
      document.getElementById("successMessage").style.display = "block";

      // Redirect after 3 seconds
      setTimeout(function() {
        window.location.href = "thx.php";
      }, 3000);

      // Prevent default form submission
      return false;
    }
    $("#bookingForm").on("submit",function(){
      var formdata=$("#bookingForm").serialize();

      $.ajax({
        url :"/car-repair/includes/process.php",
        method : "post",
        data : formdata,
        success :function(data){
          alert(data);
        }
      })
    })

  </script>
</body>
</html>
