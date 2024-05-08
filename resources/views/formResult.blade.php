<?php 
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    $studentName = $_POST['studentName'];
    $studentAge = $_POST['studentAge'];
    
}
?>
<!DOCTYPE html>
<html>
<body>

<h4>Student Name: {{$studentName}}</h4>
<br>
<h4>Student Age:{{studentAge}}</h4>

</body>
</html>