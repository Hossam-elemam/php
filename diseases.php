 <?php

include "conniction.php" ;
 $query = $db->query("SELECT * From diseases");
	$result = array();

	while ($rowData = $query->fetch_assoc()) {
		$result[] = $rowData;
	}

	echo json_encode($result);