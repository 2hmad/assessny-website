<!DOCTYPE html>
<html>
<head>
<title>Edit Next Event | Assessny Dashboard</title>
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
<h1 style="text-transform: uppercase;font-weight: 200;font-size: 2em;margin-bottom:5%">Next Event</h1>
<form method="POST" enctype="multipart/form-data">
    <input type="text" name="event-city" placeholder="City" style="display: block;max-width:100%;padding: 8px;border: 1px solid #CCC;border-radius: 3px;margin-bottom: 5%;width: 100%" required>
    <lable style="display:block;text-align: left;">Starting Date:</lable>
    <input type="number" name="event-date-day-start" placeholder="Event Day" style="display: block;max-width:100%;padding: 8px;border: 1px solid #CCC;border-radius: 3px;margin-bottom: 5%;width: 100%" required>
    
    <lable style="display:block;text-align: left">Ending Date:</lable>
    <input type="number" name="event-date-day-end" placeholder="Event Day" style="display: block;max-width:100%;padding: 8px;border: 1px solid #CCC;border-radius: 3px;margin-bottom: 5%;width: 100%" required>
    <select name="event-date-month" style="display: block;max-width:100%;padding: 8px;border: 1px solid #CCC;border-radius: 3px;margin-bottom: 5%;width: 100%" required>
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
    <input type="submit" name="upload" class="btn btn-outline-success" value="Add Event" style="margin-top: 5%;">
</form>
<form method="POST">
  <input type="submit" name="coming-soon" class="btn btn-dark" value="Coming Soon ?" style="margin-top: 5%;">
</form>
<?php

if(isset($_POST['upload'])) {
$city = $_POST['event-city'];
$day_start = $_POST['event-date-day-start'];
$day_end = $_POST['event-date-day-end'];
$month_end = $_POST['event-date-month'];

if($city !== "" && $day_start !== "" && $day_end !== "" && $month_end !== "") {
    $sql_select = "SELECT * FROM next_event";
    $query_select = mysqli_query($connect, $sql_select);
    $num_select = mysqli_fetch_row($query_select);
    if($num_select > 0) {
        $sql = "UPDATE next_event SET city='$city', event_start='$day_end', event_end='$day_end $month_end', soon='0'";
        $query = mysqli_query($connect, $sql);
        echo "<div class='alert alert-success'>Updated Successfully</div>";
    } else {
        $sql = "INSERT INTO next_event
        (city, event_start, event_end) 
        VALUES ('$city', '$day_start', '$day_end $month_end')";
        $query = mysqli_query($connect, $sql);    
        echo "<div class='alert alert-success'>Added Successfully</div>";
    }
} else {
    echo "<div class='alert alert-danger'>Thats a problem in this request</div>";
}
}

if(isset($_POST['coming-soon'])) {
  $sql_select = "SELECT * FROM next_event";
  $query_select = mysqli_query($connect, $sql_select);
  $num_select = mysqli_fetch_row($query_select);
  if($num_select > 0) {
      $sql = "UPDATE next_event SET city='', event_start='', event_end='', soon='1'";
      $query = mysqli_query($connect, $sql);
      echo "<div class='alert alert-success'>Updated to Coming soon</div>";
  } else {
      $sql = "INSERT INTO next_event
      (city, event_start, event_end, soon) 
      VALUES ('', '', '', '1')";
      $query = mysqli_query($connect, $sql);    
      echo "<div class='alert alert-success'>Added Coming Soon</div>";
  }

}

?>
</div>

</div>

</body>
<?php include('scripts.php') ?>
</html>