<?php
	session_start();
	if (isset($_POST["login"])) {
		$user = $_POST["user"];
		$pwd = md5($_POST["pass"]);
		$srv = "localhost";
		$usr = "root";
		$con = new mysqli($srv,$usr);
		$que = mysqli_query($con, "SELECT * FROM `Srv`.`authUsers` WHERE 1");
		if ($que->num_rows > 0) {
			while ($data = $que->fetch_assoc()) {
				if ($user == $data["name"]) {
					if ($pwd == md5($data["key"])) {
						$_SESSION["user"] = $user;
						echo "../index.php";
					}
				}
			}
		}
	}
	if (isset($_GET["logout"])) {
		session_destroy();
	}
?>