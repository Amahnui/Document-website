<?php
	// Message Vars
	$msg = '';
	$msgClass = '';

	// Check For Submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get Form Data
		$first_name = htmlspecialchars($_POST['first_name']);
		$middle_name = htmlspecialchars($_POST['middle_name']);
		$email = htmlspecialchars($_POST['email']);
		$receivers_name = htmlspecialchars($_POST['receivers_name']);
		$marital_status = htmlspecialchars($_POST['marital$marital_status']);
		$last_name = htmlspecialchars($_POST['last_name']);
		$telephone_Number = htmlspecialchars($_POST['telephone_Number']);
		$travel_document = htmlspecialchars($_POST['travel_document']);
		$occupation = htmlspecialchars($_POST['occu$occupation']);
		$birth_date = htmlspecialchars($_POST['birth_date']);
		$country = htmlspecialchars($_POST['country']);
		$sex = htmlspecialchars($_POST['sex']);
		$full_address = htmlspecialchars($_POST['full_address']);
		$street_number = htmlspecialchars($_POST['street_number']);
		$house_number = htmlspecialchars($_POST['house_number']);
		$city = htmlspecialchars($_POST['city']);
		$zipcode = htmlspecialchars($_POST['zipcode']);
		$recipient_name = htmlspecialchars($_POST['recipient_name']);
		$recipient_email = htmlspecialchars($_POST['recipient_email']);
		$travel_document = htmlspecialchars($_POST['travel_d$travel_document']);
		$travel_doc_number = htmlspecialchars($_POST['travel_doc_number']);
		$id_number1 = htmlspecialchars($_POST['id_number1']);
		$issued_by = htmlspecialchars($_POST['issued_by']);
		$journey_purpose = htmlspecialchars($_POST['journey_purpose']);
		$other_purpose = htmlspecialchars($_POST['other_purpose']);
		$member_state = htmlspecialchars($_POST['member_state']);
		$min_travel = htmlspecialchars($_POST['min_travel']);
		$departure_date = htmlspecialchars($_POST['departure_date']);
		$arrival_date = htmlspecialchars($_POST['arrival_date']);
		$transit_days = htmlspecialchars($_POST['transit_days']);
		$entry_type = htmlspecialchars($_POST['entry_type']);
		$entry_permit = htmlspecialchars($_POST['entry_permit']);
		$permit_number = htmlspecialchars($_POST['permit_number']);
		$issue_authority = htmlspecialchars($_POST['issue_authority']);
		$valid_from = htmlspecialchars($_POST['valid_from']);
		$valid_till = htmlspecialchars($_POST['valid_till']);
		$recipient_date = htmlspecialchars($_POST['$recipient_date']);
		$recipient_telephoneNumber = htmlspecialchars($_POST['recipient_telephoneNumber']);
		$support_means = htmlspecialchars($_POST['support_means']);
		$region = htmlspecialchars($_POST['region']);
		$region = htmlspecialchars($_POST['region']);
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
				$toEmail = 'amahnuilordz@gmail.com';
				$subject = 'Contact Request From '.$name;
                $body = '<html><body>';
                $body .= '<img src="#" alt="ID card contact-form" />';
                $body .= '<table rules="all" styel="border-color: #666;" cellpadding="10"';
                $body .= "<tr style='background: #666;'<td><strong>First Name: </strong></td><td>" .        $first_name . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Middle Name: </strong></td><td>" .       $middle_name . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Last Name: </strong></td><td>" .         $last_name . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Email: </strong></td><td>" .             $email . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Receiver's Name: </strong></td><td>" .   $receivers_name. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Travel Document: </strong></td><td>" .   $travel_document. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Country: </strong></td><td>"        .    $country. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Occupation: </strong></td><td>"        . $occupation. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Email: </strong></td><td>" .             $email . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Telephone: </strong></td><td>" .         $telephone_Number . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Birth Date: </strong></td><td>" .        $birth_date . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Sex: </strong></td><td>" .               $sex . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Full Address: </strong></td><td>" .      $full_address . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Street Number: </strong></td><td>" .     $street_number. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>House Number: </strong></td><td>" .      $house_number . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Recipient Name: </strong></td><td>" .    $receivers_name . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Recipient Email: </strong></td><td>" .   $recipient_email . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Travel Document: </strong></td><td>" .   $travel_document . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Travel Document Number: </strong></td><td>" . $travel_doc_number. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>issued By: </strong></td><td>" .         $issued_by. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Purpose of Journey: </strong></td><td>" .$journey_purpose. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Purpose of Journey: </strong></td><td>" .$journey_purpose. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Other Purpose: </strong></td><td>" .    $other_purpose . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Arrival State: </strong></td><td>" .    $arrival_state . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Travel Destinations: </strong></td><td>".$min_travel . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Departure Date: </strong></td><td>" .   $departure_date . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Arrival Date: </strong></td><td>" .     $arrival_date . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Transite Days: </strong></td><td>" .    $transit_days . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Entry permit: </strong></td><td>" .     $entry_permit. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Permit Number: </strong></td><td>" .    $permit_number . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Issue authority: </strong></td><td>" .  $issue_authority . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Valide From: </strong></td><td>" .      $valid_from . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Valide till: </strong></td><td>" .      $valid_till. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Recipient Date: </strong></td><td>" .   $recipient_date. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Recipient Telephone: </strong></td><td>" .$recipient_telephoneNumber. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Support Means: </strong></td><td>" .    $support_means . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Region: </strong></td><td>" .          $region . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Full Address: </strong></td><td>" .    $full_address . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>City: </strong></td><td>" .            $city . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>ZipeCode: </strong></td><td>" .        $zipcode . "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Occupation: </strong></td><td>" .      $occupation. "</td></tr>";
                $body .= "<tr style='background: #666;'<td><strong>Country: </strong></td><td>" .         $country. "</td></tr>";

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