<?php


// var_dump($_POST['name']);
// var_dump($_GET);

//IF THE FORM IS NOT FILLED OUT
if(empty($_POST)){
    echo 'there is nothing';
    exit;
}

//VALIDATE ALL DATA
//necessary to protect your server
$name = '';
$email = '';
$subject = '';
$message = '';
$recipient = 'af1b5025ffe95c0535b4@cloudmailin.net';

// to make a field required, kill the function if the value is "empty"
//Use GET to pass along message ?=true or ?=false to redirect users after form is sent + make thank you message pop up in JS

if (isset($_POST['name'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['email'])) {
    // if there's a line break in an email (it's very long), strip it out
   $email = str_replace(array("\r", "\n", "%0a", "%0d"),'',$_POST['email']);
   $email = filter_var($email,FILTER_VALIDATE_EMAIL);
}

if (isset($_POST['subject'])) {
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
}

if (isset($_POST['message'])) {
    $message = $_POST['message']; 
}

//Internet courrier validates email to protect from spam
//Ex. The courrier thinks a user is suspicious because their server and domain don't match?
//This makes sure internet sees that the email is coming from your server, and your domain, and that they match (they are not suspicious)

//SEND OUT EMAIL
$headers = array(
    'From'=>'noreply@sandratsao2019.com',
    'Reply=To'=>$name.'<'.$email.'>'
);

// if(mail($recipient, $subject, $message, $headers)){
if(mail($recipient, $subject, $message, $headers)){
    echo '
    <style type="text/css">
        body {
            cursor: url(../public/images/pointer.png), auto; 
        }
        .thankYou {
            width:80%; margin-left: auto; margin-right: auto; text-align: center; padding-top: 20%;
        }
        p {
            font-family: "Oswald", "Roboto", sans-serif;
            font-size: 20px;
            font-weight: 300;
        }
        a {
            text-decoration: none;
            font-family:"Teko", Impact, sans-serif;
            font-size: 35px;
            color: #febe10;
            cursor: url(../public/images/b_pointer.png), auto; 
        }
        a:hover {
            color: #ffd67b;
            transition: all 0.5s ease;
        }
    </style>
    <div class="thankYou">
        <p>Thank you for contacting me, '.$name.'</p>
        <p>I will get back to you within two business days.</p>
        <a href="/index.php">Go Back!</a>
    </div>
    ';
}else{
    echo '
    <style type="text/css">
        body {
            cursor: url(../public/images/pointer.png), auto; 
        }
        .thankYou {
            width:80%; margin-left: auto; margin-right: auto; text-align: center; padding-top: 20%;
        }
        p {
            font-family: "Oswald", "Roboto", sans-serif;
            font-size: 20px;
            font-weight: 300;
        }
        a {
            text-decoration: none;
            font-family:"Teko", Impact, sans-serif;
            font-size: 35px;
            color: #febe10;
            cursor: url(../public/images/b_pointer.png), auto; 
        }
        a:hover {
            color: #ffd67b;
            transition: all 0.5s ease;
        }
    </style>
    <div class="thankYou">
        <p>I am sorry, but the mail did not go through :(</p>
        <a href="/index.php">Go Back!</a>
    </div>
    ';
}

?>
