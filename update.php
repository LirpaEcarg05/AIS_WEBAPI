<?php  header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<!--====form section start====-->

<div class="user-detail">
    <h2>Insert User Data</h2>
    <p id="msg"></p>
    <form action="http://192.168.0.28/AIS_WEBAPI/php-script.php" method="post">
        <input class="fullname" type="hidden" value="<?php echo $_GET["ID"]?>" name="id" required>
          <label>Full Name</label>
          <input class="fullname" type="text" placeholder="Enter Full Name" name="fullname" value="<?php echo $_GET["FullName"]?>" required>
          <label>Email Address</label>
          <input class="email" type="email" placeholder="Enter Email Address" name="emailAddress" value="<?php echo $_GET["EmailAddress"]?>" required>
          <label>City</label>
          <input class="city" type="city" placeholder="Enter Full City" name="city" value="<?php echo $_GET["City"]?>" required>
          <label>Country</label>
          <input class="country" type="text" placeholder="Enter Full Country" name="country" value="<?php echo $_GET["Country"]?>" required>
          <button type="submit" class="updateButton" name="updateBTN">Update</button>
    
        </div>
        </form>
</div>






<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="./ajax-script.js"></script>
</body>
</html>