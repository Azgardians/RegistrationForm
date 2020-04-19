<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: register.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: register.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./static/style.css"/>
    <title>Currency</title>
</head>
<body>

<div id="navbar">
  <a href="#default" id="logo">YeshWanth & Co.</a>
  <div id="navbar-right">
    <a class="active" href="index.php">Home</a>
    <a href="index.php?logout='1'" style="color: red;">Logout</a>
   
  </div>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <h3 style="margin: 0px auto;">Currency Converter below:</h3>
    <?php endif ?>
</div>


<div style="margin-top: 40px;">
    <div class="flip-card">
        <div class="flip-card-inner">
            <div class="flip-card-front">
                <img src="./static/img_avatar.jpg" alt="Avatar" style="width:300px;height:300px;">
            </div>
            <div class="flip-card-back">
                <p style="margin-top:20%;">
                    <label>Dollars</label>
                    <input id="inputDollars" type="number" placeholder="Dollar$"
                    oninput="priceConverter(this.value)" onchange="priceConverter(this.value)">
                </p>
                <p style="color: white;">Rupees: <span id="outputPrice"></span></p>
            </div>
        </div>
    </div>
</div>

		
</body>
</html>





<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementById("navbar").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementById("navbar").style.padding = "80px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
// for Converting the given denomination.
function priceConverter(valNum) {
  document.getElementById("outputPrice").innerHTML = valNum * 76.50;
}
</script>

</body>
</html>
