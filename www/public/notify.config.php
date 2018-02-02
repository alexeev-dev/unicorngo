<?php

/* Notification letter config */

$config = Array(
    'password' => '', // Password to access notification page.
    'email' => 'info@unicorngo.io', // Your email address. It will go to "FROM" field.
    'name' => 'unicorn Service', // Your name. It will also go to "FROM" field.
    'subject' => 'You are AWESOME! UnicornGO', // The subject of your letter.
    'message' => 'Congratulations! You are awesome!' // The text of your letter. %s will be replaced with user name.
);

return $config;

?>