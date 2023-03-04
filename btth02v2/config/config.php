<?php
define('DEV', true);

// File upload settings
// define('UPLOADS', dirname(__DIR__, 1) . DIRECTORY_SEPARATOR . 'public' . DIRECTORY_SEPARATOR . 'uploads' . DIRECTORY_SEPARATOR); // Image upload folder
define('MEDIA_TYPES', ['image/jpeg', 'image/png', 'image/gif',]); // Allowed file types
define('FILE_EXTENSIONS', ['jpeg', 'jpg', 'png', 'gif',]);        // Allowed file extensions
define('MAX_SIZE', '5242880');                                    // Max file size



spl_autoload_register(function($class)                   // Set autoload function
{
    $path = APP_ROOT . '/src/classes/';                  // Path to class definitions
    require $path . $class . '.php';                     // Include class definition
});

unset($dsn, $username, $password);                       // Remove database config data
?>