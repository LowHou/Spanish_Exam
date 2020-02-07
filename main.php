<?php 
/* COMPLETE THIS FILE WITH PHP */
	require_once("db_manager.php");
	if (isset($_GET['search']) && $_GET['search'] != "") {
		$search = $_GET['search'];
		$search[0] = strtoupper($search[0]); 
		get_results($search);
	}

?>