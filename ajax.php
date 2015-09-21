<?php

require_once 'classes/Service.php';
$service = new Services;

switch ($_REQUEST['action']) {
	case 'registration':
		$data = array(
			'first_name' => $_REQUEST['first_name'],
			'last_name' => $_REQUEST['last_name'],
			'email_address' => $_REQUEST['email_address'],
			'father_name' => $_REQUEST['father_name'],
			'mother_name' => $_REQUEST['mother_name'],
			'permanent_address' => $_REQUEST['permanent_address'],
			'present_address' => $_REQUEST['present_address'],
			'passing_year_ssc' => $_REQUEST['passing_year_ssc'],
			'educational_qualification' => $_REQUEST['educational_qualification'],
			'last_studied_year' => $_REQUEST['last_studied_year'],
			'last_studied_class' => $_REQUEST['last_studied_class'],
			'professional_life_description' => $_REQUEST['professional_life_description'],
			'contributions' => $_REQUEST['contributions'],
			'guest_number' => $_REQUEST['guest_number'],
			'image_url' => '',
			'amount' => $_REQUEST['amount'],
			'transaction_id' => $_REQUEST['transaction_id'],
			'contact_number' => $_REQUEST['contact_number'],
			'payment_source' => $_REQUEST['payment_source'],
			'token' => time(),
			'is_verified' => 'No',
			'created_at' => time(),
			'updated_at' => time()
		);
		
		$image = array();

		if(@$_FILES['image']){
			$image = array(
				'image' => @$_FILES['image']
			);
		}

		echo $service->registration($data, $image);
		break;
	case 'verify':
		echo $service->verifyPayment($_REQUEST['id']);
		break;
	default:
		return 'Default action';
		break;
}
