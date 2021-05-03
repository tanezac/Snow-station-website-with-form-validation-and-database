<?php
	try {
	    $var =7;
		$last_id = $_SESSION["last_id"];
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT userName, password, firstName, lastName, address1,address2, 
                          city, state, zipCode, phone, email, gender, maritalStatus,dateOfBirth".
		" FROM registration WHERE id = :last_id");
		$stmt->bindParam(':last_id', $var);
		$stmt->execute();

		// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		//var_dump($stmt->fetchAll()[0]);
		$assocArray = $stmt->fetchAll()[0];

        $user_name = $assocArray["userName"];
        $pass_word = $assocArray["password"];
        $firstname = $assocArray["firstName"];
        $lastname = $assocArray["lastName"];
        $address1 = $assocArray["address1"];
        $address2 = $assocArray["address2"];
        $city = $assocArray["city"];
        $state = $assocArray["state"];
        $zipcode = $assocArray["zipCode"];
        $phone = $assocArray["phone"];
        $email = $assocArray["email"];
        $gender = $assocArray["gender"];
        $marital = $assocArray["maritalStatus"];
        $birthday = $assocArray["dateOfBirth"];
	}
	catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	} finally {
		$conn = null;
	}
?>