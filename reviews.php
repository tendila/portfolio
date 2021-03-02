<?php
    $user = "dev";
    $password = "!devcsao00";
    $database = "csao";
    $table = "reviews";

        try {
          $db = new PDO("mysql:host=localhost;dbname=$database", $user, $password);
          echo "<div class=\"col-sm-8\"> <h1>REVIEWS</h1>";

          foreach($db->query("SELECT title, content FROM $table") as $row) {
            echo "<h5>" . $row['title'] . " </h5>";
            echo "<p>" . $row['content'] . " </p> <div class=\"fakeimg\">Fake Image</div>  <p>Some text..</p> <br>";
          }

          echo "</div>";
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
