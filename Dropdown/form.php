<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add</title>
    <style>
        <?php include "../css/form.css" ?>
    </style>
</head>

<body>
    <?php
    if (!isset($_SESSION)) {
        session_start();
    }
    include('../database/db_connection.php');
    if (isset($_POST['submit'])) {
        $ID = $_POST['id'];
        $Title = $_POST['title'];
        $Under = $_POST['course'];
        $Timetaken = $_POST['appt'];
        $Ingredients = $_POST['ing'];


        if (($_FILES['upload_file']['name'] != '')) {
            date_default_timezone_set('Asia/Kolkata');
            $current_date = date('dmYHis');
            $target_dir = "uploads/";
            $file = $_FILES['upload_file']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['upload_file']['tmp_name'];
            $file_name = $current_date . '.' . $ext;
            $path_file = $target_dir . $file_name;
            move_uploaded_file($temp_name, $path_file);
            //$roll_no = "roll_no";

            $query = mysqli_query($conn, "INSERT INTO `saved`(`title`, `under`, `time taken`, `ingredients`, `file`) VALUES ('$Title', '$Under', '$Timetaken', '$Ingredients', '$path_file')");
            if ($query) {
                $_SESSION['uploaded'] = true;
                // $_SESSION['image']=
            }
        }
    }
    ?>

    <?php
    if (isset($_POST['edit'])) {
        $ID = $_POST['id'];
        $Title = $_POST['title'];
        $Under = $_POST['course'];
        $Timetaken = $_POST['appt'];
        $Ingredients = $_POST['ing'];

        if (($_FILES['upload_file']['name'] != '')) {
            date_default_timezone_set('Asia/Kolkata');
            $current_date = date('dmYHis');
            $target_dir = "uploads/";
            $file = $_FILES['upload_file']['name'];
            $path = pathinfo($file);
            $filename = $path['filename'];
            $ext = $path['extension'];
            $temp_name = $_FILES['upload_file']['tmp_name'];
            $file_name = $current_date . '.' . $ext;
            $path_file = $target_dir . $file_name;
            move_uploaded_file($temp_name, $path_file);
            $query = mysqli_query($conn, "UPDATE `saved` SET `title`='$Title',`under`='$Under',`time taken`='$Timetaken',`ingredients`='$Ingredients',`file`='$path_file' WHERE `id`='$ID'");

            if ($query) {
                echo "Data edited";
            } else {
                echo $conn->error;
            }
        }
    }
    ?>
    <?php
    if (isset($_POST['delete'])) {
        $ID = $_POST['id'];
        $Title = $_POST['title'];
        $Under = $_POST['course'];
        $Timetaken = $_POST['appt'];
        $Ingredients = $_POST['ing'];
        $query = mysqli_query($conn, "DELETE FROM `saved` WHERE `id`='$ID'");
        if ($query) {
            echo "Data deleted";
        } else {
            echo $conn->error;
        }
    }
    ?>

    <div class="btn">
        <a href="../Main/index.php" class="button">Back</a>
    </div>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="container">
            <label for="id">ID</label>
            <input type="number" name="id" class="id" id="r_id"><br><br>
            <label for="title">Title</label>
            <input type="text" name="title" class="title" id="r_title"><br><br>
            <label for="under">Under</label>
            <select name="course" id="course">
                <option value="Starter">Starter</option>
                <option value="Main">Main</option>
                <option value="Dessert">Dessert</option>
                <option value="Drink">Drink</option>
            </select><br><br>
            <label for="time">Time Taken</label>
            <input type="time" id="appt" name="appt"><br><br>
            <label for="ing" cols="40" rows="5">Ingredients</label>
            <textarea name="ing" class="ing" cols="30" rows="15" id="ingredients"></textarea><br>
            <!-- <input type="text" name="ing" class="ing" id="ingredients"><br><br> -->
            <label for="file_upload">Photo: &#160; &#160;&#160;&#160;</label>
            <input type="file" name="upload_file" id="file_upload" accept="image/png"><br><br>
            <input type="submit" name="submit" value="Submit now" class="but" />
            <input type="reset" name="reset" value="Reset" class="but-2" />
            <input type="submit" name="edit" value="edit now" class="but" />
            <input type="submit" name="delete" value="delete now" class="but" />
        </div>
    </form>
</body>

</html>