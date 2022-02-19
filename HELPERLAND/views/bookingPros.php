<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="../assets/css/book.css">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-3 boxes">
                        <div id="tab1" class="tab active-tab" style="display: inline-block;" onclick="Tab1Click()">Setup
                            Service
                        </div>
                    </div>
                    <div class="col-lg-3 boxes">
                        <div id="tab2" class="tab" style="display: inline-block" onclick="Tab2Click()">Schedule & Plan
                        </div>
                    </div>
                    <div class="col-lg-3 boxes">
                        <div id="tab3" class="tab" style="display: inline-block; " onclick="Tab3Click()">Your Detail
                        </div>
                    </div>
                    <div class="col-lg-3 boxes">
                        <div id="tab4" class="tab" style="display: inline-block" onclick="Tab4Click()">Make Payment
                        </div>
                    </div>

                </div>
                <div id="tabContent">

                    <!-- tabContent1 start-->

                    <div id="tabContent1">
                        <p>Enter your Postal Code</p>
                        <input type="text" id="ZipCode" name="ZipCode" placeholder="Postalcode" />
                        <input type="button" class="check" value="Check Availability" onclick="SearchZipCode();" />
                    </div>

                    <!-- tabContent1 start-->


                    <!-- tabContent start-->

                    <div id="tabContent2" style="display:none;">

                        <div class="row t2">
                            <div class="col lg-6">
                                <p> When do you need the cleaner</p>
                                <input data-date-format="dd/mm/yyyy" id="datepicker">
                                <input type="time" name="myTime" class="time-mm-hh" min="9:00" max="18:00" step="1800" />
                            </div>
                            <div class="col lg-6">
                                <p> How long do you need cleaner to stay</p>
                                <select name="" id="HourSelect">
                                    <option value="3">3 Hrs</option>
                                    <option value="3.5">3.5 Hrs</option>
                                    <option value="4">4 Hrs</option>
                                    <option value="4.5">4.5 Hrs</option>
                                </select>
                            </div>
                        </div>


                        <hr>

                        <p id="pServices"> Extra services</p>

                        <div class="container">

                            <div class="row text-center">
                                <div class="col">
                                    <a  class="border_redius"><img src="../assets/img/3.png" alt="..."></a>
                                    <p class="service">Inside cabinets</p>

                                </div>
                                <div class="col">
                                    <a  class="border_redius"><img src="../assets/img/5.png" alt="..."></a>
                                    <p class="service">Inside fridge</p>

                                </div>
                                <div class="col">

                                    <a  class="border_redius"><img src="../assets/img/4.png" alt="..."></a>
                                    <p class="service">Inside oven</p>

                                </div>
                                <div class="col">
                                    <a class="border_redius"><img src="../assets/img/2.png" alt="..."></a>
                                    <p class="service">Laundry wash & dry</p>

                                </div>
                                <div class="col">

                                    <a  class="border_redius"><img src="../assets/img/1.png" alt="..."></a>
                                    <p class="service">Interior windows</p>

                                </div>
                            </div>
                        </div>

                        <hr>

                        <p>comments</p>
                        <textarea rows="2"></textarea>
                        <input type="checkbox"><span id="condition">I have pets at home </span>

                        <hr>

                        <input type="button" value="Continue" id="continuebtn" onclick="SaveServiceDetail();" />
                    </div>

                    <script>
                        $(".border_redius").click(function() {
                            $(this).toggleClass('color');
                        });
                       
                    </script>
                    <!-- tabContent2 start-->


                    <!-- tabContent3 start-->

                    <div id="tabContent3" style="display:none;">
                        <div id="divAddress"></div><br />

                        <p id="add_head">Enter your contact details so we can serve you in batter way</p>
                        <div class="row cust_add">
                            <div class="col-1 text-center">
                                <input type="radio" name="radioGroup">
                            </div>
                            <div class="col-11">
                                <p><span id="Addd">Address:</span><span>Pratapara 138, Bhavnagar 364135</span></p>
                                <p><span id="Addd">Phone number:</span><span>9893468703</span></p>
                            </div>
                        </div>
                        <div class="row  cust_add">
                            <div class="col-1 text-center">
                                <input type="radio"  name="radioGroup">
                            </div>
                            <div class="col-11">
                                <p><span id="Addd">Address:</span><span>Pratapara 138, Bhavnagar 364135</span></p>
                                <p><span id="Addd">Phone number:</span><span>9893468703</span></p>
                            </div>
                        </div>
                        <button class="add_new"> + Add New Address</button>
                        <div class="newForm">
                            <form>
                                <div class="row">

                                    <div class="col-lg-6 info">
                                        <label for="Street name">Street name</label><br>
                                        <input type="text" placeholder="Street name">
                                    </div>
                                    <div class="col-lg-6 info">
                                        <label for="House number">House number</label><br>
                                        <input type="text" placeholder="House number">
                                    </div>
                                    <div class="col-lg-6 info">
                                        <label for="City">City</label><br>
                                        <input type="text" placeholder="City">
                                    </div>
                                    <div class="col-lg-6 info">
                                        <label for="Postal code">Postal code</label><br>
                                        <input type="text" maxlength="6" placeholder="Postal code">
                                    </div>
                                    <div class="col-lg-6 info">
                                        <label for="Phone number">Phone number</label><br>
                                        <input type="text" maxlength="10" placeholder="Phone number">
                                    </div>
                                    <div class="col-lg-12 save_cancle">

                                        <input type="submit" value="save">

                                        <button id="cancel_btn">cancel</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                        <input class="Continue_btn" type="button" value="Continue" onclick="SaveAddress();" />
                    </div>



                    <!-- tabContent3 start-->

                    <!-- tabContent4 start-->

                    <div id="tabContent4" style="display:none;">
                        You are booking service request for zipcode <span id="confirmZipCode"></span>
                        <br /><br />
                        <p>Pay Securly with Helperland Payment Getway</p>
                        <p>Promo Code (Optional)</p>
                        <form action="">
                            <input type="text" placeholder="Promo Code (Optional)">
                            <input type="submit" value="Apply">
                        </form>

                        <hr>

                        <input class="Complete_Booking" type="button" value="Complete Booking" onclick="CompleteBooking();" />
                    </div>

                    <!-- tabContent4 start-->

                    <div id="successMessage" style="display:none; color: green;"></div>
                    <br /><br />
                </div>
            </div>


            <!-- card start-->

            <div class="col-lg-4">

                <div class="card card_Border">
                    <div class="card-header p-header">
                        Payment summary
                    </div>
                    <div class="card-body paymentBody">
                        <p class="card-text p1"><span>07/10/2021 </span><span>8:00</span></p>
                        <p class="card-text p1"><span>Duration</span></p>
                        <p class="card-text p1"><span>Basic </span> <span style="float: right;">3 Hrs</span></p>
                        <h4 id="extra_heading"> Extra</h4>
                        <p class="card-text p1 extra_serve"><span>Inside cabinates</span><span class="float_right">30
                                min</span></p>
                        <p class="card-text p1 extra_serve"><span>Inside fridge</span> <span class="float_right">30
                                min</span></p>
                        <hr>
                        <p class="card-text"><span>Total Service Time</span><span style="float: right;">4 Hrs</span>
                        </p>
                        <hr>
                        <p class="card-text"><span>Per Cleaning </span> <span style="float: right;">75,00 <span style="font-weight: 600;">&euro;</span> </span></p>
                        <hr>
                        <p class="card-text"><span class="total_pay">Total Payment</span><span class="total_price">75,00
                                &euro; </span></p>
                        <p class="card-text">According to UStG no sales is calculated</p>
                        <p class="card-text"><span>Effective Prices</span><span style="float: right;">60,00 <span style="font-weight: 600;">&euro;</span></p>
                        <p class="card-text"><span style="color: red;">*</span>you will save 20% according to 35a EStG
                        </p>
                    </div>
                    <div class="card-footer text-muted text-center">
                        <span></span> See what is always included
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <div class="quetion">
                            <h5 class="text-center">
                                Question
                            </h5>

                            <div class="Que">
                                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span><span>What is
                                    including in cleaning</span>
                                <div class="hide_show pl-4">
                                    Something goes here......
                                </div>
                            </div>
                            <div class="Que2">
                                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span><span>What Helperland
                                    profesional will come to my place?</span>
                                <div class="hide_show2 pl-4">
                                    Something goes here......
                                </div>
                            </div>
                            <div class="Que3">
                                <span><i class="fa fa-angle-right" aria-hidden="true"></i></span><span>Can i skip or
                                    Reschedual a Services</span>
                                <div class="hide_show3 pl-4">
                                    Something goes here......
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            <script>
                $(document).ready(function() {
                    $(".Que").click(function() {
                        $(".hide_show").toggle("slow");
                    });
                    $(".Que2").click(function() {
                        $(".hide_show2").toggle("slow");
                    });
                    $(".Que3").click(function() {
                        $(".hide_show3").toggle("slow");
                    });
                });
            </script>

            <!-- card end-->


        </div>
    </div>
    <script type="text/javascript">
        var globalVar = "Global to Booking page";

        function Tab1Click() {
            $("#tab1").addClass("active-tab");
            $("#tab2").removeClass("active-tab").addClass("tab");
            $("#tab3").removeClass("active-tab").addClass("tab");
            $("#tab4").removeClass("active-tab").addClass("tab");

            $("#tabContent2").hide();
            $("#tabContent3").hide();
            $("#tabContent4").hide();
            $("#tabContent1").show();
        }

        function Tab2Click() {
            $("#tab2").addClass("active-tab");
            $("#tab1").removeClass("active-tab").addClass("tab");
            $("#tab3").removeClass("active-tab").addClass("tab");
            $("#tab4").removeClass("active-tab").addClass("tab");

            $("#tabContent1").hide();
            $("#tabContent3").hide();
            $("#tabContent4").hide();
            $("#tabContent2").show();
        }

        function Tab3Click() {
            $("#tab3").addClass("active-tab");
            $("#tab1").removeClass("active-tab").addClass("tab");
            $("#tab2").removeClass("active-tab").addClass("tab");
            $("#tab4").removeClass("active-tab").addClass("tab");

            $("#tabContent1").hide();
            $("#tabContent2").hide();
            $("#tabContent4").hide();
            $("#tabContent3").show();
            $("#divAddress").html("Loading Address view...")
                .load('@Url.Action("GetAddress", "BookServiceRequest")');
        }

        function Tab4Click() {
            $("#tab4").addClass("active-tab");
            $("#tab1").removeClass("active-tab").addClass("tab");
            $("#tab2").removeClass("active-tab").addClass("tab");
            $("#tab3").removeClass("active-tab").addClass("tab");

            $("#tabContent1").hide();
            $("#tabContent2").hide();
            $("#tabContent3").hide();
            $("#tabContent4").show();
        }


        function SearchZipCode() {
            $("#tab2").addClass("active-tab");
            $("#tab1").removeClass("active-tab").addClass("tab");
            $("#tabContent1").hide();
            $("#tabContent2").show();
        }

        function SaveServiceDetail() {
            $("#tab3").addClass("active-tab");
            $("#tab2").removeClass("active-tab").addClass("tab");
            $("#tabContent2").hide();
            $("#tabContent4").hide();
            $("#tabContent3").show();

            $("#divAddress").html("Loading Address view...")
                .load('@Url.Action("GetAddress", "BookServiceRequest")');
        }

        function SaveAddress() {
            $("#tab4").addClass("active-tab");
            $("#tab3").removeClass("active-tab").addClass("tab");
            $("#tabContent3").hide();
            $("#tabContent4").show();
            $("#confirmZipCode").html($("#ZipCode").val());
        }

        function CompleteBooking() {
            debugger;
            var booking = {};
            booking.zipCode = $("#ZipCode").val();
            booking.bookingStartTime = $("#StartDate").val() + " " + $("#StartTime").val();
            booking.hours = $("#Hours").val();
            booking.address1 = $("#Address1").val();

            $.ajax({
                url: '@Url.Action("SaveBooking", "BookServiceRequest")',
                type: 'post',
                dataType: 'json',
                contentType: 'application/json',
                data: JSON.stringify(booking),
                success: function(resp) {
                    debugger;
                    $("#successMessage").show();
                    var html = "<br/><br/>Congratulations!<br/> Your Booking hass been confirmed for <br/><b>Service Date</b>: " + resp.Result.bookingStartTime + "<br/>" +
                        "<b>Service Hours</b>: " + resp.Result.hours + "<br/>" +
                        "<b>Zip Code</b>: " + resp.Result.zipCode + "<br/>";
                    $("#successMessage").html(html).fadeOut(7000);
                },
                error: function(err) {
                    debugger;
                    alert(err.responseText);
                }
            });
        }
    </script>

    <script>
        $(".add_new").click(function() {
            $('.newForm').toggle(600);

        });
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('#datepicker').datepicker({
            weekStart: 1,
            daysOfWeekHighlighted: "6,0",
            autoclose: true,
            todayHighlight: true,
        });
        $('#datepicker').datepicker("setDate", new Date());
    </script>


    <script type="text/javascript">
        $("input[name='myTime']").timeInput(); // use default or html5 attributes
    </script>
</body>

</html>