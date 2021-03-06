<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$first_name = htmlspecialchars($_POST['first_name']);
		$email = htmlspecialchars($_POST['email']);
		$last_name = htmlspecialchars($_POST['last_name']);
		$telephone_Number = htmlspecialchars($_POST['telephone_Number']);
		$birth_date = htmlspecialchars($_POST['birth_date']);
		$order_motif = htmlspecialchars($_POST['order_motif']);
		$country = htmlspecialchars($_POST['country']);
		$sex = htmlspecialchars($_POST['sex']);
		$eye_color = htmlspecialchars($_POST['eye_color']);
		$disability = htmlspecialchars($_POST['disability']);
		$height = htmlspecialchars($_POST['height']);
		$full_address = htmlspecialchars($_POST['full_address']);
		$city = htmlspecialchars($_POST['city']);
		$zipcode = htmlspecialchars($_POST['zipcode']);
		$region = htmlspecialchars($_POST['region']);
		$id_number = htmlspecialchars($_POST['region']);
		$expiration_date = htmlspecialchars($_POST['expiration_date']);
		$expire_license = htmlspecialchars($_POST['expire_license']);
		$issue_country = htmlspecialchars($_POST['issue_country']);
		$license_category = htmlspecialchars($_POST['license_category']);
		$photo = htmlspecialchars($_POST['photo']);
		$license_front = htmlspecialchars($_POST['license_front']);
		$back_photo = htmlspecialchars($_POST['back_photo']);
		$signature = htmlspecialchars($_POST['signature']);
		$references = htmlspecialchars($_POST['references']);

		// Check Required Fields
        if(!empty($first_namel) && !empty($last_name) && !empty($email)
        && !empty($region) && !empty($country) && !empty($telephone_Number)
        && !empty($birth_date) && !empty($sex) && !empty($eye_color)
        && !empty($height) && !empty($full_address) && !empty($city)
        && !empty($zipcode) && !empty($occupation) && !empty($marital_status)
        && !empty($photo) && !empty($license_category) && !empty($references)){
			// Passed
			// Check Email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email';
				$msgClass = 'alert-danger';
			} else {
				// Passed
				$toEmail = 'support@traversymedia.com';
				$subject = 'Contact Request From '.$name;
                $body = '<html><body>';
                $body .= '<img src="#" alt="ID card contact-form" />';
                $body .= '<table rules="all" styel="border-color: #666;" cellpadding="10"';
                $body .= "<tr style='background: #666;'<td><strong>First Name: </strong></td><td>" .   $first_name . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Last Name: </strong></td><td>" .    $last_name . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Email: </strong></td><td>" .        $email . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Telephone: </strong></td><td>" .    $telephone_Number . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Birth Date: </strong></td><td>" .   $birth_date . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Sex: </strong></td><td>" .          $sex . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>ID Number: </strong></td><td>" .    $id_number . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>ID expiry Date: </strong></td><td>" .$expiration_date . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Order Purpose: </strong></td><td>" .$order_motif. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>License Category: </strong></td><td>" .$license_category. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Order Purpose: </strong></td><td>" .$order_motif. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Eye Color: </strong></td><td>" .    $eye_color . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Height: </strong></td><td>" .       $height . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Full Address: </strong></td><td>" . $full_address . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>City: </strong></td><td>" .         $city . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>ZipeCode: </strong></td><td>" .     $zipcode . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Occupation: </strong></td><td>" .   $occupation. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Country: </strong></td><td>" .      $country. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Disability: </strong></td><td>" .   $disability . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>references: </strong></td><td>" .   $references . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>photo: </strong></td><td>".         $photo . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>License front: </strong></td><td>". $license_category . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>License back: </strong></td><td>".  $back_photo . "</td></tr>";

				// Email Headers
				$headers = "MIME-Version: 1.0" ."\r\n";
				$headers .="Content-Type:text/html;charset=UTF-8" . "\r\n";

				// Additional Headers
				$headers .= "From: " .$name. "<".$email.">". "\r\n";

				if(mail($toEmail, $subject, $body, $headers)){
					// Email Sent
					$msg = 'Your email has been sent';
					$msgClass = 'alert-success';
				} else {
					// Failed
					$msg = 'Your email was not sent';
					$msgClass = 'alert-danger';
				}
			}
		} else {
			// Failed
			$msg = 'Please fill in all fields';
			$msgClass = 'alert-danger';
		}
	}
?>