<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContectUs</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/ContectUs.css">
    
</head>
<body>

<?php 
include('Header.php');
?>


<section style="margin-top:80px;">
    <img id="start-imag" src="../assets/img/group-16@3x.png" alt="">
  </section>

  <section>
    <div class="heading">
      <h1>Contect us</h1>
      <div class="heading-underline">
        <span></span>
        <img src="../assets/img/forma-1-copy-5@3x.png" alt="">
        <span></span>
      </div>
      <div class="container-fluid" id="contect-data">
        <div class="row">
          <div class="col-md-4">
            <div class="cont-1">
              <img src="../assets/img/forma-1@3x.png" alt="">
              <h3>1111 Lorem ipsum text 100,</h3>
              <h3>Lorem ipsum AB</h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="cont-2">
              <img src="../assets/img/phone-call@3x.png" alt="">
              <h3>+49 (40) 123 56 7890</h3>
              <h3>+49 (40) 987 56 0000</h3>
            </div>
          </div>
          <div class="col-md-4">
            <div class="cont-3">
              <img src="../assets/img/vector-smart-object@3x.png" alt="">
              <h3>info@helperland.com</h3>

            </div>
          </div>
        </div>
      </div>
  </section>
  <center>
    <hr class="line">
  </center>

  <section>
    <div class="cont-head">
      <h2>Get in touch with us</h2>
    </div>
  </section>


  <div class="hero">
    <form>
      <div class="row">
        <div class="col-md-12 col-lg-6">
          <input type="text" class="form-control" placeholder="First name">
        </div>
        <div class="col-md-12 col-lg-6">
          <input type="text" class="form-control" placeholder="Last name">
        </div>
      </div>


      <div class="row">
        <div class="col-md-12 col-lg-6">
          <div class="input-group ">
            <div class="input-group-prepend" id="num">
              <div class="input-group-text" >+49</div>
            </div>
            <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Mobile number">
          </div>
        </div>
        <div class="col-md-12 col-lg-6">
          <input type="text" class="form-control" placeholder="Email address">
        </div>
      </div>

      <select class="form-select slct" aria-label="Default select example">
        <option selected>Subject</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
      </select>

      <div class="form-group">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Massage"></textarea>
      </div>
      <div class="attechment">
          <h5 class="mt-3">Attechment</h5>
          <button class="btn" style="background:#ffffff; color:black; border:1px solid black;">Upload</button><br>
          <div class="row" style="padding-top:10px">
         <span  class="col-1" > <input type="checkbox" style="width:20px; height:20px;"></span>
         <span class="col-11" ><p >our current ones apply <a href="#" style="text-decoration:none; color:#1d7a8c;">privacy policy.</a> i hereby agree that my data entired into contact form will be stored electronically and processed and used for the purpos of establishing contact. the content can be withdrown at any time pursuant to Art. 7 
          (3) GDPR by informal notification (eg by e-mail).</p></span> 
        </div>

      </div>
     <center> <button type="submit" class="btn ">Submit</button></center>
 
    </form>
  </div>


  <div class="bg-image" style="background-image: url('../assets/img/group-16@2x.png'); margin-top:430px;">
    <img src="../assets/img/forma-1@2x.png" alt="">
  </div>


  


  <div class="text-center newsletter p-5">
    <h2>GET OUR NEWSLETTER</h2>
    <form action="#">
      <input type="text" class="form-email" placeholder="YOUR EMAIL">
      <button type="submit" class="btn-submit mt-2">Submit</button>
    </form>
  </div>


<?php
include('Footer.php');
?>
</body>
</html>