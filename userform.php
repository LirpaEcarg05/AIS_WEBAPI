<?php  header("Access-Control-Allow-Origin: *");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>
.header{
  margin-left: 100px;
  margin-right: 100px;
  background-color: whitesmoke;
  /* color:white;
  background-image: url(https://cutewallpaper.org/21/gif-black-background/Pin-on-Super-gif.gif);
  background-repeat: no-repeat;
  background-size: cover; */
}
body{
  font-family: "Lucida Console", "Courier New", monospace;
  background-image: url(https://i.pinimg.com/originals/91/5f/cc/915fcca34bb9fedcfc67659116d5ede3.gif);
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
</head>
<body>

<br><br>
<!--====form section start====-->
<!-- <center> -->
<div class="user-detail header">
<center>
    <h1>Insert User Data</h1>
    </center>
    <p id="msg"></p>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
          <label>Full Name</label>
          <input class="fullname" type="text" placeholder="Enter Full Name" name="fullName" required>
          &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
          <label>Email Address</label>
          
          <input class="email" type="email" placeholder="Enter Email Address" name="emailAddress" required>
          <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label>City</label>
          <input class="city" type="city" placeholder="Enter Full City" name="city" required>
          &nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label>Country</label>

          <input class="country" type="text" placeholder="Enter Full Country" name="country" required>
          <!-- &nbsp;&nbsp; -->
          <button type="button" class="button" style="margin-left:20px">Submit</button>
    
        </div>
</div>
<!-- </center> -->

<br>
<div class="container">
<center>
<h1 style="background-color: whitesmoke">USER TABLE</h1>
</center>
<table class="table table-dark">
  <thead>
    <tr>
      <!-- <th scope="col">id</th> -->
      <th scope="col">Fullname</th>
      <th scope="col">Email Address</th>
      <th scope="col">City</th>
      <th scope="col">Country</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody id="tableBody">
    
  </tbody>
</table>

</div>





<!--====form section start====-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="./ajax-script.js"></script>
</body>
</html>