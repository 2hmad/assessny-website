<!DOCTYPE html>
<html>
<head>
<title>Assessny | Determine your future</title>
<?php include('links.php') ?>
</head>
<body>
<?php include('navbar.php') ?>

<section style="padding: 10px;margin-top: 5%;min-height: 100vh">
    <h1 style="font-size: 1.6rem;font-weight: bold;margin-bottom:4%;text-align:center;color:#2162af">Speakers In 2021</h1>
    <div class="container" style="max-width: 90%;">
    <div class="row">

<?php
$sql = "SELECT * FROM speakers ORDER BY id DESC";
$query = mysqli_query($connect, $sql);
if($query) {
if(mysqli_num_rows($query) > 0) {
  while($row = mysqli_fetch_array($query)) {
    $name = $row['name'];
    $role = $row['role'];
    $company = $row['company'];
    $details = $row['details'];
    $pic = $row['pic'];
    echo "
    <a href='#' data-bs-toggle='modal' data-bs-target='#".str_replace(" ","-","$name")."' style='width: auto;margin-top: 2%;display: inline-block;'>
        <div class='card' style='width: 180px;border:none'>
        <img src='speakers/$pic' class='card-img-top filter' alt='$name' style='width: 180px;height: 200px;object-fit: cover;border-radius: 5px;'>
        <div class='card-body' style='text-align: center;'>
            <p class='card-text' style='letter-spacing: 1px;font-weight:bold;font-size: 15px;'>$name</p>
            <span style='font-weight: 500;font-size:15px;display:block'>$role</span>
            <span style='font-weight: 500;font-size:13px'>$company</span>
        </div>
        </div>
    </a>
    <div class='modal fade' id='".str_replace(" ","-","$name")."' tabindex='-1' aria-labelledby='".str_replace(" ","-","$name")."Label' aria-hidden='true'>
    <div class='modal-dialog'>
        <div class='modal-content'>
        <div class='modal-header'>
            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
        </div>
        <div class='modal-body'>
            <img src='speakers/$pic' style='border-radius: 3px;max-width: 150px;height: 150px;object-fit: cover;margin-left: auto;margin-right: auto;display: block;'>
            <p style='margin-top: 5%;font-family: system-ui;font-weight: 400;line-height: 2em;'>$details</p>
        </div>
        </div>
    </div>
    </div>
    ";
  }
}
}
?>

    </div>
    </div>
</section>

<?php include('footer.php') ?>
</body>
<?php include('scripts.php') ?>
</html>