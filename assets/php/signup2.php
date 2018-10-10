<?php
        session_start();   
        $fname=$_SESSION['tfname'];
        $lname=$_SESSION['tlname'];
        $email=$_SESSION['temailid'];
        $dob=$_SESSION['tdob'];
        $phone=$_SESSION['tphone'];
        $gender=$_SESSION['tgender'];
        $pass=$_POST['pass'];

        $dbpass="jaydeep";
        $dbhost="localhost";
        $dbname="foodblog";
        $dbuser="root";
        
        $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
        if(!$conn){
            die('Connection Error'.mysqli_connect_error());
        }
        $SELECT="SELECT email FROM signup where email='$email' Limit 1 ";
        $INSERT="insert into signup(fname,lname,email,phone,dob,gender,password) values('$fname','$lname','$email','$phone','$dob','$gender','$pass')";
        echo $INSERT;
                if(!mysqli_query($conn,$INSERT)){
                    echo"Not Inserted";
                }
        if(!mysqli_query($conn,$SELECT)){
                    echo"Select query error";
            }
        else{
            if(mysqli_num_rows(mysqli_query($conn,$SELECT))>1){
                echo"Emailid is already taken";
            
            }
             else{
                echo"Inserted successfully!!!";
                 $_SESSION['password']=$pass;
                 $_SESSION['fname']=$fname;
                 $_SESSION['lname']=$lname;
                 $_SESSION['gender']=$gender;
                 $_SESSION['email']=$email;
                 $_SESSION['dob']=$dob;
                 $_SESSION['phone']=$phone;
                 
                 
                header("Location: http://localhost/FoodBlogger/index.php");
            }
        }
?>