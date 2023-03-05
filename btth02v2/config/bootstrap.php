<?php
define("APP_ROOT", dirname(__DIR__, 1));

require APP_ROOT . '/config/functions.php';                 // Functions (NOTE: The path printed in book was wrong, use this path)
require APP_ROOT . '/config/config.php';                 // Configuration data (NOTE: The path printed in book was wrong, use this path)
require APP_ROOT . '/config/validate.php';                 // Configuration data (NOTE: The path printed in book was wrong, use this path)

if (DEV === false) {
    set_exception_handler('handle_exception');           // Set exception handler
    set_error_handler('handle_error');                   // Set error handler
    register_shutdown_function('handle_shutdown');       // Set shutdown handler
}