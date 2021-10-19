<?php
if(isset($_POST['name'])){
$server ="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con)
{
    die("connection to this database failed due to ".mysqli_connect_error());

}


$name=$_POST['name'];
$gender =$_POST['gender'];
$age=$_POST['age'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$desc=$_POST['desc'];
$sql ="INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());
";
echo $sql;
if($con->query($sql)==true)
{
    echo " succesfully inserted";
}
else
{
    echo "error $sql<br> $con->error";
}
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>
<body>

     <img class="bg" src="beach.jfif" alt="pec-chandihgarh">
 
    <div class="container">
        <h1>welcome to trip form</h1>
        <p>enter your details of trip for confiramtion</p>
        <p style="color: green;">thanks for submitting form</p>
        <form action="index.php" method="post">
            
            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="age" name="age" id="age" placeholder="enter your age">
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <input type="email" name="email" id="email" placeholder="enter your email">
            <input type="phone" name="phone" id="phone" placeholder="enter your phone">
            <textarea type="desc" name="desc" id="desc" cols="30" rows="10" placeholder="enter any other information here"></textarea>
            <button style="background-color: rgb(197, 141, 197);" class="btn1">submit</button>
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>