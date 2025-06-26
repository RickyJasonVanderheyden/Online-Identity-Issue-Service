<?php require_once 'include/header.php'; ?>
 <div class="checkersbg">
<h1 class="heading"> Online Appointment Reservation </h1> <br>
<form class = "application" action="include/addReservation.php" method="POST">


<label> Full Name</label> <br>
<input type="text" name="name" id="name"   required> <br>
<label> Email </label> <br>
<input type="email" name="email" id="email" required> <br>
<label> Contact </label> <br>
<input type="tel" name="contact" id="contact" required> <br>
<Label>Select an Appointment  Date </labe> <br>
<input type="date" name="date" id="date" required> <br>
<input type="checkbox" name="consentR" id="consentR"  onclick="enableButton1()" > 
 <label for="consentR">I hereby declare that the information above are true, accurate and complete.</label> <br>
<input type="submit" name="button" id="button" value="Submit Reservation" disabled>
</form>

<br>

<img class= "res1" src="images/res.png" length=100 width=400><br>
<img class="cal2" src="images/cal2.png" length=400 width=400>

<p class="appInfo">Need more information regarding application; <a href="details.php">click here.</a></p>
 </div>
<?php require_once "include/footer.php"; ?>

