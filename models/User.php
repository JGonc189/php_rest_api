<?php
    class User {
        // db stuff goes here
        private $conn;
        private $table = 'User';

        // properties
        public $UserID;
        public $EmailAddress;
        public $Password;
        public $Gender;
        public $DOB;
        public $Location;

        // constructor with db
        public function __construct($db) {
            $this->$conn = $db;
        }

        // display user info
        public function grab_user() {
            // create our query
            $query = 'SELECT UserID, EmailAddress from User WHERE UserID = 1';

            // prepare statement
            $stmt->$this-$conn-prepare($query);

            // bind ID
            $stmt->bindParam(1, $this->UserID);

            // execute query
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            // set properties
            $this->UserID = $row['UserID'];
            $this->EmailAddress = $row['EmailAddress'];
        }

    }