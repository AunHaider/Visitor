<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>VISITOR FORM</title>
    <link href="Style/bootstrap.min.css" rel="stylesheet">
    <link href="Style/style.css" rel="stylesheet">
</head>
<body>
<div class="container">
  <h1>VISITOR MANAGEMENT TAG!</h1>
  
    
     <form method="post" action="process.php" autocomplete="" >
     <center>
     <img src="logo.jpg">
     </center>
       
     <h2>VISITORS </h2>
     
<center>
           
    <div id="camera"></div><br>
               

        
    <input type="text" name="firstname" value= "First Name">
    <input type="text" name="lastname" value= "Last Name"><br><br>
    <input type="number" name="mobile" value= "Mobile Number"><br><br>
    <input type="radio" name="gender" value="Female"><b>Female</b>
    <input type="radio" name="gender" value="Male"><b>Male</b><br><br>
    <select name="appointment" dropdown="">
        <option>Please Select</option>
        <option>Name 1</option>
        <option>Name 2</option>
        <option>Name 3</option>
    </select>
        <input type="text" name="department" value= "Department"><br><br>
    <b>Visiting Time </b>
    <input type="date" name="date" value="date">
    <input type="time" name="time"  value="time"><br><br>
    <div id="btn">
    <button type="submit" name="submit" id="generate" value="generate">SUBMIT</button>
    </div>
</form>
    
</div>


</div>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="jpeg_camera/jpeg_camera_with_dependencies.min.js" type="text/javascript"></script>
    <script src="cam.js" type="text/javascript"></script>
     </body>
</html>
     

        


