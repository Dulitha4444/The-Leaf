<?php
	if (isset($_POST['key'])) {

		$conn = new mysqli('localhost', 'root', '', 'leaf');

		if ($_POST['key'] == 'getRowData') {
			$rowID = $conn->real_escape_string($_POST['rowID']);
			$sql = $conn->query("SELECT id, username, phone_number, email, reply, recive_date  FROM contact WHERE id='$rowID'");
			$data = $sql->fetch_array();
			$jsonArray = array(
				'id' => $data['id'],
				'username' => $data['username'],
				'phone_number' => $data['phone_number'],
				'email' => $data['email'],
				'reply' => $data['reply'],
				'recive_date' => $data['recive_date'],
			);

			exit(json_encode($jsonArray));
 		}

		if ($_POST['key'] == 'getExistingData') {
			$start = $conn->real_escape_string($_POST['start']);
			$limit = $conn->real_escape_string($_POST['limit']);

			$sql = $conn->query("SELECT id, username, phone_number, email, reply, recive_date FROM contact LIMIT $start, $limit");
			if ($sql->num_rows > 0) {
				$response = "";
				while($data = $sql->fetch_array()) {
					$response .= '
						<tr>
							<!--<td>'.$data["id"].'</td>-->
							<td id="country_'.$data["id"].'">'.$data["username"].'</td>
							<td id="country_'.$data["id"].'">'.$data["phone_number"].'</td>
							<td id="country_'.$data["id"].'">'.$data["email"].'</td>
							<td id="country_'.$data["id"].'">'.$data["reply"].'</td>
							<td id="country_'.$data["id"].'">'.$data["recive_date"].'</td>


							<td>
								<input type="button" onclick="viewORedit('.$data["id"].', \'view\')" value="View" class="btn btn-primary">
								<input type="button" onclick="viewORedit('.$data["id"].', \'edit\')" value="Reply" class="btn btn-success">

							</td>


						</tr>
					';
				}
				exit($response);
			} else
				exit('reachedMax');
		}

		$rowID = $conn->real_escape_string($_POST['rowID']);

		//$id  = $conn->real_escape_string($_POST['id']);
		$username  = $conn->real_escape_string($_POST['username']);
		$email = $conn->real_escape_string($_POST['email']);
		$reply  = $conn->real_escape_string($_POST['reply']);
		$rmessage  = $conn->real_escape_string($_POST['rmessage']);

		$dataTime = date("Y-m-d H:i:s");

		if ($_POST['key'] == 'updateRow') {
			$conn->query("INSERT INTO reply_message (cust_name, cust_email, cust_msg, reply_msg, send_date)
							VALUES ('$username', '$email', '$cust_msg', '$rmessage', '$dataTime')");
			exit('Message send');
		}

	}
?>
