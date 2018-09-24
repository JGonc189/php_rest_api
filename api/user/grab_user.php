<?php
    // headers
    header('Access-Control-Allow-Origins: *');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/User.php';

    // instantiate the db and connect
    $database = new Database();
    $db = $database->connect();

   // instantiate user object
   $user = new User($db);

   // get id
   $user->UserID = isset($_GET['UserID']) ? $_GET['UserID'] : die();

   // get user
   $user->grab_user();

   // create array
   $user_arr = array(
       'UserID' => $user->UserID,
       'EmailAddress' => $user->EmailAddress
   );

   // make JSON
   print_r(json_encode($post_arr));

