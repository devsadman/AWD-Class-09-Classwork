
<?php
    $connection=new mysqli('localhost','root','','school_system');
    $sql="CREATE TABLE users (
        id int NOT NULL AUTO_INCREMENT,
        name varchar(100),
        email varchar(50),
        cell varchar(20),
        location varchar(50),
        status boolean DEFAULT '1',
        trash boolean DEFAULT '0',
        UNIQUE(email,cell),
        PRIMARY KEY (id) 
        )";
    /**
     * database create by prepare statement */
    // $result=$connection->prepare($sql);
    // $result->execute();
    /**
     * Database Create by query satatement
     */
    $connection->query($sql);

?>