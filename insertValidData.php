<?php
	if ($isValid) {
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username, $password);
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
			$sql = $conn->prepare("INSERT INTO registration (userName, password, firstName, lastName,address1,address2, city, state, zipCode, phone, email, gender, maritalStatus, dateOfBirth) 
            VALUES (:userName,:password,:firstName,:lastName, :address1, :address2, :city, :state, :zipCode,:phone,:email, :gender, :status, :birthday)");

            $sql->bindParam(':userName', $user_name);
            $sql->bindParam(':password', $pass_word);
            $sql->bindParam(':firstName', $firstname);
            $sql->bindParam(':lastName', $lastname);
            $sql->bindParam(':address1', $address1);
            $sql->bindParam(':address2', $address2);
            $sql->bindParam(':city', $city);
            $sql->bindParam(':state', $state);
            $sql->bindParam(':zipCode', $zipcode);
            $sql->bindParam(':phone', $phone);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':gender', $gender);
            $sql->bindParam(':status', $marital);
            $sql->bindParam(':birthday', $birthday);
			
			$sql->execute();
			
			$last_id = $conn->lastInsertId();
			$_SESSION["last_id"] = "$last_id";

            header("Location: confirmation.php");
		}
		catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		} finally {
			$conn = null;
		}
	}
?>