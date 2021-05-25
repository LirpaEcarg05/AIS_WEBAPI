<?php  header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<!--====form section start====-->

<div class="user-detail">
    <h2>Insert User Data</h2>
    <p id="msg"></p>
        <input class="id" type="text" value="<?php echo $_GET["ID"]?>" name="id" required>
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

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>






<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="./ajax-script.js"></script>
</body>
</html>