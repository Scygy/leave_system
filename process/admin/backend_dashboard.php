<?php 
include '../conn.php';


$method = $_POST['method'];

if ($method == 'fetch_data') {
	$emp_id = $_POST['emp_id'];
	$emp_name = $_POST['emp_name'];
	$c = 0;

	$fetch = "SELECT * FROM employee WHERE id_no LIKE '%$emp_id%' AND full_name LIKE '%$emp_name%'";
	$stmt = $conn->prepare($fetch);
	$stmt->execute();
	if ($stmt->rowCount() > 0) {
		foreach ($stmt->fetchALL() as $x) {
			$c++;



			echo '<tr style="cursor:pointer;" class="modal-trigger" data-toggle="modal" data-target="#emp_details" onclick="details_leave(&quot;'.$x['id'].'~!~'.$x['id_no'].'~!~'.$x['full_name'].'~!~'.$x['department'].'~!~'.$x['date_hired'].'~!~'.$x['remaining_leaves'].'&quot;)">';
				echo '<td>'.$c.'</td>';
				echo '<td>'.$x['id_no'].'</td>';
				echo '<td>'.$x['full_name'].'</td>';
				echo '<td>'.$x['department'].'</td>';
				echo '<td>'.$x['remaining_leaves'].'</td>';
			echo '</tr>';
		}
	}
}



$conn = NUll;



?>