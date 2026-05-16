<?php
include 'db.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $course = $_POST['course'];

    mysqli_query($conn, "INSERT INTO students(name,email,course)
    VALUES('$name','$email','$course')");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
</head>
<body>

<h2>Add Student</h2>

<form method="POST">
    <input type="text" name="name" placeholder="Enter Name" required><br><br>
    <input type="email" name="email" placeholder="Enter Email" required><br><br>
    <input type="text" name="course" placeholder="Enter Course" required><br><br>

    <button type="submit" name="submit">Add Student</button>
</form>

</body>
</html>
