<?php
/**
* Helper class
*/

require_once 'classes/MysqliDb.php';

class Services{
	public $db;

	public function __construct(){
		$this->db = new MysqliDb ('localhost', 'root', 'c0mm0n', 'bphs');
	}

	public function registration($data, $photo = ''){
		// Save data into database and acknowledge
		$id = $this->db->insert('registrations', $data);
		
		// Upload image
		if($id){
			$response = true;
			
			if(@$photo['image']['name']){
				if(!$photo['image']['error']){
					$newFileName = strtolower($photo['image']['name']); //rename file
					
					$validFile = true;

					if($photo['image']['size'] > 10024000){ //can't be larger than 10 MB
						$validFile = false;
						$message = 'Oops!  Your file\'s size is to large.';
					}
					
					//if the file has passed the test
					if($validFile){
						//move it to where we want it to be
						move_uploaded_file($photo['image']['tmp_name'], 'uploads/'.$newFileName);

						// Update inserted record
						$data = array('image_url' => $newFileName, 'updated_at' => time());

						$this->db->where ('id', $id);
						$this->db->update ('registrations', $data);

						$message = 'Congratulations!  Your file was accepted.';
					}
				}
				
				//if there is an error...
				else{
					//set that to be the returned message
					$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['photo']['error'];
				}
			}else{
				$message = 'Image not provided.';
			}
		}else{
			$response = false;
			$message = 'Please fill required field.';
		}

		$this->db->where('id', $id);
		$result = $this->db->getOne ('registrations');

		return json_encode(array('response' => $response, 'data' => array('token' => $result['token'], 'message' => $message)));
	}

	public function getRegisteredStudents(){
		return $this->db->get('registrations');
	}

	public function verifyPayment($id){
		$data = array('is_verified' => 'Yes', 'updated_at' => time());

		$this->db->where ('id', $id);
		if($this->db->update ('registrations', $data)){
			return true;
		}else{
			return false;
		}
	}

	public function getStudentByToken($token){
		$this->db->where('token', $token);
		return $this->db->getOne ('registrations');
	}

	
}