<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book_services</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/css/Book_services.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
  <?php
  include("Header.php");
  ?>

  <div class="start-image">
    <img src="../assets/img/group-18.png" alt="">
  </div>

  <div class="container">
    <div class="heading text-center">
      <h1>Set up your cleaning services</h1>
    </div>
    <div class="design text-center">
      <hr><img src="../assets/img/forma-1-copy-5@3x.png" alt="">
      <hr>
    </div>
    <?php
         include("bookingPros.php");
    ?>

  </div>





  <script>
    $(document).ready(function() {
      $("#btn1").click(function() {
        $("#design").css("display", "none");
        $("#instrument").css("display", "none");
        $("#innovations").css("display", "none");
        $("#pilot").css("display", "block");
      });

      $("#btn2").click(function() {
        $("#pilot").css("display", "none");
        $("#instrument").css("display", "none");
        $("#innovations").css("display", "none");
        $("#design").css("display", "block");
      });

      $("#btn3").click(function() {
        $("#design").css("display", "none");
        $("#pilot").css("display", "none");
        $("#innovations").css("display", "none");
        $("#instrument").css("display", "block");
      });

      $("#btn4").click(function() {
        $("#design").css("display", "none");
        $("#instrument").css("display", "none");
        $("#pilot").css("display", "none");
        $("#innovations").css("display", "block");
      });
    });
  </script>

  <?php
  include("Get_news.php");
  ?>
  <?php
  include("Footer.php");
  ?>
</body>

</html>