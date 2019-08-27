<?php
	if (isset($_POST['key'])) {

		$conn = new mysqli('localhost', 'root', '', 'leaf');

		if ($_POST['key'] == 'getRowData') {
			$row_id = $conn->real_escape_string($_POST['rowID']);
			$sql = $conn->query("SELECT *	FROM customer_registration WHERE user_id='$row_id'");
			$data = $sql->fetch_array();
			$jsonArray = array(
				'user_id' => $data['user_id'],
				'user_name' => $data['user_name'],
				'last_name' => $data['last_name'],
				'gender' => $data['gender'],
				'age' => $data['age'],
				'nation' => $data['nation'],
				'address' => $data['address'],
				'email' => $data['email'],
				'password' => $data['password'],
				'recive_date' => $data['recive_date'],
				'code1' => $data['code1'],
				'code2' => $data['code2'],
				'code3' => $data['code3'],

			);

			exit(json_encode($jsonArray));
 		}

		if ($_POST['key'] == 'getExistingData') {
			$start = $conn->real_escape_string($_POST['start']);
			$limit = $conn->real_escape_string($_POST['limit']);

			$sql = $conn->query("SELECT user_id, user_name, last_name, gender, age, nation, address, email, password, recive_date, code1, code2, code3
				FROM customer_registration LIMIT $start, $limit");
			if ($sql->num_rows > 0) {
				$response = "";
				while($data = $sql->fetch_array()) {
					$response .= '
						<tr>
							<!--<td>'.$data["user_id"].'</td>-->
							<td user_id="country_'.$data["user_id"].'">'.$data["user_name"].'</td>
							<td user_id="country_'.$data["user_id"].'">'.$data["last_name"].'</td>
							<td user_id="country_'.$data["user_id"].'">'.$data["gender"].'</td>
							<td user_id="country_'.$data["user_id"].'">'.$data["age"].'</td>
							<td user_id="country_'.$data["user_id"].'">'.$data["nation"].'</td>
							<td user_id="country_'.$data["user_id"].'">'.$data["address"].'</td>
							<td user_id="country_'.$data["user_id"].'">'.$data["email"].'</td>
							<td user_id="country_'.$data["user_id"].'">'.$data["password"].'</td>
							<td user_id="country_'.$data["user_id"].'">'.$data["recive_date"].'</td>
							<td user_id="country_'.$data["user_id"].'">'.$data["code1"].'</td>
							<td user_id="country_'.$data["user_id"].'">'.$data["code2"].'</td>
							<td user_id="country_'.$data["user_id"].'">'.$data["code3"].'</td>

							<td>
								<input type="button" onclick="viewORedit('.$data["user_id"].', \'view\')" value="View" class="btn btn-primary">
								<input type="button" onclick="viewORedit('.$data["user_id"].', \'edit\')" value="Edit" class="btn btn-success">

							</td>


						</tr>
					';
				}
				exit($response);
			} else
				exit('reachedMax');
		}

		$row_id = $conn->real_escape_string($_POST['row_id']);

		$user_id  = $conn->real_escape_string($_POST['user_id']);
		$full_name  = $conn->real_escape_string($_POST['user_name']);
		$last_name = $conn->real_escape_string($_POST['last_name']);
		$gender = $conn->real_escape_string($_POST['gender']);
		$age = $conn->real_escape_string($_POST['age']);
		$nation = $conn->real_escape_string($_POST['nation']);
		$address = $conn->real_escape_string($_POST['address']);
		$email  = $conn->real_escape_string($_POST['email']);
		$password  = $conn->real_escape_string($_POST['password']);
		$recive_date = $conn->real_escape_string($_POST['recive_date']);

		$code1 = $conn->real_escape_string($_POST['code1']);
		$code2 = $conn->real_escape_string($_POST['code2']);
		$code3 = $conn->real_escape_string($_POST['code3']);


		if ($_POST['key'] == 'updateRow') {
			
			$conn->query("UPDATE customer_registration SET code1 ='$code1', code2 ='$code2', code3 ='$code3' WHERE user_id='$row_id'");
			exit('success');
		}

	}
?>
