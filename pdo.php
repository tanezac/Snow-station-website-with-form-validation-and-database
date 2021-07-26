<!DOCTYPE html>
<?php
	include 'connectionInfo.php';
?>
<html lang = "en">
	<head>
        <?php const title = "Registration"; ?>
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
        <?php
        $usernameERR =  $firstnameERR = $lastnameERR = $passwordERR = $repeatPassERR =$genderERR= $maritalERR= $address1ERR = $address2ERR = $cityERR  =$zipcodeERR  =$phoneERR  = $emailERR = "";
        $user_name =  $firstname = $lastname = $pass_word = $repeatPass= $gender= $marital= $address1= $address2= $city =$zipcode =$phone = $email = "";
        $birthday = $birthdayERR="";
        $state = $stateERR = "";
        $isValid = false;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $isValid = true;
            $user_name = test_input($_POST["username"]);
            if (empty($_POST["username"])) {
                $usernameERR = "User name is required!";
                $isValid = false;
            }
            else {
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z-' ]*$/",$user_name)) {
                    $usernameERR = "Only letters and white space allowed";
                    $isValid=false;
                }
                else{
                    if(strlen($_POST["username"]) > 50){
                        $usernameERR= "User name's length is too long - exceed the maximum of 50 characters";
                        $isValid=false;
                    }
                    elseif( strlen($_POST["username"]) < 6){
                        $usernameERR= "User name's length is too short - below the 6 character minimum";
                        $isValid=false;
                    }
                    else{
                        $usernameERR="";
                        $isValid=true;
                    }
                }
            }
            //password

            if (!empty($_POST["password"]) && ($_POST["repeatPass"])) {
                $pass_word = test_input($_POST["password"]);
                $repeatPass = test_input($_POST["repeatPass"]);
                if (strlen($_POST["password"]) <= 8) {
                    $passwordERR = "Your Password Must Contain At Least 8 Characters!";
                    $isValid=false;
                } elseif (!preg_match("#[0-9]+#", $pass_word)) {
                    $passwordERR = "Your Password Must Contain At Least 1 Number!";
                    $isValid=false;
                } elseif (!preg_match("#[A-Z]+#", $pass_word)) {
                    $passwordERR = "Your Password Must Contain At Least 1 Capital Letter!";
                    $isValid=false;
                } elseif (!preg_match("#[a-z]+#", $pass_word)) {
                    $passwordERR = "Your Password Must Contain At Least 1 Lowercase Letter!";
                    $isValid=false;
                } elseif (!preg_match("#[\W]+#", $pass_word)) {
                    $passwordERR = "Your Password Must Contain At Least 1 Special Character!";
                    $isValid=false;
                } elseif (strcmp($pass_word, $repeatPass) !== 0) {
                    $passwordERR = "Passwords must match!";
                    $isValid=false;
                }
            }
            elseif(empty($_POST["password"])) {
                $passwordERR = "Password is required!";
                $isValid=false;
            }
            elseif(empty($_POST["repeatPass"]) && !empty($_POST["password"])){
                $repeatPassERR = "Please Check You've Entered Or Confirmed Your Password!";
                $isValid=false;
            }
            else
            {
                $passwordERR=$repeatPass="";
                $isValid=true;
            }

//First Name
            $firstname = test_input($_POST["firstname"]);
            if (empty($_POST["firstname"])) {
                $firstnameERR = "First name is required!";
                $isValid = false;
            }
            else {

                if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
                    $firstnameERR = "Only letters and white space allowed";
                    $isValid=false;
                }
                else {
                    // check if name only contains letters and whitespace
                    if ( strlen($_POST["firstname"])  > 50) {
                        $firstnameERR = "First name's length is too long - exceed the maximum of 50 characters";
                        $isValid = false;
                    } else {
                        $firstnameERR= "";
                        $isValid = true;
                    }
                }
            }
            //Lastname
            $lastname = test_input($_POST["lastname"]);
            if (empty($_POST["lastname"])) {
                $lastnameERR = "Last name is required!";
                $isValid = false;
            }
            else {

                if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
                    $lastnameERR = "Only letters and white space allowed";
                    $isValid=false;
                }
                else {
                    // check if name only contains letters and whitespace
                    if ( strlen($_POST["lastname"])  > 50) {
                        $lastnameERR= "Last name's length is too long - exceed the maximum of 50 characters";
                        $isValid = false;
                    } else {
                        $lastnameERR= "";
                        $isValid = true;
                    }
                }
            }

//birthday
            $birthday= test_input($_POST["birthday"]);
            if (empty($_POST["birthday"])) {
                $birthdayERR = "Birthday is required!";
                $isValid = false;
            }
            else{
                $isValid=true;
            }




//gender
            if (isset($_POST["gender"])) {
                $gender = test_input($_POST["gender"]);
                if (empty($_POST["gender"])) {
                    $genderERR = "Gender is required!";
                    $isValid = false;
                }
            }
            else {
                $genderERR = "Gender is required!";
                $isValid = false;
            }
//Marital status
            if (isset($_POST["status"])) {
                $marital = test_input($_POST["status"]);
                if (empty($_POST["status"])) {
                    $maritalERR = "Marital Status is required";
                    $isValid = false;
                }
            }
            else {
                $maritalERR= "Marital Status is required";
                $isValid = false;
            }


//Address1
            $address1 = test_input($_POST["address1"]);
            if (empty($_POST["address1"])) {
                $address1ERR = "Address is required!";
                $isValid = false;
            }
            else {
                if ( strlen($_POST["address1"])  > 100) {
                    $address1ERR= "Address's length is too long - exceed the maximum of 100 characters";
                    $isValid = false;
                } else {
                    $address1ERR= "";
                    $isValid = true;
                }
            }

            $address2 = test_input($_POST["address2"]);
            if ( strlen($_POST["address2"])  > 100) {
                $address2ERR= "Address's length is too long - exceed the maximum of 100 characters";
                $isValid = false;
            }
            else {
                $address2ERR= "";
                $isValid = true;
            }
//city
            $city = test_input($_POST["city"]);
            if (empty($_POST["city"])) {
                $cityERR = "City is required!";
                $isValid = false;
            }
            else {
                if ( strlen($_POST["city"])  > 50) {
                    $cityERR= "City's length is too long - exceed the maximum of 50 characters";
                    $isValid = false;
                } else {
                    $cityERR= "";
                    $isValid = true;
                }
            }

//state
            $state = test_input($_POST["state"]);
            if (empty($_POST["state"])) {
                $stateERR = "State is required!";
                $isValid = false;
            }
            else{
                $isValid=true;
            }

//phone
            function phone_number_format($number) {

                // Allow only Digits, remove all other characters.
                $number = preg_replace("/[^\d]/","",$number);

                // get number length.
                $length = strlen($number);

                // if number = 10
                if($length == 10) {
                    $number = preg_replace("/^1?(\d{3})(\d{3})(\d{4})$/", "$1-$2-$3", $number);
                }

                return $number;

            }
            $phone = test_input($_POST["phone"]);
            if (empty($_POST["phone"])) {
                $phoneERR = "Phone number is required!";
                $isValid = false;
            }
            else{
                if ( strlen($_POST["phone"])  > 12 ) {
                    $phoneERR= "Max length 12 characters!";
                    $isValid = false;
                }
                elseif(preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $phone)){
                    $phoneERR="";
                    $isValid=true;
                }
                elseif(strlen($_POST["phone"]) ==10){
                    $phoneERR="";
                    $phone=phone_number_format($phone);
                    $isValid=true;
                }
                else{
                    $phoneERR="Phone number should be formatted: xxx-xxx-xxxx";
                    $isValid=false;
                }

            }

//zipcode

            $zipcode = test_input($_POST["zipcode"]);
            if (empty($_POST["zipcode"])) {
                $zipcodeERR = "Zip code is required!";
                $isValid = false;
            }
            else{
                if ( strlen($_POST["zipcode"])  > 10 || strlen($_POST["zipcode"]) <5 ) {
                    $zipcodeERR= "Max length 10 characters, minimum length 5 digits";
                    $isValid = false;
                }
                elseif(preg_match('/^[0-9]{5}([- ]?[0-9]{4})?$/', $zipcode)){
                    $zipcodeERR="";
                    $isValid=true;
                }
                else{
                    $zipcodeERR="Zip Code should be formatted: xxxxx or xxxxx-xxxx";
                    $isValid=false;
                }
            }

            //email
            $email = test_input($_POST["email"]);
            if (empty($_POST["email"])) {
                $emailERR = "Email is required!";
                $isValid=false;
            } else {

                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    $emailERR = "Invalid email format - x@x.xformat!";
                    $isValid=false;
                }
                else{
                    $isValid=true;
                }
            }


        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        ?>
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
                    <a href="pdo.php" class="w3-bar-item w3-button">Registration</a>
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
		<p><span class="error">* required field.</span></p>
		<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <br/><br/><br/><br/><br/><br/>

            <label for="username">User Name:  <span class="error">*</span></label>
            <input id="username" name="username" class="form-control" type="text"
                   placeholder="Enter User Name"
                   value="<?php echo $user_name; ?>"/>
            <span class="error"><?php echo $usernameERR; ?></span>
			<br/>

            <label for="password">Password:  <span class="error">*</span></label>
            <input id="password" name="password" class="form-control" type="password"
                   placeholder="Enter Password" value="<?php echo $pass_word; ?>"/>
            <span class="error"> <?php echo $passwordERR;?></span>
            <br/>
            <label>
                <input type="checkbox" onclick="myFunction()">
            </label> Show Password
            <br/>


            <label for="repeatPass">Repeat Password:  <span class="error">*</span></label>
            <input id="repeatPass" name="repeatPass" class="form-control" type="password"
                   placeholder="Repeat Password" value="<?php echo $repeatPass; ?>" />
            <span class="error"> <?php echo $repeatPassERR;?></span>
            <br/>
            <label>
                <input type="checkbox" onclick="myFunction1()">
            </label> Show Password
            <br/>

            <span class="error"><?php echo $repeatPassERR; ?></span>

            <label for="firstname">First Name:  <span class="error">*</span></label>
            <input id="firstname" name="firstname" class="form-control" type="text"
                   placeholder="Enter First Name"
                   value="<?php echo $firstname; ?>"
            />
            <span class="error"><?php echo $firstnameERR; ?></span>
            <br/>

            <label for="lastname">Last Name:  <span class="error">*</span></label>
            <input id="lastname" name="lastname" class="form-control" type="text"
                   placeholder="Enter Last Name"
                   value="<?php echo $lastname; ?>"
            />
            <span class="error"><?php echo $lastnameERR; ?></span>
            <br/>

            <label for="birthday">Date of Birth:  <span class="error">*</span></label><br/>
            <input id="birthday" type="date" name="birthday" class="form-control"
                   placeholder="Enter Date Of Birth"
                   value="<?php echo $birthday; ?>"/>
            <span class="error"><?php echo $birthdayERR; ?></span>
            <br/>

            <label>Gender:  <span class="error">*</span></label><br>
            <input type="radio"
                   name="gender" id="maleGender"
                <?php if (isset($gender) && $gender=="male") echo "checked";?>
                   value="male" />
            <label for="maleGender">Male</label>
            <input type="radio"
                   name="gender" id="femaleGender"
                <?php if (isset($gender) && $gender=="female") echo "checked";?>
                   value="female" />
            <label for="femaleGender">Female</label>
            <input type="radio"
                   name="gender" id="otherGender"
                <?php if (isset($gender) && $gender=="other") echo "checked";?>
                   value="other" />
            <label for="otherGender">Other</label>
            <span class="error"> <?php echo $genderERR;?></span>
            <br/>


            <label>Marital Status:  <span class="error">*</span></label><br>
            <input type="radio"
                   name="status" id="yes"
                <?php if($marital == "yes"){echo "Checked";} ?>
                   value="yes" />
            <label for="yes">Yes</label>
            <input type="radio"
                   name="status" id="no"
                <?php if($marital == "no"){echo "Checked";} ?>
                   value="no" />
            <label for="no">No</label>
            <span class="error"> <?php echo $maritalERR;?></span>
            <br>
            <label for="address1">Address Line 1:  <span class="error">*</span></label>
            <input id="address1" name="address1" class="form-control" type="text"
                   placeholder="Enter Address"
                   value="<?php echo $address1; ?>"
            />
            <span class="error"><?php echo $address1ERR; ?></span>
            </br>

            <label for="address2">Address Line 2:</label>
            <input id="address2" name="address2" class="form-control" type="text"
                   placeholder="Enter Address"
                   value="<?php echo $address2; ?>"/>
            <span class="error"><?php echo $address2ERR; ?></span>
            </br>
            <label for="city">City:  <span class="error">*</span></label>
            <input id="city" name="city" class="form-control" type="text"
                   placeholder="Enter City"
                   value="<?php echo $city; ?>"/>
            <span class="error"><?php echo $cityERR; ?></span>
            </br>
            <label for="state">State:  <span class="error">*</span></label>
            <select id="state" name="state" class="form-control">
                <option value="" selected="selected" hidden="hidden" disabled="disabled">
                    --Please Select--
                </option>
                <option value="CA">California</option>
                <option value="MO">Missouri</option>
                <option value="NY">New York</option>
                <option value="QR">Oregon</option>
                <option value="TX">Texas</option>
                <option value="LA">Los Angeles</option>

            </select>
            <span class="error"><?php echo $stateERR; ?></span>
            <br/>


            <label for="zipcode">Zip Code:  <span class="error">*</span></label>
            <input id="zipcode" name="zipcode" class="form-control" type="text"
                   placeholder="Enter Zip Code"
                   value="<?php echo $zipcode; ?>"/>
            <span class="error"><?php echo $zipcodeERR; ?></span>
            <br/>

            <label for="phone">Phone Number:  <span class="error">*</span></label>
            <input id="phone" name="phone" class="form-control" type="tel"
                   placeholder="Enter Phone Number"
                   value="<?php echo $phone; ?>"/>
            <span class="error"><?php echo $phoneERR; ?></span>
            <br/>

            <label for="email">Email:  <span class="error">*</span></label>
            <input id="email" name="email" class="form-control" type="email"
                   placeholder="Enter Email"
                   value="<?php echo $email; ?>"/>
            <span class="error"><?php echo $emailERR; ?></span>
            <br/><br/>

            <input type="submit" class="btn btn-success" value="Submit Button"/>
            <input type="reset" class="btn btn-info" value="Reset Button"/>
            <br/> <br/> <br/> <br/> <br/>

        </form>
            <?php
			include 'insertValidData.php';
		?>
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