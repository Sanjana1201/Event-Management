<?php
   include_once("header.php");
   include_once("navbar.php");
?>
<html>
<head>
<style>

body {
    background-image: url();
    background-color: white;
}
th {
    text-align: center;
}
tr {
     height: 30px;
}
td {
    padding-top: 5px;
    padding-left: 20px; 
    padding-bottom: 5px;    
    height: 20px;
}


</body>
</style>
</head>
<body><br>
<div class="container">

<body>
    <?php
     echo "<tr>
            <td>";
               // your database connection
               $host       = "localhost"; 
               $username   = "root"; 
               $password   = "";
               $database   = "insertion"; 
               
               // select database
               mysql_connect($host,$username,$password) or die(mysql_error()); 
               mysql_select_db($database) or die(mysql_error()); 

                    $query = ("SELECT * FROM description");
                    $result = mysql_query($query) or die(mysql_error());
                    echo "<div class='container'><table width='' class='table table-bordered' border='1' >
                            <tr>
                                <th>Description</th>
                                
                                <th>Action</th>
                            </tr>";
                        while($row = mysql_fetch_array($result))
                        {
                        echo "<tr>";
                        
                        echo "<td>" . $row['description'] . "</td>";
                      
                        echo "<td><form class='form-horizontal' method='post' action='desclist.php'>
                        <input name='description_id' type='hidden' value='".$row['description_id']."';>
                        <input type='submit' class='btn btn-danger' name='delete' value='Delete'>
                        </form></td>";
                        echo "</tr>";
                        }
                    echo "</table>";

            echo "</td>           
        </tr>";

       // delete record
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        echo '<script type="text/javascript">
                      alert("Schedule Successfuly Deleted");
                         location="list.php";
                           </script>';
    }
    if(isset($_POST['course_id']))
    {
    $course_id = mysql_real_escape_string($_POST['description_id']);
    $sql = mysql_query("DELETE FROM course WHERE description_id='$description_id'");
    if(!$sql)
    {
        echo ("Could not delete rows" .mysql_error());
    }
    
    }
    ?>
</fieldset>
</form>
</div>
</div>
</div>
</div>
    </body>
    </html>
    
<?php
   include_once("footer.php");

?>
