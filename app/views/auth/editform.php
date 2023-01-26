<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editform</title>
    <link rel="stylesheet" href="<?php echo BASE_URL. PUBLIC_DIR?>/src/css/editform.css">
</head>
<body>
    <?php       
   
        $name = $_POST["name"];
        $emailadd = $_POST["emailadd"];
        $add = $_POST["add"];
        $contact = $_POST["contact"];
        $date = $_POST["date"];
        $theme = $_POST["theme"];
        echo "<br><br>
        <form action='editreservation' method='post' align='center'><br>

            <b>&nbsp;&nbsp;Name: </b><input type = 'text' value='".$name."' name='name'>
            <b>&nbsp;&nbsp;Email Address: </b><input type = 'text' value='".$emailadd."' name='emailadd'>
            <b>&nbsp;&nbsp;Address: </b><input type = 'text' value='".$add."' name='add'>
            <b>&nbsp;&nbsp;Contact: </b><input type = 'text' value='".$contact."' name='contact'>
            <b>&nbsp;&nbsp;Date: </b><input type = 'date' value='".$date."' name='date'><br>
            <b>&nbsp;&nbsp;Theme Details: </b><input type = 'text' value='".$theme."' name='theme'>
            <input type= 'submit'>

        </form>
        
    ";?>
</body>
</html>
