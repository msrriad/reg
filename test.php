<?php

require_once 'classes/MysqliDb.php';

$db = new MysqliDb ('localhost', 'root', 'c0mm0n', 'bphs');

// $db->setPrefix ('nccib_');
$r = $db->get('registrations'); //contains an Array of all users 

$data = Array(
	'first_name' => 'Test data',
	'last_name' => 'Test data',
	'email_address' => 'Test data',
	'father_name' => 'Test data',
	'mother_name' => 'Test data',
	'permanent_address' => 'Present address',
	'present_address' => 'Permanent address',
	'passing_year_ssc' => 2002,
	'educational_qualification' => 'B.Sc',
	'last_studied_year' => 2010,
	'last_studied_class' => 'B.Sc',
	'professional_life_description' => 'Test data',
	'contributions' => 'Test data',
	'guest_number' => 2,
	'image_url' => '',
	'amount' => 300,
	'transaction_id' => 'Test data',
	'contact_number' => 'Test data',
	'payment_source' => 'bKash',
	'token' => time(),
	'is_verified' => 'No',
	'created_at' => time(),
	'updated_at' => time()
);

$id = $db->insert('registrations', $data);

echo '<pre>'; print_r($id);