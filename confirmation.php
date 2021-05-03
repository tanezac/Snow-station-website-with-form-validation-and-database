<!DOCTYPE html>
<?php
include 'connectionInfo.php';
?>
<html lang = "en">
<head>
    <?php const title = "Confirmation"; ?>
    <title><?php echo title; ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="./css/stylesheet_1.css"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/color.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">

</head>
<body>
<h1><?php echo title; ?></h1>
<br/>
<script>
    function myFunction() {
        const x = document.getElementById("password");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
    function myFunction1() {
        const x = document.getElementById("repeatPass");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
<div class="w3-top">
    <div class="w3-bar w3-white w3-wide w3-padding w3-card">
        <a href="home_page.php" class="w3-bar-item w3-button"><img style="margin-left:-17px; height:50px;" src="./img/logo.jpg" alt="logo"><b>STA</b> Snow Station</a>
        <!-- Float links to the right. Hide them on small screens -->
        <div class="w3-right w3-hide-small">
            <a href="home_page.php" class="w3-bar-item w3-button" >Home</a>
            <a href="registration.php" class="w3-bar-item w3-button">Registration</a>
            <a href="animation_snow.php" class="w3-bar-item w3-button">Animations</a>
        </div>
    </div>
</div>
<header class="w3-display-container w3-content w3-wide" style="max-width:2000px; line-height: 100px" id="home">
    <img class="w3-image" src="./img/winner_2.jpg" alt="Winner" width="100%">
    <div class="w3-display-middle w3-margin-top w3-center">
        <h1 class="w3-xlarge w3-text-white"><span class="w3-padding w3-black w3-opacity-min"><b>STA</b></span> <span class="w3-hide-small w3-text-light-grey">Snow Station</span></h1>
    </div>
</header>
<div class="wrapper" >
    <div id="menubar">
        <div id="menu_list">
            <a href="home_page.php" class="w3-bar-item w3-button menuitem menuitem_1" >Home</a><br>
            <a href="pdo.php" class="w3-bar-item w3-button menuitem menuitem_1" >Registration</a><br>
            <a href="animation_snow.php" class="w3-bar-item w3-button menuitem menuitem_1" >Animations</a>
        </div>
    </div>
    <div id="main1">
        <h2>Register Now</h2>
        <?php
        include 'selectUserData.php';
        ?>
        <p><span class="error">* required field.</span></p>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <br/><br/><br/><br/><br/><br/>
            <label for="username">User Name:  <span class="error">*</span></label>
            <input disabled id="username" name="username" class="form-control" type="text"
                   placeholder="Enter User Name"
                   value="<?php echo $user_name; ?>"/>
            <br/>

            <label for="password">Password:  <span class="error">*</span></label>
            <input disabled id="password" name="password" class="form-control" type="password"
                   placeholder="Enter Password" value="<?php echo $pass_word; ?>"/>
            <label>
                <input type="checkbox" onclick="myFunction()">
            </label> Show Password
            <br/>

            <label for="firstname">First Name:  <span class="error">*</span></label>
            <input disabled id="firstname" name="firstname" class="form-control" type="text"
                   placeholder="Enter First Name"
                   value="<?php echo $firstname; ?>"
            />
            <br/>

            <label for="lastname">Last Name:  <span class="error">*</span></label>
            <input disabled id="lastname" name="lastname" class="form-control" type="text"
                   placeholder="Enter Last Name"
                   value="<?php echo $lastname; ?>"
            />
            <br/>

            <label for="birthday">Date of Birth:  <span class="error">*</span></label><br/>
            <input disabled id="birthday" type="date" name="birthday" class="form-control"
                   placeholder="Enter Date Of Birth"
                   value="<?php echo $birthday; ?>"/>
            <br/>

            <label for ="gender">Gender:  <span class="error">*</span></label><br>
            <input disabled  id="gender" name="gender" class="form-control" type="text"
                   value="<?php echo $gender; ?>"/>
            <br/>


            <label for="status">Marital Status:  <span class="error">*</span></label><br>
            <input disabled id="status" name="status" class="form-control" type="text"
                   value="<?php echo $marital; ?>"/>
            </br>

            <label for="address2">Address Line 2:</label>
            <input disabled id="address2" name="address2" class="form-control" type="text"
                   value="<?php echo $address2; ?>"/>

            </br>
            <label for="city">City:  <span class="error">*</span></label>
            <input disabled id="city" name="city" class="form-control" type="text"
                   value="<?php echo $city; ?>"/>
            </br>

            <label for="state">State:  <span class="error">*</span></label>
            <input disabled id="state" name="state" class="form-control" type="text"
                   value="<?php echo $state; ?>"/>
            <br/>


            <label for="zipcode">Zip Code:  <span class="error">*</span></label>
            <input disabled id="zipcode" name="zipcode" class="form-control" type="text"
                   value="<?php echo $zipcode; ?>"/>
            <br/>

            <label for="phone">Phone Number:  <span class="error">*</span></label>
            <input disabled id="phone" name="phone" class="form-control" type="tel"
                   value="<?php echo $phone; ?>"/>
            <br/>

            <label for="email">Email:  <span class="error">*</span></label>
            <input disabled id="email" name="email" class="form-control" type="email"
                   value="<?php echo $email; ?>"/>
            <br/>
            <br/>
        </form>


        <footer class="w3-container w3-padding-32 w3-light-blue">
            <div class="w3-row-padding">
                <div class="w3-third">
                    <h3>Contact Information</h3>
                    <p>Contact me if you have any questions.</p>
                    <p> <i class="material-icons">email</i>  ntnhmc@umsystem.edu </p>
                    <p> <i class="material-icons">phone</i>  314-256-1754 </p>
                    <p> <i class="material-icons">account_balance</i> 1 University Saint Louis, MO, 63125 </p>
                </div>

                <div class="w3-third">
                    <h3>MEDIA POSTS</h3>
                    <ul class="w3-ul">
                        <li class="w3-padding-16 w3-hover-white">
                            <img src="./img/fb.jpg" class="w3-left w3-margin-right" style="width:50px" alt="facebook">
                            <span class="w3-large">SnowStation</span><br>
                            <a href="https://www.facebook.com/" target="_blank" title="Click here for more information">
                                Click Here
                            </a>

                        </li>
                        <li class="w3-padding-16 w3-hover-white">
                            <img src="./img/instagram.jpg" class="w3-left w3-margin-right" style="width:50px" alt="instagram">
                            <span class="w3-large">SnowStation_SaintLouis</span><br>
                            <a href="https://www.instagram.com/" target="_blank" title="Click here for more information">
                                Click Here
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="w3-third">
                    <h3>POPULAR TAGS</h3>
                    <p>
                        <span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">London</span>
                        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">DIY</span>
                        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Family</span>
                        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Shopping</span>
                        <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-dark-grey w3-small w3-margin-bottom">Games</span>
                    </p>
                </div>
            </div>
        </footer>

</body>
</html>