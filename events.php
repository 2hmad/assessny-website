<!DOCTYPE html>
<html>
<head>
<title>Assessny | Determine your future</title>
<?php include('links.php') ?>
<style>
.badge-cat {
    background: #2162af;
    padding: 3px .5rem 3px .5rem;
    color: white;
    font-weight: bold;
    border: 1px solid #2162af;
    border-radius: 5px;
    font-size: 14px;
    display: inline-block;
    position: absolute;
    top: 5px;
    left: 10px;
}
.register {
    margin-top: 5%;
    background: transparent;
    border: 1px solid #2162af;
    padding: .4em 1rem;
    border-radius: 3px;
    color: #2162af;
    font-weight: bold;
    outline:none
}
.register:hover {
    background-color: #2162af;
    color: white;
    -webkit-transition: 0.6s;
    transition: 0.6s;
}
.closed {
    margin-top: 5%;
    background: transparent;
    border: 1px solid #ff5656;
    padding: .4em 1rem;
    border-radius: 3px;
    color: #ff5656;
    font-weight: bold;
    outline:none
}
.closed:hover {
    background-color: #ff5656;
    color: white;
    -webkit-transition: 0.6s;
    transition: 0.6s;
}

.filter-cat{
    margin-bottom: 3%;
}
</style>
</head>
<body>
<?php include('navbar.php') ?>

<section style="padding: 10px;margin-top: 5%;min-height: 100vh">
    <h1 style="font-size: 1.6rem;font-weight: bold;margin-bottom:2%;color:#2162af">Events in 2021</h1>
    <div class="filter-cat">
        <a href="?filter=all"><button class="btn btn-primary" style="margin-bottom: 1%;">All</button></a>
        <a href="?filter=entrepreneurship"><button class="btn btn-primary" style="margin-bottom: 1%;">Entrepreneurship</button></a>
        <a href="?filter=marketing"><button class="btn btn-primary" style="margin-bottom: 1%;">E-Marketing & Advertisements</button></a>
        <a href="?filter=e-commerce"><button class="btn btn-primary" style="margin-bottom: 1%;">E-commerce </button></a>
        <a href="?filter=technology"><button class="btn btn-primary" style="margin-bottom: 1%;">Technology</button></a>
        <a href="?filter=work-life"><button class="btn btn-primary" style="margin-bottom: 1%;">Work Life</button></a>
    </div>
    <div class="container" style="max-width: 90%;">
    <div class="row">

<?php

if(isset($_GET['filter'])) {
    $filter = $_GET['filter'];
} else {
    $filter = "";
}

if($filter == "all") {
    $query = mysqli_query($connect, "SELECT * FROM events");
} elseif(isset($_GET['filter'])) {
    $query = mysqli_query($connect, "SELECT * FROM events WHERE category = '$filter'");
} else {
    $query = mysqli_query($connect, "SELECT * FROM events");
}
while($row = mysqli_fetch_array($query)) {
    $category = $row['category'];
    $city = $row['city'];
    $day = $row['day'];
    $month = $row['month'];
    $year = $row['year'];
    $time_from = $row['time_from'];
    $time_to = $row['time_to'];
    $details = $row['details'];
    $pic = $row['pic'];
    echo "
    <div class='col-sm-4' style='margin-bottom: 3%;'>
    <div class='card'>
    <img src='events-pics/$pic' class='card-img-top' alt='Events' style='height: 190px;border-radius: 5px;'>
    <div class='card-body' style='text-align: center;'>
        <span style='float:left;font-weight: 500;'>".date('l', strtotime("$day-$month-$year")).", $day $month $year</span>
        <span style='float:right;font-weight: 500;'>$time_from to $time_to</span>
        <br>
        <div class='badge-cat'>$category</div>
        ".(strtotime($row['day']. '-' . $row['month'].'-' . $row['year']) < time() ? "<button class='closed' style='margin-top: 5%;'><i class='fal fa-lock'></i> Closed</button>" : "<a href='https://forms.gle/SZvGz1pMW4gQK2vs5' target='_blank'><button class='register' style='margin-top: 5%;'>More / Register</button></a>")."
    </div>
    </div>
    </div>";
}
?>

    </div>
    </div>
</section>

<?php include('footer.php') ?>
</body>
<?php include('scripts.php') ?>
</html>