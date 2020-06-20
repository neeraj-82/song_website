<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="login_form.css">
    
</head>

<body>
    <section class="intro_section">
        <div class="container">
            <div class="info_part">
                <div class="image">
                   <div class="img">
                       <img src="smile.png">
                   </div>
                </div>
                <div class="information">
                    <span class="introduction">
                        <h2>Hii ! I am Dreamer</h2>
                    </span>
                    <span class="ask_name">
                        <h4>What is your name?</h4>
                    </span>
                </div>
            </div>

            <div class="form_material">
                <form class="get_username" method="post" onsubmit="return validation()">
                    <div class="username">
                        <div class="user_design">
                            <input type="text" placeholder="Enter name......" name="username" class="user">
                            
                        </div>
                        <span class="warn-user"></span>
                    </div>

                    <div class="continue">
                        <button type="submit" name="submit" class="sign">Continue</button>
                    </div>
                </form>
            </div>

        </div>

    </section>

    
    
    
    
    <?php

    include 'interestdb.php';
    
    
    
    if(isset($_POST['submit']))
    {
        $username=$_POST['username'];
        setcookie('username',$username);
        
        
         header("location:mail.php");
    }
    
?>
    
<script src="write.js"></script>
<script src="validation.js"></script>
</body>

</html>