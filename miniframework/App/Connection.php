<?php

    namespace App;

use PDOException;

    class Connection {
        public function getDb {
            try {

                $conn = new PDO(
                    "mysql:host=localhost;dbname=mvc;charset=utf8",
                    "root",
                    ""
                );

                return $conn;

            } catch (PDOException $e) {
                //.. trtar de algima forma ..//
            }
        }
    }

?>