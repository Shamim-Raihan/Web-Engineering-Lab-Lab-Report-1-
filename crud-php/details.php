<?php

include_once("config.php");



?>
<html>

<head>
    <title>Details Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container" style="margin-top:20px;">
        <form class="form-horizontal" method="post" action="add.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Name :-</label>
                <div class="col-sm-10">
                    <?php
                    $id = $_GET['id'];

                    $query_detail = "SELECT * FROM users WHERE id=$id";
                    $result = mysqli_query($mysqli, $query_detail);
                    while ($row = mysqli_fetch_array($result)) {

                        echo "" . $row['name'] . "</br>";
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Age :-</label>
                <div class="col-sm-10">
                    <?php
                    $id = $_GET['id'];

                    $query_detail = "SELECT * FROM users WHERE id=$id";
                    $result = mysqli_query($mysqli, $query_detail);
                    while ($row = mysqli_fetch_array($result)) {

                        echo "" . $row['age'] . "</br>";
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Email :-</label>
                <div class="col-sm-10">
                    <?php
                    $id = $_GET['id'];

                    $query_detail = "SELECT * FROM users WHERE id=$id";
                    $result = mysqli_query($mysqli, $query_detail);
                    while ($row = mysqli_fetch_array($result)) {

                        echo "" . $row['email'] . "</br>";
                    }
                    ?> </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Department :-</label>
                <div class="col-sm-10">
                    <?php
                    $id = $_GET['id'];

                    $query_detail = "SELECT * FROM users WHERE id=$id";
                    $result = mysqli_query($mysqli, $query_detail);
                    while ($row = mysqli_fetch_array($result)) {

                        echo "" . $row['dept'] . "</br>";
                    }
                    ?> </div>
            </div>

        </form>
        <a href="user_list.php" class="btn btn-info" role="button" style="margin-left:90px;">View Result</a>
    </div>

</body>

</html>