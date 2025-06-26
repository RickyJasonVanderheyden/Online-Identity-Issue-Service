<?php require_once 'include/header.php'; ?>


<div style="display:flex;">
     <div class="col">
     <h1 class="heaading"> Contact Us</h1>
<form class = "contactUs" action="" method="POST">
<p>To contact us through email please fill the below form and we will contact you at the earliest notice.</p>
<label>Name </label><br>
<input type="text" name="name" id="name5" placeholder="Enter your name " required> <br>
<label>Email</label><br>
<input type="email" name="email" id="email5" placeholder="useremail@email.com" required> <br>
<label>Contact No </label> <br>
<input type="tel" name="contact" id="contact5" placeholder="Enter ur phone number" required > <br>
<textarea id="textarea" name="textarea" rows="10" cols="90"></textarea>
</form>
      </div>

      <div id="contactusinfo">
  <div class="col">
  <h1 id="help" >HELP DESK</h1>
  <p > Open time :(09.00 am - 06.00 pm Monday-Friday) <br> <br> <hr>
     Contact No :  0113450954/0705469342 <Br> <br> <br> <hr> <br>
      Email :help@idissuing.com <Br> <br> <br>
  </p>
  </div>
</div>


</div>
<br>
<input type="submit" name="contactsubmit"   id="contactsubmit" required > <br>
<?php require_once "include/footer.php"; ?>

