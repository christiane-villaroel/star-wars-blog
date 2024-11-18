<?php
    session_start();
     // Create connection
     
     include 'db.php';
?>
<!DOCTYPE html>
<html >
<head>
    <?php include 'linkHead.php';?>
    <title>View</title>
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