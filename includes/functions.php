<?php 
	function url($url) {
		return header("Location: " . $url);
	}

	function escape($string) {
		return htmlentities($string, ENT_QUOTES, "UTF-8");
	}

	function startServer() {

	}