<?php

    //including the database connection file
    include_once("dbConnection/db_connect.php");
    //including the fetch file
    include_once("functions/fetch.php");
    
?>

<!DOCTYPE html>
<head>
    <title>Sample CRUD</title>
</head>
<body>
    <h1>My Subjects</h1>
    <a href="forms/addform.php">Add Subject</a><br><br>
    <table width="100%" border=1>
        <tr bgcolor="#CCC">
            <td>ID</td>
            <td>Subject Code</td>
            <td>Subject Name</td>
            <td>Action</td>
        </tr>
        <?php
                while($res = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>".$res['Subject_ID']."</td>";
                    echo "<td>".$res['subject_Code']."</td>";
                    echo "<td>".$res['subject_Name']."</td>";
                    echo "<td><a href=\"forms/editform.php?id=$res[Subject_ID]\">Edit</a> | 
                        <a href=\"functions/delete.php?id=$res[Subject_ID]\" 
                        onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
                }
            ?>
        </table>
    </body>
</html>