<?php
    
    include("connection.php"); 

    $email = $_POST['e-mail'];
    $firstname = $_POST['f-name'];
    $lastname = $_POST['l-name'];
    $address = $_POST['address'];
    $town = $_POST['town'];
    $postalcode = $_POST['postal-code'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO buyer (email, fname, lname, Homeaddress, town, postalcode, phone)
    VALUES('$email', '$firstname', '$lastname', '$address', '$town', '$postalcode', '$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>