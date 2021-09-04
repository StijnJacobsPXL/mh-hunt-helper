<?php
define('not_direct_access', TRUE);
require_once "check-ban.php";

require_once "check-cors.php";

require_once "config.php";

require_once "check-version.php";

require_once "uuid.php";

require_once "check-time.php";

$pdo;
setPDO();

require_once "rh-intake.php";

require_once "check-15mins.php";

require_once "temp-fixes.php";

require_once "hunt-intake.php";

require_once "giveaway-intake.php";

sendResponse('success', "Thanks for the hunt info!");

// ============ COMMON FUNCTIONS ============
function sendResponse($status, $message) {
    $response = json_encode([
        'status' => $status,
        'message' => $message
    ]);
    die($response);
}

function setPDO() {
    global $servername, $dbname, $username, $password, $pdo;
    // PDO
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
