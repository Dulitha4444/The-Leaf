<?php
	if (isset($_POST['key'])) {

		$conn = new mysqli('localhost', 'root', '', 'leaf');

		if ($_POST['key'] == 'getRowData') {
			$rowID = $conn->real_escape_string($_POST['rowID']);
			$sql = $conn->query("SELECT id, user_name, user_password, user_type FROM login_details WHERE id='$rowID'");
			$data = $sql->fetch_array();
			$jsonArray = array(
				'id' => $data['id'],
				'user_name' => $data['user_name'],
				'user_password' => $data['user_password'],
				'user_type' => $data['user_type'],

			);

			exit(json_encode($jsonArray));
 		}

		if ($_POST['key'] == 'getExistingData') {
			$start = $conn->real_escape_string($_POST['start']);
			$limit = $conn->real_escape_string($_POST['limit']);

			$sql = $conn->query("SELECT id, user_name, user_password, user_type FROM login_details WHERE id= 1 LIMIT $start, $limit");
			if ($sql->num_rows > 0) {
				$response = "";
				while($data = $sql->fetch_array()) {
					$response .= '
						<tr>
							<!--<td>'.$data["id"].'</td>-->
							<td id="country_'.$data["id"].'">'.$data["user_name"].'</td>
							<td id="country_'.$data["id"].'">'.$data["user_type"].'</td>
							<td id="country_'.$data["id"].'">'.$data["user_password"].'</td>

							<td>
								<input type="button" onclick="viewORedit('.$data["id"].', \'view\')" value="View" class="btn btn-primary">
								<input type="button" onclick="viewORedit('.$data["id"].', \'edit\')" value="Change Password" class="btn btn-success">

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
		//$user_name  = $conn->real_escape_string($_POST['user_name']);
		$user_password = $conn->real_escape_string($_POST['user_password']);
		//$user_type  = $conn->real_escape_string($_POST['user_type']);

		if ($_POST['key'] == 'updateRow') {
			$conn->query("UPDATE login_details SET user_password='$user_password' WHERE id=1");
			exit('success');
		}

	}
?>
