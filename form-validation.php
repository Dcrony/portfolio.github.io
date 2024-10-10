<?php
    if(isset($_POST['submit'])){
        $name= $_POST['sumbit'];
        $email= $_POST['email'];
        $website = $_POST['website'];
        $graphicDesign = $_POST['graphics-design'];
        $creativeDesign = $_POST['creative-design'];
        $seo = $_POST['seo'];
        $message = $_POST['message'];

        $to = 'ibrahimabdulmajeed14@gmail.com';
        $subject  = 'portfolio form submission';
        $msg = "Name: ".$name."\n". "Wrote this message: "."\n\n".$message ;
        $header = "From: ".$email; 

        if(mail($to, $subject, $msg ,$header)){
            echo "<h1>Sent Successfully! Thank You"." ".$name.", we will contact you shortly </h1>";
        }else {
            echo "Something went wrong!!";
        }
    
    }



?>