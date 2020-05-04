<?php
date_default_timezone_set('Europe/Vilnius');
session_start();

if (isset($_POST['submit'])) {
	foreach ($_POST as $key => $value) {
		$_SESSION['info-message'][$key] = $value;
	}
}
