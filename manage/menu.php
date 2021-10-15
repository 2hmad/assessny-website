<div class="sidebar">
  <div style="padding: 10px;text-align:center;">
    <img src="../pics/user.png" style="max-width: 80px;height:80px;border: 1px solid #eaeaea;border-radius:50%;background: white;display:block;margin-left:auto;margin-right:auto">
    <span style="font-weight: bold;"> <?php
    if(isset($_SESSION['email'])) {
    } else {
      header('Location: index.php');
    }
    $sql = "SELECT * FROM admins WHERE email = '$_SESSION[email]'";
    $query = mysqli_query($connect, $sql);
    while($row = mysqli_fetch_array($query)) {
      $name = $row['name'];
    }
    echo "$name";
    ?></span>
  </div>
  <a href="dashboard.php"><i class="fal fa-tachometer-alt-slowest"></i> Dashboard</a>
  <a href="add-event.php"><i class="fal fa-calendar-week"></i> Add Event</a>
  <a href="next-event.php"><i class="far fa-calendar-week"></i> Add Next Event</a>
  <a href="add-speaker.php"><i class="fal fa-podium"></i> Add Speaker</a>
  <a href="add-photo.php"><i class="fal fa-images"></i> Add Photo</a>
  <a href="add-partner.php"><i class="fal fa-handshake-alt"></i> Add Partner</a>
  <a href="add-sponsor.php"><i class="fal fa-money-check-edit-alt"></i> Add Sponsor</a>
  <a href="media-partner.php"><i class="far fa-record-vinyl"></i> Add Media Partner</a>
  <a href="logout.php" style="font-weight: bold;text-transform: uppercase;text-align: center;"><i class="fal fa-portal-exit"></i> Sign Out</a>
</div>
