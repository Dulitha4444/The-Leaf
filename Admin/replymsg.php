<?php
	if (isset($_POST['key'])) {

		$conn = new mysqli('localhost', 'root', '', 'leaf');

		if ($_POST['key'] == 'getRowData') {
			$rowID = $conn->real_escape_string($_POST['rowID']);
			$sql = $conn->query("SELECT id, cust_name, cust_email, cust_msg, reply_msg, send_date FROM reply_message WHERE id='$rowID'");
			$data = $sql->fetch_array();
			$jsonArray = array(
				'id' => $data['id'],
				'cust_name' => $data['cust_name'],
				'cust_email' => $data['cust_email'],
				'cust_msg' => $data['cust_msg'],
				'reply_msg' => $data['reply_msg'],
				'send_date' => $data['send_date'],
			);

			exit(json_encode($jsonArray));
 		}

		if ($_POST['key'] == 'getExistingData') {
			$start = $conn->real_escape_string($_POST['start']);
			$limit = $conn->real_escape_string($_POST['limit']);

			$sql = $conn->query("SELECT id, cust_name, cust_email, cust_msg, reply_msg, send_date FROM reply_message LIMIT $start, $limit");
			if ($sql->num_rows > 0) {
				$response = "";
				while($data = $sql->fetch_array()) {
					$response .= '
						<tr>
							<!--<td>'.$data["id"].'</td>-->
							<td id="country_'.$data["id"].'">'.$data["cust_name"].'</td>
							<td id="country_'.$data["id"].'">'.$data["cust_email"].'</td>
							<td id="country_'.$data["id"].'">'.$data["cust_msg"].'</td>
							<td id="country_'.$data["id"].'">'.$data["reply_msg"].'</td>
							<td id="country_'.$data["id"].'">'.$data["send_date"].'</td>


							<td>
								<input type="button" onclick="viewORedit('.$data["id"].', \'view\')" value="View" class="btn btn-primary">
								<input type="button" onclick="deleteRow('.$data["id"].')" value="Delete" class="btn btn-danger">
							</td>

						</tr>
					';
				}
				exit($response);
			} else
				exit('reachedMax');
		}

		$rowID = $conn->real_escape_string($_POST['rowID']);

		if ($_POST['key'] == 'deleteRow') {
			$conn->query("DELETE FROM reply_message WHERE id='$rowID'");
			exit('The Message Has Been Deleted!');
		}

	}
?>
