<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Chat with Mentor/Mentee
            <div class="title">Login</div>
            </header>
            <form action="#">
                <div class="error-txt">Error Message !</div>
                    <div class="field input">
                        <label for="">E-mail ID</label>
                        <input type="email" placeholder="Enter email address">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" placeholder="Enter a password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="Submit" value="Continue to chat">
                    </div>
                    <div class="link">Create an account ? <a href="#">SignUp now</a></div>
            </form>
        </section>
    </div>

    <script src="./js/pass-show-hide.js"></script>
</body>
</html>