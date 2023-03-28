<?php
        global $product_id, $product_name, $product_price, $product_stock, $product_desc;
        // Create database connection.
        $config = parse_ini_file('../../private/db-config.ini');
        $conn = new mysqli($config['servername'], $config['username'],
        $config['password'], $config['dbname']);
        
        // Check connection
        if ($conn->connect_error)
        {
            $errorMsg = "Connection failed: " . $conn->connect_error;
            $success = false;
        }
        else
        {
            // Prepare the statement:
            $stmt = $conn->prepare("SELECT * FROM gym_website.products WHERE
            product_id = ?");
            
            // Bind & execute the query statement:
            $stmt->bind_param("s", $product_id);
            $stmt->execute();
            $result = $stmt->get_result();
            
            if ($result -> num_rows > 0){
                // Note that email field is unique, so should only have
            // one row in the result set.
            $row = $result->fetch_assoc();
            $product_name = $row["product_name"];
            $product_price = $row["product_price"];
            $product_stock = $row["product_stock"];
            $product_desc = $row["product_desc"];
        }
        
            }
        ?>