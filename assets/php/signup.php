<?php
    session_start();
if(isset($_GET['error'])){
    echo "<script>alert(".$_GET['error'].");</script>";
}
if (isset($_POST['submit'])){
    
    $code=$_SESSION['captcha'];
    $user=$_POST['chek'];
    
    if($code!=$user){
        header("location:http://localhost/FoodBlogger/modules/signup.php?error=InvalidCaptcha");
    }
    else{    
    
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['emailid'];
    $contact=$_POST['phone'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    
    $_SESSION['tfname'] = $fname;
    $_SESSION['tlname'] = $lname;
    $_SESSION['temailid'] = $email;
    $_SESSION['tphone'] = $contact;
    $_SESSION['tdob'] = $dob;
    $_SESSION['tgender'] = $gender;
    
    $dbpass="jaydeep";
    $dbhost="localhost";
    $dbname="foodblog";
    $dbuser="root";
    
    $a=rand(1000,1000000);
    $_SESSION['random']=$a;
        
    $conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
    if(!$conn){
        die('Connection Error'.mysqli_connect_error());
        }
    $SELECT="SELECT email FROM signup where email='$email'";
            
        if(!mysqli_query($conn,$SELECT)){
            echo"<script>alert('Select query error')</script>";
            
        }
        else{
            if(mysqli_num_rows(mysqli_query($conn,$SELECT))>0){
                echo"<script>prompt('Emailid is already taken')</script>";
                header("location:http://localhost/FoodBlogger/modules/signup.php");
            }
        
            else{
                require'../phpmailer/PHPMailerAutoload.php';
            $mail=new PHPMailer(true);
            
            $mail->isSMTP();
            $mail->Host='smtp.gmail.com';
            $mail->Port=587;
            $mail->SMTPAuth=true;
            $mail->SMTPSecure='tls';
            $mail->Username='jaydeepdharamsey21@gmail.com';
            $mail->Password='';
            
            $mail->setFrom('jaydeepdharamsey21@gmail.com');
            $mail->addAddress($_POST['emailid']);
            $mail->addReplyTo('jaydeepdharamsey21@gmail.com');
            
            $mail->isHTML(true);
            $mail->Subject='Email verification';
            $mail->Body='<h1 allign="center">Hello '.$_POST['fname'].' thank you for verifying.Your verifying code is '.$a.'</h1>';
            
            if(!$mail->send()){
                $result="Something went wrong.Please Try again";
                echo $result;
            }
            else{
                header("Location: http://localhost/FoodBlogger/modules/signup1.php");
            }
            }
        }
        }
    
    
}
else{
    echo"gadbad";
}
?>