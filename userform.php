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
    
          <label>Full Name</label>
          <input class="fullname" type="text" placeholder="Enter Full Name" name="fullName" required>
          <label>Email Address</label>
          <input class="email" type="email" placeholder="Enter Email Address" name="emailAddress" required>
          <label>City</label>
          <input class="city" type="city" placeholder="Enter Full City" name="city" required>
          <label>Country</label>
          <input class="country" type="text" placeholder="Enter Full Country" name="country" required>
          <button type="button" class="button">Submit</button>
    
        </div>
</div>

<div class="container">
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Fullname</th>
      <th scope="col">Email Address</th>
      <th scope="col">City</th>
      <th scope="col">Country</th>
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