<!DOCTYPE html>
<html>
<head>
    <title>Process</title>
    <link href="Style/bootstrap.min.css" rel="stylesheet">
    <link href="Style/style2.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <form method="post" action="form.php">
        <center>
        <div id="image">
        <img src="logo.jpg">
        </div>
        </center>
            
            <h1>VISITOR</h1>
        <center>
            <div id="camera"></div><br>
        </center>  
            
    
 <?php

    if(isset($_POST['submit'])){
        $First = $_POST['firstname'];
        $Last = $_POST['lastname'];
        echo "$First".' '."$Last"."<br/>";
        $MobileNumber = $_POST['mobile'];
        echo $MobileNumber. "<br/>";
        $Gender = $_POST['gender'];
        echo $Gender. "<br/>" ;
        $Appointment = $_POST['appointment'];
        $Department = $_POST['department'];
        echo "$Appointment".' - '."$Department". "<br/>" ;
        $Date = $_POST['date'];
        echo $Date. "<br/>" ;
        $Time = $_POST['time'];
        echo $Time. "<br/>";
        echo "<img width='100' height='100' src='qrcode/php/qr_img.php?d=LEXICON..."
                . "$First "
                . "$Last ". '                '
                . "$Gender "
                . "$MobileNumber "
                . "$Appointment". ' - '. "$Department". '  '
                . "$Date "
                . "$Time'>"."<br/>";
    }
    
    ?>
         
        Södergatan 24, 211 34 Malmö<br>
        SWEDEN
          
                
 </form> 
</div>
<center>
<br><br>
<div class="hidden-print" id="btn">
         
         <button id="take_snapshots" class="btn-success">Snapshot</button>
         <button onClick="myButton()">REFRESH</button>
         <button titile="print screen" alt="print screen" onClick="window.print();"
                     target="_blank" style="cursor:pointer;" >PRINT</button>
         <a href= "form.php"><button id="back">BACK</button></a>
     
</div>
    
               
    <?php

    if (isset($_POST['submit'])) {
                $ok = true;
        if (!isset($_POST['firstname']) || $_POST['firstname'] === ''){
            $ok = false;
        }else{
            $First = $_POST['firstname'];
        }
        if (!isset($_POST['lastname']) || $_POST['lastname'] === ''){
            $ok = false;
        }else{
            $Last = $_POST['lastname'];
        }
        if (!isset($_POST['gender']) || $_POST['gender'] === ''){
            $ok = false;
        }else{
            $Gender = $_POST['gender'];
        }
        
        if (!isset($_POST['mobile']) || $_POST['mobile'] === ''){
            $ok = false;
        }else{
            $MobileNumber = $_POST['mobile'];
        }
        if (!isset($_POST['time']) || $_POST['time'] === ''){
            $ok = false;
        }else{
            $Time = $_POST['time'];
        }
         

        if ($ok) {
                $db = mysqli_connect('localhost', 'root', '', 'visitors');
                $sql = sprintf("INSERT INTO visitors (FirstName, LastName, Gender, Department, MobileNumber, 
                                                        Appointment, Time, Date) VALUES ('%s', '%s', '%s', '%s', 
                                                                                     '%s', '%s', '%s','%s'
                
                )",
                   $First = mysqli_real_escape_string($db, $_POST['firstname']),
                   $Last = mysqli_real_escape_string($db, $_POST['lastname']),
                   $Gender = mysqli_real_escape_string($db, $_POST['gender']),
                   $Department = mysqli_real_escape_string($db, $_POST['department']),
                   $MobileNumber = mysqli_real_escape_string($db, $_POST['mobile']),
                   $Appointment = mysqli_real_escape_string($db, $_POST['appointment']),
                   $Time = mysqli_real_escape_string($db, $_POST['time']),
                   $Date = mysqli_real_escape_string($db, $_POST['date']));
                   

                mysqli_query($db, $sql)  ;  
                mysqli_close($db);
                
            }
        
        
    }
    ?>
    
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="jpeg_camera/jpeg_camera_with_dependencies.min.js" type="text/javascript"></script>
    <script src="cam.js" type="text/javascript"></script>
    <script>
        function myButton(){
            location.reload();
        }
    </script>
</body>
</html>