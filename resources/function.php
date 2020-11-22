<?php

$uploads_directory = "uploads";

// helper function

function redirect($location){

	return header("Location: $location ");
}