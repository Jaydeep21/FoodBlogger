<?php
    session_start();
    include('connection.php');
if(isset($_GET['error'])){
    echo "<script>alert(".$_GET['error'].");</script>";
}
if (isset($_POST['submit'])){
    
    function CheckCaptcha($userResponse) {
        $fields_string = '';
        $fields = array(
            'secret' => '6Ld7mXQUAAAAAFZhouVhfgZ8vpeSDctqIp0UgnVF',
            'response' => $userResponse
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);
        $res = curl_exec($ch);
        curl_close($ch);
        return json_decode($res, true);
    }
    // Call the function CheckCaptcha
    $result = CheckCaptcha($_POST['g-recaptcha-response']);
    if ($result['success']) {
        $fname=$_POST['fname'];
    $lname=mysqli_real_escape_string($conn,$_POST['lname']);
    $email=mysqli_real_escape_string($conn,$_POST['emailid']);
    $contact=mysqli_real_escape_string($conn,$_POST['phone']);
    $dob=mysqli_real_escape_string($conn,$_POST['dob']);
    $gender=mysqli_real_escape_string($conn,$_POST['gender']);
    
    $_SESSION['tfname'] = $fname;
    $_SESSION['tlname'] = $lname;
    $_SESSION['temailid'] = $email;
    $_SESSION['tphone'] = $contact;
    $_SESSION['tdob'] = $dob;
    $_SESSION['tgender'] = $gender;
    
    
    
    $a=rand(1000,1000000);
    $_SESSION['random']=$a;
        
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
            $mail->Password=;
            
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
	
    } else {
        // If the CAPTCHA box wasn't checked
       echo '<script>alert("Error Message");</script>';
    }
}
else{
    echo"gadbad";
}
?>
