<?php
    include "connect_database.php";
    
    // submit form
    if(isset($_POST['submit'])){
        if($_POST['id'] == ""){
            $name       = $_POST['name'];
            $email      = $_POST['email'];
            $asal       = $_POST['asal'];
            $nohp       = $_POST['nohp'];
            $subject    = $_POST['subject'];
            $message    = $_POST['message'];

            $query = "INSERT INTO `messages`(`nama`, `email`, `judul`, `instansi`,`no_hp`, `pesan`) VALUES ('".$name."','".$email."','".$subject."','".$asal."','".$nohp."','".$message."')";
            $result = mysqli_query($conn,$query);

            if($result){

                header('Location: index.html');

            } else{

                echo("<br>Input data is fail");
                echo mysqli_error($conn);

            }
        }
    }
?>