<?php

	session_start();
	unset($_SESSION['nama']);
	unset($_SESSION['kode']);
	session_unset();
	session_destroy();

	header("Location: index.php");