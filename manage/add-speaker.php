<!DOCTYPE html>
<html>
<head>
<title>Add Speaker | Assessny Dashboard</title>
<?php include('links.php') ?>
<style>
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 100%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #4CAF50;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
input, select, textarea {
    outline: none;
}
</style>
</head>
<body>
<?php include('menu.php') ?>

<div class="content" style="text-align: center;">

<div style="border: 1px solid #CCC;padding: 25px;display: inline-block;margin-top: 10%;max-width: 100%;width: 500px">
<h1 style="text-transform: uppercase;font-weight: 200;font-size: 2em;margin-bottom:5%">Add Speaker</h1>
<form method="POST" enctype="multipart/form-data">
    <input type="text" name="speaker-name" placeholder="Speaker Name" style="display: block;max-width:100%;padding: 8px;border: 1px solid #CCC;border-radius: 3px;margin-bottom: 5%;width: 100%" required>
    <input type="text" name="speaker-role" placeholder="Speaker Role" style="display: block;max-width:100%;padding: 8px;border: 1px solid #CCC;border-radius: 3px;margin-bottom: 5%;width: 100%" required>
    <input type="text" name="speaker-company" placeholder="Company / Website" style="display: block;max-width:100%;padding: 8px;border: 1px solid #CCC;border-radius: 3px;margin-bottom: 5%;width: 100%" required>
    <textarea name="details" placeholder="Details" style="display: block;max-width:100%;padding: 8px;border: 1px solid #CCC;border-radius: 3px;margin-bottom: 5%;width: 100%;height:150px" required></textarea>
    <input type="file" name="picture-upload" style="display: block;" required>
    <input type="submit" name="upload" class="btn btn-outline-success" value="Upload Speaker" style="margin-top: 5%;">
</form>
<?php

if(isset($_POST['upload'])) {
$name = $_POST['speaker-name'];
$role = $_POST['speaker-role'];
$company = $_POST['speaker-company'];
$details = $_POST['details'];
$targetDir = "../speakers/";
$main_pic_name = basename($_FILES["picture-upload"]["name"]);
$targetFilePathMain = $targetDir . $main_pic_name;
$fileTypeMain = pathinfo($targetFilePathMain,PATHINFO_EXTENSION);

if($name !== "" && $role !== "" && $company !== "" && $details !== "" && move_uploaded_file($_FILES["picture-upload"]["tmp_name"], $targetFilePathMain)) {
    $query_select = mysqli_query($connect, "SELECT * FROM speakers WHERE name = '$name' AND company = '$company'");
    if(mysqli_num_rows($query_select) > 0) {
        echo "<div class='alert alert-danger'>You added it before</div>";
    } else {
        $sql = "INSERT INTO speakers (name, role, company, details, pic) VALUES ('$name', '$role', '$company', '$details', '$main_pic_name')";
        $query = mysqli_query($connect, $sql);
        $current_url = $_SERVER['REQUEST_URI'];
        header('Location: '.$current_url.'');
    }
} else {
    echo "<div class='alert alert-danger'>Thats a problem in this request</div>";
}
}

?>
</div>

</div>

</body>
<?php include('scripts.php') ?>
</html>