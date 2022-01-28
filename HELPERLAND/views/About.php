<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/About.css">
</head>

<body>

    <section class="nevigation">

       <?php 

          include("header.php");

       ?>

    </section>

    <section id="start-image" style="margin-top:80px;">
        <img src="../assets/img/hero-banner-img.png" alt="">
    </section>




    <section>
        <div class="heading">
            <h1>A Few words about us</h1>
            <div class="heading-underline">
                <span></span>
                <img src="../assets/img/forma-1-copy-5@3x.png" alt="">
                <span></span>
            </div>
        </div>
        <div class="paragraph">
            <h5>
               We are providers of professional home cleaning services, offering hourly based house
                cleaning options, which mean that you don’t have to fret about getting your house cleaned
                 anymore. We will handle everything for you, so that you can focus on spending your precious 
                 time with your family members.
            </h5>

            <h5> 
               We have a number of experienced cleaners to help you make cleaning out or shifting your 
               home an easy affair.
            </h5>
        </div>
    </section>


    <section id="ourstory">
        <div class="heading">
            <h1>Our Story</h1>
            <div class="heading-underline">
                <span></span>
                <img src="../assets/img/forma-1-copy-5@3x.png" alt="">
                <span></span>
            </div>
        </div>
        <div class="paragraph">
            <h5>
               
            </h5>
            <h5>
            A cleaner is a type of industrial or domestic worker who cleans homes or commercial premises for payment.
             Cleaners may specialise in cleaning particular things or places, such as window cleaners. Cleaners often
              work when the people who otherwise occupy the space are not around. They may clean offices at night or 
              houses during the workday.
            </h5>
          
        </div>
    </section>



 
    <?php 

   include("Get_news.php");

   ?>
  

    
   <?php 

     include("Footer.php");

   ?>




    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./JS/About.js"></script>
</body>

</html>