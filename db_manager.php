<?php
    
    function get_connection(){
        $servername = "localhost:3307";
        $username = "root";
        $password = "root";
        $dbname = "examen";
    
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            return false;
        } 
        return $conn;
    
    }
    function get_results($search){
        $conn = get_connection();
        $sql = "SELECT sentence AS quote FROM refranero WHERE sentence LIKE '".$search."%'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          
            while($row = $result->fetch_assoc()) {

                echo "
                    <p>".$row['quote']."</p>
                ";
            }
            
        }
        $conn->close();

    }

?>