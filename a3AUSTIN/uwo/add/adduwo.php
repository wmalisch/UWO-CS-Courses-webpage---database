<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ADD UWO COMPLETE</title>
</head>
<body>
<?php
    include '../../header.php';
    include '../../connectdb.php';
    echo "<hr>";
    $number = $_POST["courseNumber"];
    $name = $_POST["courseName"];
    $weight = $_POST["weight"];
    $suffix = $_POST["suffix"];
    $query = "INSERT INTO westernCourses VALUES('cs$number','$name','$weight','$suffix');"; 
    if(!mysqli_query($connection,$query)){
        echo "<h1>Add Error!</h1>";
        echo mysqli_error($connection);
        echo "<form action='adduwocourse.php' method='post'>";
        echo "<input type='submit' value='Retry Entering Value'>";
        echo"</form>";
        die("Error while trying to update UWO course " . mysqli_error($connection));
    }else{
        echo "<h2>Course Added!</h2>"
    }
    mysqli_close($connection);
?>
</body>
</html>