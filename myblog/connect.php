<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="blogo.css">
</head>

<body>
    <div class="main">
        <ul class="navbar">
            <li><a href="home.html">Home</a></li>
            <li><a href="blog.html">Blog</a></li>
        </ul>
    </div>
    <div class="nos">
        <h2> Photos</h2>
        <span>Photos I've took locally or while traveling.</span>
    </div>

    <!-- <form action="" method="POST" enctype="multipart/form-data"> -->
    <div class="vlog">
        <?php
        $conn_error = "could not connect";
        $mysql_host = 'localhost';
        $mysql_user = 'root';
        $mysql_pass = '';
        $mysql_db = 'a_database';
        $conn = @mysqli_connect($mysql_host, $mysql_user, $mysql_pass);

        if (!@mysqli_connect($mysql_host, $mysql_user, $mysql_pass) || !mysqli_select_db($conn, "a_database")) {

            die($conn_error);
        }




        $sql = "SELECT * FROM `blogo`";
        if ($result = mysqli_query($conn, $sql)) {
            if (mysqli_num_rows($result) > 0) {


                while ($row = mysqli_fetch_array($result)) {


                    echo '<img class="imago" src="' . $row['imagz'] . '"/>';
                    // echo '<img class="imago" src="' . $row['image'] . '" width="600" height="600" />';

                }


                mysqli_free_result($result);
            } else {
                echo "No records found";
            }
        }
        ?>
    </div>
    <!-- </form> -->
</body>

</html>