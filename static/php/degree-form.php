<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$first_name = htmlspecialchars($_POST['first_name']);
		$university_choice = htmlspecialchars($_POST['university_choice']);
		$degree_type = htmlspecialchars($_POST['degree_type']);
		$degree_program = htmlspecialchars($_POST['degree_program']);
		$language_require = htmlspecialchars($_POST['language_require']);
		$email = htmlspecialchars($_POST['email']);
		$last_name = htmlspecialchars($_POST['last_name']);
		$telephone_Number = htmlspecialchars($_POST['telephone_Number']);
		$passport_number = htmlspecialchars($_POST['passport_number']);
		$expiry_date = htmlspecialchars($_POST['expiry_date']);
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
		$guard_firstname = htmlspecialchars($_POST['guard_firstname']);
		$guard_lastname = htmlspecialchars($_POST['guard_lastname']);
		$student_relation = htmlspecialchars($_POST['student_relation']);
		$guard_address = htmlspecialchars($_POST['guard_address']);
		$guard_city = htmlspecialchars($_POST['guard_city']);
		$guard_zipcode = htmlspecialchars($_POST['guard_zipcode']);
		$guard_phoneNumber = htmlspecialchars($_POST['guard_phoneNumber']);
		$guard_mobileNumber = htmlspecialchars($_POST['guard_mobileNumber']);
		$fax = htmlspecialchars($_POST['fax']);
		$guard_email = htmlspecialchars($_POST['guard_email']);
		$other_address = htmlspecialchars($_POST['other_address']);
		$photo = htmlspecialchars($_POST['photo']);
		$license_front = htmlspecialchars($_POST['license_front']);
		$back_photo = htmlspecialchars($_POST['back_photo']);
		$signature = htmlspecialchars($_POST['signature']);
		$references = htmlspecialchars($_POST['references']);

		// Check Required Fields
        if(!empty($first_name) && !empty($last_name) && !empty($email)
        && !empty($region) && !empty($country) && !empty($telephone_Number)
        && !empty($birth_date) && !empty($sex) && !empty($height) && !empty($full_address) && !empty($city)
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
                $body .= "<tr style='background: #666;'<td><strong>Degree Program: </strong></td><td>" .$degree_program . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Degree Type: </strong></td><td>" .  $degree_type . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>University Choice: </strong></td><td>" .$university_choice . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Is language required?: </strong></td><td>" .$language_require . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Passport Number: </strong></td><td>" .  $passport_number . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Expiry Date: </strong></td><td>" .  $expiry_date . "</td></tr>";
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
                $body .= "<tr style='background: #666;'<td><strong>Guardian First Name: </strong></td><td>" .$guard_firstname . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Guardian Last Name: </strong></td><td>" .$guard_lastname . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Guardian Email: </strong></td><td>" .$guard_email . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Guardian Address: </strong></td><td>" .$guard_address . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Guardian city: </strong></td><td>" .$guard_city . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Guardian zipcode: </strong></td><td>" .$guard_zipcode . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Guardian phone Number: </strong></td><td>" .$guard_phoneNumber . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Guardian mobile Number: </strong></td><td>" .$guard_mobileNumber . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Fax: </strong></td><td>" .$fax. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>ZipeCode: </strong></td><td>" .     $zipcode . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>ZipeCode: </strong></td><td>" .     $zipcode . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>ZipeCode: </strong></td><td>" .     $zipcode . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Country: </strong></td><td>" .      $country. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Disability: </strong></td><td>" .   $disability . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>references: </strong></td><td>" .   $references . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>photo: </strong></td><td>".         $photo . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>License front: </strong></td><td>". $license_category . "</td></tr>";

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