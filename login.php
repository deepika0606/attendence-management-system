'<?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST["username"];
    $password =$_POST["password"];

    $conn = new mysqli('localhost','root','','contact');
    if($conn->connect_error){
      die("connection failed:".$conn->connect_error);
  }
  else{
    $stmt = $conn->prepare("insert into feedback(username,password) values(?,?)");
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    echo "registration successfull";  
    $stmt->close();
    $conn->close();
  }
}
?>