<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$pages32 = htmlspecialchars($_POST['32-pages']);
		$pages48 = htmlspecialchars($_POST['48-pages']);
		$express = htmlspecialchars($_POST['express']);
		$temp_id = htmlspecialchars($_POST['temp_id']);
		$temp_passport = htmlspecialchars($_POST['temp_passport']);
		$travel_passport = htmlspecialchars($_POST['travel_passport']);
		$first_name = htmlspecialchars($_POST['first_name']);
		$email = htmlspecialchars($_POST['email']);
		$last_name = htmlspecialchars($_POST['last_name']);
		$nick_name = htmlspecialchars($_POST['nick_name']);
		$title = htmlspecialchars($_POST['title']);
		$marital_status = htmlspecialchars($_POST['marital_status']);
		$marriage_place = htmlspecialchars($_POST['marriage_place']);
		$marriage_since = htmlspecialchars($_POST['marriage_since']);
		$town = htmlspecialchars($_POST['town']);
		$telephone_Number = htmlspecialchars($_POST['telephone_Number']);
		$birth_date = htmlspecialchars($_POST['birth_date']);
		$birth_place = htmlspecialchars($_POST['birth_place']);
		$order_motif = htmlspecialchars($_POST['order_motif']);
		$country = htmlspecialchars($_POST['country']);
		$sex = htmlspecialchars($_POST['sex']);
		$eye_color = htmlspecialchars($_POST['eye_color']);
		$disability = htmlspecialchars($_POST['disability']);
		$height = htmlspecialchars($_POST['height']);
		$street = htmlspecialchars($_POST['street']);
		$house_number = htmlspecialchars($_POST['house_number']);
		$city = htmlspecialchars($_POST['city']);
		$zipcode = htmlspecialchars($_POST['zipcode']);
		$fax = htmlspecialchars($_POST['fax']);
		$citizenship = htmlspecialchars($_POST['citizenship']);
		$other_citizenship = htmlspecialchars($_POST['other_citizenship']);
		$aquired_by = htmlspecialchars($_POST['aquired_by']);
		$id_number = htmlspecialchars($_POST['id_number']);
		$current_document = htmlspecialchars($_POST['current_document']);
		$issued_by = htmlspecialchars($_POST['issued_by']);
		$issue_date = htmlspecialchars($_POST['issue_date']);
		$expiry_date = htmlspecialchars($_POST['expiry_date']);
		$occupation = htmlspecialchars($_POST['$occupation']);

		// Check Required Fields
        if(!empty($first_namel) && !empty($last_name) && !empty($email)&& !empty($country) && !empty($telephone_Number)
        && !empty($birth_date) && !empty($sex) && !empty($eye_color)
        && !empty($height) && !empty($telephone_Number) && !empty($city)
        && !empty($zipcode) && !empty($occupation)){
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
                $body .= "<tr style='background: #666;'<td><strong>Passport pages: </strong></td><td>" .   $pages48 . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Passport pages: </strong></td><td>" .   $pages32 . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Express passport?: </strong></td><td>" .   $expiry_date . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Temporal ID: </strong></td><td>" .   $expiry_date . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Express passport?: </strong></td><td>" .   $temp_id . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Current Travel Document: </strong></td><td>" .   $travel_passport . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>First Name: </strong></td><td>" .   $first_name . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Last Name: </strong></td><td>" .    $last_name . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Email: </strong></td><td>" .        $email . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Artis Name: </strong></td><td>" .   $nick_name . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Academic title: </strong></td><td>" .$title . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Marital Status: </strong></td><td>" .$marital_status . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Place of Marriage: </strong></td><td>" .$marriage_place . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Duration in Marriage: </strong></td><td>" .$town . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Town: </strong></td><td>" .$marriage_since . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Telephone: </strong></td><td>" .    $telephone_Number . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Birth Date: </strong></td><td>" .   $birth_date . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Birth place: </strong></td><td>" .   $birth_date . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Sex: </strong></td><td>" .          $sex . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>ID Number: </strong></td><td>" .    $id_number . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>ID expiry Date: </strong></td><td>" .$expiration_date . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Order Purpose: </strong></td><td>" .$order_motif. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>License Category: </strong></td><td>" .$license_category. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Order Purpose: </strong></td><td>" .$order_motif. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Eye Color: </strong></td><td>" .    $eye_color . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Height: </strong></td><td>" .       $height . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Street: </strong></td><td>" . $street . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>House: </strong></td><td>" . $house_number . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>City: </strong></td><td>" .         $city . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>ZipeCode: </strong></td><td>" .     $zipcode . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Fax: </strong></td><td>" .     $fax . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Occupation: </strong></td><td>" .   $occupation. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>citizenship: </strong></td><td>" .      $citizenship. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong> Other citizenship: </strong></td><td>" .      $other_citizenship. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>citizenship aquired by: </strong></td><td>" .      $aquired_by. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Current ID: </strong></td><td>" .   $current_document. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Issue Date: </strong></td><td>" .   $issue_date . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Expiry Date: </strong></td><td>".         $expiry_date . "</td></tr>";
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