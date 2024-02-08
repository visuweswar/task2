<?php

    if(isset($_POST))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];

        $to='visuweswarrajesh@gmail.com';

        $subject='Form Submission';
        $message="Name : ".$name."\n"."Email : ".$email."\n"."Subject : ".$subject."\n"."Message : ".$message;
        $header="Form : ".$email;

        if(mail($to,$subject,$message,$header))
        {
            echo"<h1>Sent Successfully Thank you"."".$name.",we will contact you shortly!</h1>";
        }
        else{
            echo"Something went wrong!";
        }
    }

?>