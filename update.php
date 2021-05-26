<?php  header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
body{
  background-image: url(https://thumbs.gfycat.com/HalfThunderousFlyingfox-size_restricted.gif);
  background-repeat: no-repeat;
  background-size: cover;
  font-family: "Lucida Console", "Courier New", monospace;
}
</style>
</head>
<body>
<!--====form section start====-->
<br><br><br>
<center>
<div class="user-detail">
    <h1>Update User Data</h1>
    <br><br>
    <p id="msg"></p>
        <input class="id" type="hidden" value="<?php echo $_GET["ID"]?>" name="id" required>
          <label>Full Name</label>
          <input class="fullname" type="text" placeholder="Enter Full Name" name="fullname" value="<?php echo $_GET["FullName"]?>" required>
          <label>Email Address</label>
          <input class="email" type="email" placeholder="Enter Email Address" name="emailAddress" value="<?php echo $_GET["EmailAddress"]?>" required>
          <label>City</label>
          <input class="city" type="city" placeholder="Enter Full City" name="city" value="<?php echo $_GET["City"]?>" required>
          <label>Country</label>
          <input class="country" type="text" placeholder="Enter Full Country" name="country" value="<?php echo $_GET["Country"]?>" required>
          <button type="button" class="updateButton" name="updateBTN">Update</button>
    
        </div>
</div>
</center>







<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="./ajax-script.js"></script>
</body>
</html>