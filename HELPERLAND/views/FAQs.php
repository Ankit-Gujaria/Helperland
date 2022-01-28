<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/CSS/FAQs.css">
  <title>FAQs</title>
</head>

<body>
  <div class="faqs">
        
  <?php 
      include('Header.php');
   ?>
    <div class="image">
      <img src="../assets/img/group-16@3x.png" alt="">
    </div>

    <div class="heading">
      <h1>FAQs</h1>
      <div class="heading-underline">
        <span></span>
        <img src="../assets//img/forma-1-copy-5.png" alt="">
        <span></span>
      </div>
      <p>Whether you are Customer or Service provider, </p>
      <p>We have tried our best to solve all your queries and questions.</p>
    </div>
    <div>
      <div class="select">
        <button id="left" class="current-section">FOR CUSTOMER</button>
        <button id="right">FOR SERVICE PROVIDER</button>
      </div>
      <div class="box customer-box">
        <div class="box-item">
          <div>
            <img src="../assets/img/down-arrow.png" class="down" id="item-1" alt="">
            <h5>What's included in a cleaning?</h5>
          </div>
          <p>Bedroom, Living Room & Common Areas, Bathrooms, Kitchen, Extras</p>
        </div>
        <div class="box-item">
          <div>
            <img src="../assets/img/down-arrow.png" class="down" id="item-2" alt="">
            <h5>Which Helperland professional will come to my place?</h5>
          </div>
          <p>Helperland has a vast network of experienced, top-rated cleaners. Based on the time and date of your request, we work to assign the best professional available. Like working with a specific pro? Add them to your Pro Team from the mobile app and they'll be requested first for all future bookings. You will receive an email with details about your professional prior to your appointment.</p>
        </div>
        <div class="box-item">
          <div>
            <img src="../assets/img/down-arrow.png" class="down" alt="">
            <h5>Can I skip or reschedule bookings?</h5>
          </div>
          <p>You can reschedule any booking for free at least 24 hours in advance of the scheduled start time. If you need to skip a booking within the minimum commitment, we’ll credit the value of the booking to your account. You can use this credit on future cleanings and other Helperland services.</p>
        </div>
        <div class="box-item">
          <div>
            <img src="../assets/img/down-arrow.png" class="down" alt="">
            <h5>Do I need to be home for the booking?</h5>
          </div>
          <p>We strongly recommend that you are home for the first clean of your booking to show your cleaner around. Some customers choose to give a spare key to their cleaner, but this decision is based on individual preferences.</p>
        </div>
   

      </div>
      <div class="box service-box">
        <div class="box-item">
          <div>
            <img src="../assets/img/down-arrow.png" class="down" id="item-1" alt="">
            <h5> How much do service providers earn?</h5>
          </div>
          <p>The self-employed service providers working with Helperland set their own payouts, this means that they decide how much they earn per hour.</p>
        </div>
        <div class="box-item">
          <div>
            <img src="../assets/img/down-arrow.png" class="down" id="item-2" alt="">
            <h5>What support do you provide to the service providers?</h5>
          </div>
          <p>Our call-centre is available to assist the service providers with all queries or issues in regards to their bookings during office hours. Before a service provider starts receiving jobs, every individual partner receives an orientation session to familiarise with the online platform and their profile.</p>
        </div>
       

      </div>
    </div>
    </section>

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

  <script src="../assets/js/faqs.js"></script>
  
</body>

</html>