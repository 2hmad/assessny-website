<!DOCTYPE html>
<html>
<head>
<title>Add Event | Assessny Dashboard</title>
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
<h1 style="text-transform: uppercase;font-weight: 200;font-size: 2em;margin-bottom:5%">Add Event</h1>
<form method="POST" enctype="multipart/form-data">
    <input type="text" name="event-city" placeholder="City" style="display: block;max-width:100%;padding: 8px;border: 1px solid #CCC;border-radius: 3px;margin-bottom: 5%;width: 100%" required>
    <input type="number" name="event-date-day" placeholder="Event Day" style="display: inline-block;max-width:100%;padding: 8px;border: 1px solid #CCC;border-radius: 3px;margin-bottom: 5%;width: 145px" required>
    <select name="event-date-month" style="display: inline-block;max-width:100%;padding: 8px;border: 1px solid #CCC;border-radius: 3px;margin-bottom: 5%;width: 145px" required>
        <option value="" hidden>Event Month</option>
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
        <option>July</option>
        <option>August</option>
        <option>September</option>
        <option>October</option>
        <option>November</option>
        <option>December</option>
    </select>
    <input type="number" name="event-date-year" placeholder="Event Year" value="<?php $year = date("Y"); echo $year; ?>"  style="display: inline-block;max-width:100%;padding: 8px;border: 1px solid #CCC;border-radius: 3px;margin-bottom: 5%;width: 145px" required>
    <lable style="display:block;text-align: left;">Starting Date:</lable>
    <input type="time" name="event-time-from" title="From" style="width:100%;display: block;max-width:100%;padding: 8px;border: 1px solid #CCC;border-radius: 3px;margin-bottom: 5%;" required>
    <lable style="display:block;text-align: left">Ending Date:</lable>
    <input type="time" name="event-time-to" title="To" style="width:100%;display: block;max-width:100%;padding: 8px;border: 1px solid #CCC;border-radius: 3px;margin-bottom: 5%;" required>
    <textarea name="event-details" style="width:100%;max-width:100%;display:block;padding: 8px;border: 1px solid #CCC;border-radius: 3px;margin-bottom: 5%;height: 150px;" placeholder="Details" required></textarea>
    <input type="file" name="picture-upload" style="display: block;" required>
    <input type="submit" name="upload" class="btn btn-outline-success" value="Upload Event" style="margin-top: 5%;">
</form>
<?php

if(isset($_POST['upload'])) {
$city = $_POST['event-city'];
$day = $_POST['event-date-day'];
$month = $_POST['event-date-month'];
$year = $_POST['event-date-year'];
$from = $_POST['event-time-from'];
$to = $_POST['event-time-to'];
$details = $_POST['event-details'];
$targetDir = "../events-pics/";
$main_pic_name = basename($_FILES["picture-upload"]["name"]);
$targetFilePathMain = $targetDir . $main_pic_name;
$fileTypeMain = pathinfo($targetFilePathMain,PATHINFO_EXTENSION);

if($city !== "" && $day !== "" && $month !== "" && $year !== "" && $from !== "" && $to !== "" && $details !== "" && move_uploaded_file($_FILES["picture-upload"]["tmp_name"], $targetFilePathMain)) {
    $sql = "INSERT INTO events
    (city, day, month, year, time_from, time_to, details, pic) 
    VALUES ('$city', '$day', '$month', '$year', '$from', '$to', '$details', '$main_pic_name')";
    $query = mysqli_query($connect, $sql);
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