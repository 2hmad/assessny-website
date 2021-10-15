<!DOCTYPE html>
<html>
<head>
<title>Assessny | Determine your future</title>
<?php include('links.php') ?>
<style>
#image-gallery {
    width:307px;
    height:208px;
    max-width: 100%;
    margin-left: 2%;
    margin-bottom: 2%;
}
#gallery {
  padding-top: 40px;
}
@media screen and (min-width: 991px) {
  #gallery {
    padding: 60px 30px 0 30px;
  }
}
.img-responsive {
    width: 307px !important;
    height: 208px;
    object-fit: cover;
    max-width: 100%;
}
.img-wrapper {
  position: relative;
  margin-top: 15px;
  width:307px;
  height:208px;
  max-width: 100%;
}
.img-wrapper img {
  width: 307px;
  max-width: 100%;
}

.img-overlay {
  background: rgba(0, 0, 0, 0.7);
  width: 307px;
  height: 208px;
  position: absolute;
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  opacity: 0;
}
.img-overlay i {
  color: #fff;
  font-size: 3em;
}

#overlay {
  background: rgba(0, 0, 0, 0.7);
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  z-index: 999;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.image {
    width:307px;
    height:207px;
    max-width: 100%;
}
#overlay img {
  margin: 0;
  width: 80%;
  height: auto;
  -o-object-fit: contain;
  object-fit: contain;
  padding: 5%;
}
@media screen and (min-width: 768px) {
  #overlay img {
    width: 60%;
  }
}
@media screen and (min-width: 1200px) {
  #overlay img {
    width: 50%;
  }
}

#nextButton {
  color: #fff;
  font-size: 2em;
  transition: opacity 0.8s;
}
#nextButton:hover {
  opacity: 0.7;
}
@media screen and (min-width: 768px) {
  #nextButton {
    font-size: 3em;
  }
}

#prevButton {
  color: #fff;
  font-size: 2em;
  transition: opacity 0.8s;
}
#prevButton:hover {
  opacity: 0.7;
}
@media screen and (min-width: 768px) {
  #prevButton {
    font-size: 3em;
  }
}

#exitButton {
  color: #fff;
  font-size: 2em;
  transition: opacity 0.8s;
  position: absolute;
  top: 15px;
  right: 15px;
}
#exitButton:hover {
  opacity: 0.7;
}
@media screen and (min-width: 768px) {
  #exitButton {
    font-size: 3em;
  }
}
#overlay {
  z-index: 999999;
}
</style>
</head>
<body>
<?php include('navbar.php') ?>

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel" data-interval="50">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="pics/slider1.jpg" class="d-block w-100" alt="Assessny - أسسني" style="height: 800px;object-fit: cover;">
      <?php
      $sql = "SELECT * FROM next_event";
      $query = mysqli_query($connect, $sql);
      if($query) {
      if(mysqli_num_rows($query) > 0) {
        while($row = mysqli_fetch_array($query)) {
          $city = $row['city'];
          $start = $row['event_start'];
          $end = $row['event_end'];
          $soon = $row['soon'];
          if($soon > 0) {
            
          } else {
            echo "
            <div class='next-time'>
              <span style='font-size: 30px;font-weight: bold;color:#f15a22;text-align:center;display: block;line-height:1em'>$city, Egypt</span>
              <span style='text-align: center;display:block'>(Next Event)</span>
              <div style='text-align: center;'>
                  <span style='color:white;font-weight:bold;font-size: 25px;'>$start - $end</span>
              </div>
            </div>
            ";  
          }
        }
      }
      }
      ?>
    </div>
    <div class="carousel-item">
      <img src="pics/slider2.jpg" class="d-block w-100" alt="Assessny - أسسني" style="height: 800px;object-fit: cover;">
      <?php
      $sql = "SELECT * FROM next_event";
      $query = mysqli_query($connect, $sql);
      if($query) {
      if(mysqli_num_rows($query) > 0) {
        while($row = mysqli_fetch_array($query)) {
          $city = $row['city'];
          $start = $row['event_start'];
          $end = $row['event_end'];
          $soon = $row['soon'];
          if($soon > 0) {
            
          } else {
            echo "
            <div class='next-time'>
              <span style='font-size: 30px;font-weight: bold;color:#f15a22;text-align:center;display: block;line-height:1em'>$city, Egypt</span>
              <span style='text-align: center;display:block'>(Next Event)</span>
              <div style='text-align: center;'>
                  <span style='color:white;font-weight:bold;font-size: 25px;'>$start - $end</span>
              </div>
            </div>
            ";  
          }
        }
      }
      }
    ?>
    </div>
    <div class="carousel-item">
      <img src="pics/slider3.jpg" class="d-block w-100" alt="Assessny - أسسني" style="height: 800px;object-fit: cover;">
    <?php
    $sql = "SELECT * FROM next_event";
    $query = mysqli_query($connect, $sql);
    if($query) {
    if(mysqli_num_rows($query) > 0) {
      while($row = mysqli_fetch_array($query)) {
        $city = $row['city'];
        $start = $row['event_start'];
        $end = $row['event_end'];
        $soon = $row['soon'];
          if($soon > 0) {
            
          } else {
            echo "
            <div class='next-time'>
              <span style='font-size: 30px;font-weight: bold;color:#f15a22;text-align:center;display: block;line-height:1em'>$city, Egypt</span>
              <span style='text-align: center;display:block'>(Next Event)</span>
              <div style='text-align: center;'>
                  <span style='color:white;font-weight:bold;font-size: 25px;'>$start - $end</span>
              </div>
            </div>
            ";  
          }
      }
    }
    }
    ?>
    </div>
  </div>
</div>

<section style="margin-top: 2%;padding: 10px;">
    <h1 style="font-size: 2.4rem;font-weight: 300;margin-bottom:2%;color:#2162af;text-transform: uppercase;">What is  Assessny ?</h1>
    <div style="color: #555;font-size: 22px;line-height: 2em;font-family: 'Raleway', sans-serif !important;">
      <span style="display: block;">Assessny is an national multi-industry focused Investment & Entrepreneurship event that aims to impact multiple sectors and stakeholders of the Startup Communities.</span>
      <span style="display: block;">The Event Kick-Started In Alexandria, Egypt In 2020 !</span>
      <span style="display: block;">Assessny event is coming to you this year! So, if you can't be with us On-ground, you can still join us online from the comfort of your home.</span>
      <span style="display: block;">We have lots of exciting things planned for you with 60+ hours of content planned, over 9 different tracks!</span>
    </div>
</section>

<section class="video" style="min-height:445px;width:100%;margin-top:3%">
  <div class="row" style="width:100%">
    <div class="col-sm-6 col-12 p-0">
      <iframe class="embed-responsive-item" style="min-height:445px" src="https://www.youtube.com/embed/WxOZa9zTQ_s" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-sm-6 p-0">
        <div style="padding:80px 0px 80px 25px;font-size:2.5rem">
          <h1 style="text-transform: uppercase;font-weight:bold">See why we are not a normal occurrence</h1>
          <a href="https://www.youtube.com/channel/UCXqPGfdnQ02W7f5pl-lx2Bw" target="_blank"><button class="btn btn-outline-dark" style="padding: 0.7rem 2rem;text-transform:uppercase;font-weight:bold">Watch Videos</button></a>
        </div>
    </div>
  </div>
</section>


<section style="padding: 10px;margin-top: 2%;">
    <h1 style="font-size: 2.4rem;font-weight: 300;margin-bottom:2%;color:#2162af;text-transform: uppercase;">Speakers in 2021</h1>
    <div class="container" style="max-width: 95%;">
    <div class="row">
    <div class='center-speaker'>

<?php
$sql = "SELECT * FROM speakers ORDER BY id DESC LIMIT 20";
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
    </div>
    <a href="speakers.php">
        <button type="button" style="margin-top:3%;outline:none;margin-right: auto;margin-left: auto;display: block;width: 200px;padding: 10px;background: #2974ff;border: 1px solid #2974ff;font-weight: bold;color: white;border-radius: 4px;">Show All Speakers</button>
    </a>
</section>

<section style="min-height: 210px;margin-top: 3%;background:url(pics/statyics.jpg);background-repeat: no-repeat;background-size:cover;color:white;padding: 20px;">
    <div class="container" style="margin-top: 2%;">
        <div class="row">
            <div class="col-lg" style="text-align: center;">
                <div style="margin-top: 10%;float: left;"><i class="fal fa-globe-asia" style="display: inline-block;font-size: 45px;"></i></div>
                <div style="float: left;text-align: left;margin-left: 10%;">
                  <span class="count" data-count="1">0 </span>
                  <span style="text-transform: uppercase;font-weight:bold">Area</span>
                </div>
            </div>
            <div class="col-lg" style="text-align: center;">
                <div style="margin-top: 10%;float: left;"><i class="fal fa-microphone-alt" style="display: inline-block;font-size: 45px;"></i></div>
                <div style="float: left;text-align: left;margin-left: 10%;">
                  <span class="count" data-count="<?php
                  $query = mysqli_query($connect, "SELECT COUNT(*) AS total_speakers FROM speakers");
                  $speakers = mysqli_fetch_assoc($query);
                  if(mysqli_num_rows($query) > 0) {
                    echo "$speakers[total_speakers]";
                  }
                  ?>">0 </span>
                  <span style="text-transform: uppercase;font-weight:bold">Speaker</span>
                </div>
            </div>
            <div class="col-lg" style="text-align: center;">
                <div style="margin-top: 10%;float: left;"><i class="fal fa-hand-holding-usd" style="display: inline-block;font-size: 45px;"></i></div>
                <div style="float: left;text-align: left;margin-left: 10%;">
                  <span class="count" data-count="<?php
                  $query = mysqli_query($connect, "SELECT COUNT(*) AS total_investors FROM sponsors");
                  $investors = mysqli_fetch_assoc($query);
                  if(mysqli_num_rows($query) > 0) {
                    echo "$investors[total_investors]";
                  }
                  ?>">0 </span>
                  <span style="text-transform: uppercase;font-weight:bold">Investor</span>
                </div>
            </div>
            <div class="col-lg" style="text-align: center;">
                <div style="margin-top: 10%;float: left;"><i class="far fa-chalkboard-teacher" style="display: inline-block;font-size: 45px;"></i></div>
                <div style="float: left;text-align: left;margin-left: 10%;">
                  <span class="count" data-count="5">0 </span>
                  <span style="text-transform: uppercase;font-weight:bold">Categories</span>
                </div>
            </div>
            <div class="col-lg" style="text-align: center;">
                <div style="margin-top: 10%;float: left;"><i class="fal fa-user-graduate" style="display: inline-block;font-size: 45px;"></i></div>
                <div style="float: left;text-align: left;margin-left: 10%;">
                  <span class="count" data-count="<?php
                  $query = mysqli_query($connect, "SELECT COUNT(*) AS total_attends FROM attends");
                  $attends = mysqli_fetch_assoc($query);
                  if(mysqli_num_rows($query) > 0) {
                    echo "$attends[total_attends]";
                  }
                  ?>">0 </span>
                  <span style="text-transform: uppercase;font-weight:bold">ATTENDEES</span>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="gallery" style="margin-top:3%;padding:10px;min-height:400px">
    <a href="#"><h1 style="font-size: 2.4rem;font-weight: 300;margin-bottom:1%;color:#2162af;text-transform: uppercase">Photo Gallery</h1></a>
    <div class="container" style="max-width: 90%;">
        <div class="row">
<?php
$query = mysqli_query($connect, "SELECT * FROM pics ORDER BY id DESC LIMIT 10");
if(mysqli_num_rows($query) > 0) {
  while($row = mysqli_fetch_array($query)) {
    $pic_name = $row['pic_name'];
    echo "
    <div id='image-gallery'>
    <div class='col image'>
      <div class='img-wrapper'>
        <a href='events-pics/$pic_name'><img src='events-pics/$pic_name' class='img-responsive'></a>
        <div class='img-overlay'>
          <i class='fa fa-plus-circle' aria-hidden='true'></i>
        </div>
      </div>
    </div>
    </div>
    ";
  }
}

?>
      </div>
    </div>
</section>


<section style="margin-top:3%;padding:10px;min-height: 300px;">
    <a href="#"><h1 style="font-size: 2.4rem;font-weight: 300;margin-bottom:1%;color:#2162af;text-transform: uppercase">Partners</h1></a>
    <div class="container">
      <div class="row">
<?php
$query = mysqli_query($connect, "SELECT * FROM partners");
if(mysqli_num_rows($query) > 0) {
  while($row = mysqli_fetch_array($query)) {
    $pic_name = $row['pic_name'];
    echo "<div class='col' style='margin-top:3%'><img src='partners/$pic_name' style='width: 100px;height:60px;object-fit: contain;'></div>";
  }
}
?>
      </div>
    </div>
</section>

<section style="margin-top:3%;padding:10px;min-height: 300px;">
    <a href="#"><h1 style="font-size: 2.4rem;font-weight: 300;margin-bottom:1%;color:#2162af;text-transform: uppercase">Sponsored</h1></a>
    <div class="container">
      <div class="row">
<?php
$query = mysqli_query($connect, "SELECT * FROM sponsors");
if(mysqli_num_rows($query) > 0) {
  while($row = mysqli_fetch_array($query)) {
    $pic_name = $row['pic_name'];
    echo "<div class='col' style='margin-top:3%'><img src='sponsors/$pic_name' style='width: 100px;height:60px;object-fit: contain;'></div>";
  }
}
?>
      </div>
    </div>
</section>

<section style="margin-top:3%;padding:10px;min-height: 300px;">
    <a href="#"><h1 style="font-size: 2.4rem;font-weight: 300;margin-bottom:1%;color:#2162af;text-transform: uppercase">Media Partners</h1></a>
    <div class="container">
      <div class="row">
<?php
$query = mysqli_query($connect, "SELECT * FROM media_partners");
if(mysqli_num_rows($query) > 0) {
  while($row = mysqli_fetch_array($query)) {
    $pic_name = $row['pic_name'];
    echo "<div class='col' style='margin-top:3%'><img src='media-partners/$pic_name' style='width: 100px;height:60px;object-fit: contain;'></div>";
  }
}
?>
      </div>
    </div>
</section>

<?php include('footer.php') ?>
</body>
<?php include('scripts.php') ?>
<script>
$('.carousel').carousel({
  interval: 50
})
</script>
<script>
var counted = 0;
$(window).scroll(function() {

  var oTop = $('.col-lg').offset().top - window.innerHeight;
  if (counted == 0 && $(window).scrollTop() > oTop) {
    $('.count').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 3000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
          }
        });
    });
    counted = 1;
  }

});
</script>
<script>
$( ".img-wrapper" ).hover(
  function() {
    $(this).find(".img-overlay").animate({opacity: 1}, 600);
  }, function() {
    $(this).find(".img-overlay").animate({opacity: 0}, 600);
  }
);
var $overlay = $('<div id="overlay"></div>');
var $image = $("<img>");
var $prevButton = $('<div id="prevButton"><i class="fa fa-chevron-left"></i></div>');
var $nextButton = $('<div id="nextButton"><i class="fa fa-chevron-right"></i></div>');
var $exitButton = $('<div id="exitButton"><i class="fa fa-times"></i></div>');
$overlay.append($image).prepend($prevButton).append($nextButton).append($exitButton);
$("#gallery").append($overlay);
$overlay.hide();
$(".img-overlay").click(function(event) {
  event.preventDefault();
  var imageLocation = $(this).prev().attr("href");
  $image.attr("src", imageLocation);
  $overlay.fadeIn("100");
});

$overlay.click(function() {
  $(this).fadeOut("100");
});

$nextButton.click(function(event) {
  $("#overlay img").hide();
  var $currentImgSrc = $("#overlay img").attr("src");
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  var $nextImg = $($currentImg.closest(".image").next().find("img"));
  var $images = $("#image-gallery img");
  if ($nextImg.length > 0) { 
    $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  } else {
    $("#overlay img").attr("src", $($images[0]).attr("src")).fadeIn(800);
  }
  event.stopPropagation();
});

$prevButton.click(function(event) {
  $("#overlay img").hide();
  var $currentImgSrc = $("#overlay img").attr("src");
  var $currentImg = $('#image-gallery img[src="' + $currentImgSrc + '"]');
  var $nextImg = $($currentImg.closest(".image").prev().find("img"));
  $("#overlay img").attr("src", $nextImg.attr("src")).fadeIn(800);
  event.stopPropagation();
});

$exitButton.click(function() {
  $("#overlay").fadeOut("100");
});
</script>
</html>