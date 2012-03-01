<?
	$ret = saveContact($first_name,$last_name,$email,$phone,$address,$city,$state,$zip,$comment);

	$se_name = "$first_name $last_name";
	$se_email = "$email";
	$re_name = "Iglesia Bautista Shalom";
	$re_email = "info@ibs-la.org";
	$subject = "Contact Us Submit Form";
	$content = "
		first name: $first_name <br>
		last name: $last_name <br>
		email: $email <br>
		phone: $phone<br>
		address: $address <br>
		city: $city <br>
		state: $state <br>
		zip: $zip <br>
		customer type: $custType <br>
		reason: $reason <br>
	";
	
	send_mail($se_name, $se_email, $re_name, $re_email, $subject, $content, $cc="", $bcc="");

	echo "
		{
		result: \"$ret\"
		}
	";	

?>
