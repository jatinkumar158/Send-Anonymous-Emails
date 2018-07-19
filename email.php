<?php

    $errorMessage="";
    $successMessage="";
    if($_POST)
    {
        if($_POST["remail"]=="")
        {
            $errorMessage=$errorMessage."Reciever's email is missing<br>";
        }
        if($_POST["semail"]=="")
        {
            $errorMessage.="sender email is missing<br>";
        }
        if($_POST["subject"]=="")
        {
            $errorMessage.="subject is missing<br>";
        }
        if($_POST["message"]=="")
        {
            $errorMessage.="message is missing<br>";
        }
        if($errorMessage!="")
        {
            $errorMessage='<div class="alert alert-danger" role="alert"><b>There are error(s) in your form:<br></b>'.$errorMessage.'</div>';
        }
        else
        {   
            $header="From:".$_POST["semail"];
            if(mail($_POST["remail"],$_POST["subject"],$_POST["message"],$header))
            {
                $successMessage='<div class="alert alert-success" role="alert">Your message has been sent!</div>';
            }
            else
            {
                $errorMessage='<div class="alert alert-danger" role="alert"><b>Email not sent<br></b></div>';
            }
        }
    }


?>

//  (add html file here)
