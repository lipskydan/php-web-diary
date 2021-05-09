<?php

function open_connection(){
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $database = "php-web-diary";
    $table = "Diary";

    $conn = new mysqli($servername, $username, $password, $database);

    if (mysqli_connect_error()) {
        die("<p align='center'>Database connection failed:  . mysqli_connect_error()</p>");
    }
//    echo "<p align='center'> Connected successfully </p>";

    $sql = /** @lang text */
        "CREATE TABLE IF NOT EXISTS $table (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    header_topic VARCHAR(100) NOT NULL,
    text TEXT NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
//        echo "<p align='center'> Table " . $table . " created successfully </p>";
    } else {
        echo "<p align='center'> Error creating table: . $conn->error </p>";
    }
    return $conn;
}

function close_connection($conn){
    $conn -> close();
}

function insert_new_post($header_topic,$text, $conn){
    $sql = "INSERT INTO Diary (header_topic, text) VALUES ('$header_topic', '$text')";
    if(mysqli_query($conn, $sql)){
        echo "<h3><p align='center'> Post added successfully. </p></h3>";
    } else{
        echo "<p align='center'>ERROR: Could not able to execute $sql . mysqli_error($conn) </p>";
    }
}

function get_all_posts($conn){
    $sql = "SELECT header_topic, text FROM Diary";
    return $conn->query($sql);


}
