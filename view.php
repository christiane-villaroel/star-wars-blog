<?php
    session_start();
     // Create connection
     $servername = "localhost";
     $username = "root";
     $password = "BHJoV3XA48B#";
     $dbname = "blog";
     
     
     // Create connection
      $conn = mysqli_connect($servername, $username, $password, $dbname);
     
     // Check connection
     if (!$conn) {
       die("Connection failed: " . mysqli_connect_error());
     }
?>
<!DOCTYPE html>
<html >
<head>
   <!-- Google Fonts -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Days+One&display=swap" rel="stylesheet">
   
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300..700&display=swap" rel="stylesheet">
   <!-- Component Scripts -->
   <script src="header.js" type="text/javascript" defer></script>
   <script src="components/banner.js" type="text/javascript" defer></script>
   <script src="components/footer.js" type="text/javascript" defer></script>
    
    <title>View</title>

    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body id="view-body">
    <banner-component class="banner"></banner-component>
    <header-component class="nav"></header-component>
    <main>
       <h2 class="days-one" id="view-header">View</h2>
       <div id="view-container">
        <table class="user-table jura">
            <tr>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
            </tr>
            <?php
                $sql = "SELECT * FROM users";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "
                            <tr>
                                <td>" 
                                . $row["username"] . 
                                "</td>
                                <td>" 
                                . $row["email"] . 
                                "</td>
                                <td>" 
                                . $row["password"] . 
                                "</td>
                                <td>
                                    <form action='delete-process.php' method='post'>
                                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                                        <button type='submit' name='delete' value='delete'>Delete</button>
                                    </form>
                                </td>
                                 <td>
                                    <form action='Edit-process.php' method='post'>
                                        <input type='hidden' name='id' value='" . $row["id"] . "'>
                                        <button type='submit' name='edit' value='edit'>Edit</button>
                                    </form>
                                </td>
                            </tr>
                        ";
                    }
                } else {
                    echo "0 results";
                }
            
            ?>
            
                
        </table>
       </div>
    </main>
    <footer-component class="footer"></footer-component>
    <script src="scripts.js"></script>
    
</body>
</html>