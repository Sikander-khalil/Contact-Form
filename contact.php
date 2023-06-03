<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>

    <style>
        body{

            background-color: #f1f1f1;

        }

        .form-control{

            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            color: #555;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 4px;

        }
        .btn-primary{

            padding: 6px 12px;
            font-size: 14px;
            font-weight: 400;
            cursor: pointer;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: #337ab7;
            color: #fff;


        }

        textarea.form-control{

            height: auto;
        }
.container{

    margin-left: 30%;
    width: 400px;
    margin-top: 6%;
    background-color: #fff;
    padding: 30px;
    padding-right: 60px;
    box-shadow: 10px 10px 5px grey;

}
label{
    font-size: 18px;
}
.success{
margin: 5px auto;
border-radius: 5px;
border: 3px solid #fff;
background: #33CC00;
color: white;
font-size: 20px;
padding: 10px;
box-shadow: 10px 10px 5px grey;

}

    </style>
</head>
<body>
    <div class="container">

    <?php

    if(isset($_POST['submit_form'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $msg = $_POST['msg'];
        $phone = $_POST['phone'];

        $FromName = "Techno Samarter";

        $FromEmail = "info@technosmarter.com";

        $ReplyTo = $email;

        $toemail = "sikanderkhalil056@gmail.com";
        $subject="Techno Smarter Contact Form";
        $message='Name:-' .$name. '<br> Email :-' . $email. '<br> Phone no:-' . $phone. '<br> Message:-' . $msg;

        $headers = "MIME-VERSION: 1.0\n";

        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
        $headers .= "From".$FromName." <".$FromEmail.">\n";
        $headers .= "Reply-To: ".$ReplyTo."\n";
        $headers .= "X-Sender: <".$FromEmail.">\n";
        $headers .= "X-Mailer: PHP\n";
        $headers .= "X-Priority: 1\n";
        $headers .= "Return-Path: <".$FromEmail.">\n";

        if(mail($toemail,$subject,$message,$headers,'-f'.$FromEmail)){
        
            $hide = 1;



             echo '<div class="success"><center><span style="font-size: 100px;">&#9989;</span></center>
             <br> Thank You <strong>'.$name.',</strong>Your Message has been sent.We will reply as soon as poosible.</div>';


        }else{

            echo "The server failed to send the message.Please try again later or Make sure, you are using live server for email.";

        }

    }

    if(!isset($hide)){


?>
    <form action="" method="POST">

<label>Name:</label>

<input type="text" name="name" class="form-control" required>


<label>Email:</label>

<input type="email" name="email" class="form-control" required>

<label>Phone no:</label>

<input type="number" name="phone" class="form-control" required>
<label>Message:</label>

<textarea name="msg" class="form-control" cols="10" rows="5"></textarea>
<input type="submit" name="submit_form" value="Send" class="btn-primary">




    </form>
    <?php  } ?>
    </div>
    
</body>
</html>