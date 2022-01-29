<?php

class Helperlend{


    //database connection create

    public function __construct()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "project2";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
    }

    
  /*
  
  public function Contectus()
    {
        $sql = "INSERT INTO ConetctUs (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com')";

        if (mysqli_query($conn, $sql)) {
             echo "New record created successfully";
            } 
            else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                 }

           mysqli_close($conn);
        }
    }

?>
*/