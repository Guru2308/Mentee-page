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
    <img class="bg" src="./bg.jpg" alt="">
    <div class="wrapper">
        <section class="form signup">
            <header>Chat with Mentor/Mentee
                <div class="title">Signup</div>
            </header>
            <form action="#">
                <div class="error-text">Error Message !</div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name</label>
                        <input type="text" placeholder="First Name">
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" placeholder="Last Name">
                    </div>
                </div>
                    <div class="field input">
                        <label for="">E-mail ID</label>
                        <input type="email" placeholder="Enter email address">
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" placeholder="Enter a password">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label for="">Select image</label>
                        <input type="file">
                    </div>
                    <div class="field button">
                        <input type="Submit" value="Continue to chat">
                    </div>
                    <div class="link">Already have an account ? <a href="#">Login now</a></div>
            </form>
        </section>
    </div>

    <script src="./js/pass-show-hide.js"></script>
    <script src="./js/php/signup.php"></script>
</body>
</html>

