<?php
            define("USER", 'root');
            define("PASSWORD", 'root');
            define("DSN", 'mysql:host=localhost;dbname=searche_fr1');
            try {
                $pdo = new PDO(DSN, USER, PASSWORD);
            } catch (PDOException $e) {
                die("Error ! : " . $e->getMessage());
            }
?>