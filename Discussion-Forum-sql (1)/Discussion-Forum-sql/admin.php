<html>
<head>
<title>Admin page</title>
<link rel="stylesheet" type="text/css" href="../css/category.css">
<style>
.divigr:hover{
	background-color:#e6f2ff;
	width:60%;
	transition-duration: 0.4s;
	margin-left:25px;
}
.divigr
{
	margin-left:15px;
	width:60%;
}
.box {
            display: flex;
            flex-direction: row;
            justify-content: center;

        }

        table{
            width: 70%;
            border: 1px solid var(--colour1);
            margin: 50px;
            border-collapse: collapse;
        }
        
        tr{
            color: var(--colour1);
            height: 50px;
        }
        tr:nth-child(odd){
            background-color: var(--colour2);
        }

        td,th {
            height: 60px;
            text-align:center;
            border: 1px solid var(--colour1);
            padding: 1rem;
            text-align: center;
            max-width: 250px;
        }

        button {
            padding: 0.5rem 1.5rem;
        }

        a {
            font-weight: 900;
            color: var(--colour1);
        }
        button{
            margin: 0px;
        }
</style>
</head>

<body>
<?php

include 'nvgbar.php';

?>
<br><br>
<div class="formstyle">
<center>
<h1 style="background-color:gray;">ADMIN<span></span></h1>
</center>
  
        <div class="box">
            <table>
                <tr>
                    <td>
                        <h4>UserId</h4>
                    </td>
                    <td>
                        <h4>Name</h4>
                    </td>
                    <td>
                        <h4>UserName</h4>
                    </td>
                    <td>
                        <h4>Status</h4>
                    </td>
                    <td>
                        <h4>Change Status</h4>
                    </td>

                </tr>
                <?php 
                $query = mysqli_query($connection,"SELECT * FROM users");
                while ($r = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                    $table[] = $r;
                }
                //$table = mysqli_fetch_assoc($query);
                foreach ($table as $row) {
                    //print_r($row);
                    $uname = $row["username"];
                    $color = $row["is_active"] == 0 ? "#049b706c" : "#630f0f6c";

                ?>
                <script>
                    function unblock ($uname) {
                        
                        <?php 
                            $query = mysqli_query($connection,"SELECT * FROM users WHERE username='$uname' limit 1");
                            $row1 = mysqli_fetch_array($query);
                            $nm=$row["username"];
                            mysqli_query($connection, "UPDATE users SET is_active=0 WHERE username='$nm'");
                        ?>
                    }
                    function block ($uname) {
                        
                        <?php 
                            $query = mysqli_query($connection,"SELECT * FROM users WHERE username='$uname' limit 1");
                            $row1 = mysqli_fetch_array($query);
                            $nm=$row["username"];
                            mysqli_query($connection, "UPDATE users SET is_active=1 WHERE username='$nm'");
                        ?>
                    }
                </script>
                    <tr style="background-color: <?php echo $color; ?>">
                        <td><b><?php echo $row['id']; ?></b></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><?php echo $row["username"]; ?></td>
                        <td><?= $row["is_active"] == 0 ? "Active" : "Blocked" ?></td>
                        <td>
                            <?php
                            if ($row["is_active"] == 0) {
                                $uname = $row["username"];
                                //echo "<a href='admin.php?username=", urlencode($uname), "'>
                                echo"<button onclick=\"block($uname)\">Block</button>";
                            } else {
                                echo"<button onclick=\"block($uname)\">Unblock</button></a>";
                            } 
                        
                        ?>

                        </td>

                    </tr>
            <?php }
            // } 
            // else {
            //     echo "Please Login";
            // } ?>
            </table>
        </div>

</body>
</html>
