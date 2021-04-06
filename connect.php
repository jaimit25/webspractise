<?php
 $name=$_POST['name'];
 $heading=$_POST['heading'];
 $message=$_POST['message'];



        if(!empty($name)|| !empty($heading)|| !empty($message)){
            $host="localhost";
            $dbUsername="root";
            $dbPassword="";
            $dbname="practise";
            $conn =new mysqli($host,$dbUsername,$dbPassword,$dbname);
            if(mysqli_connect_error()){
                die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
            }
            else{            
                $SELECT = "SELECT name From details Where name = ? Limit 1";
                $INSERT = "INSERT Into register(name,heading,message) values(?,?,?)";
                $stmt = $conn->prepare($SELECT);
                $stmt -> bind_param("s",$name);
                $stmt->execute();
                $stmt->bind_result($name);
                $stmt->store_result();
                $stmt->store_result();
                $stmt->fetch();
                $rnum = $stmt->num_rows;
                if ($rnum==0) {
                $stmt->close();
                $stmt = $conn->prepare($INSERT);
                $stmt->bind_param("sss", $name, $heading, $message);
                $stmt->execute();
                echo "New record inserted sucessfully";
                } else {
                echo "Someone already register using this email";
                }
                $stmt->close();
                $conn->close();


            }
        }
        else{
            echo "All Fields Are Required!";
            die();
        }
?> 