<?php 
    try {
        $db = new PDO("mysql:host=localhost;dbname=healthone", "root", "");
        if (isset($_POST["verzenden"])) {
            
            $naam = $_POST["naam"];
            $titel = $_POST["title"];
            $ervaring = $_POST["description"];
            $nummer = $_POST["rating"];
            
            $query= $db->prepare("INSERT INTO review(naam, title, description, rating) 
                                VALUES (:naam, :title, :description, :rating)");    
            $query->bindParam("naam", $naam);
            $query->bindValue("title", $titel);
            $query->bindParam("description", $ervaring);
            $query->bindParam("rating", $nummer);
            if ($query->execute()) {
                echo "
                <p class='registration'>De plaatsing van uw review is gelukt!</p>";
            } else {
                echo "De review is nog niet geplaatst, controleer de velden of probeer het later opnieuw.";
            }
        } 
        
    }
    catch (PDOException $e) {
        die("Error!: " . $e->getMessage());
    }
    ?>