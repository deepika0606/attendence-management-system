'<?php
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST["username"];
    $email =$_POST["email"];
    $password=$_POST["password"];

    $conn = new mysqli('localhost','root','','contact');
    if($conn->connect_error){
      die("connection failed:".$conn->connect_error);
  }
  else{
    $stmt = $conn->prepare("insert into register(name,email,message) values(?,?,?)");
    $stmt->bind_param("sss",$username,$email,$password);
    $stmt->execute();
    echo "registration successfull";  
    $stmt->close();
    $conn->close();
  }
}
?>