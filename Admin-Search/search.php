<?php
    session_start();
    $username = $_SESSION['username'];

    $dbHost     = "localhost"; 
    $dbUsername = "root"; 
    $dbPassword = ""; 
    $dbName     = "warehouse_management_system";
    
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    if ($db->connect_error) 
    { 
        die("Connection failed: " . $db->connect_error); 
    }

    $searchTerm = $_GET['term'];

    $search = array();
    $query = $db->query("SELECT DISTINCT username FROM tbl_user WHERE username LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['username'];
            array_push($search, $data); 
        } 
    }

    $query = $db->query("SELECT DISTINCT firstname FROM tbl_user WHERE firstname LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['firstname'];
            array_push($search, $data); 
        } 
    }

    $query = $db->query("SELECT DISTINCT lastname FROM tbl_user WHERE lastname LIKE '".$searchTerm."%' 
    ORDER BY id ASC"); 
    if($query->num_rows > 0)
    { 
        while($row = $query->fetch_assoc())
        { 
            $data['value'] = $row['lastname'];
            array_push($search, $data); 
        } 
    }

    echo json_encode($search);
?>