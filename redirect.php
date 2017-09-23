<?php

// Setup list of links
$links = array(
    'https://www.facebook.com/pages',
);

// Get a random link
$random = rand(0,count($links)-1);

// Redirect to the appropriate link
header("Location: " . $links[$random]);
exit;

?>