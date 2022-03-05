<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Services-History</title>
    <link rel="stylesheet" href="../assets/css/Services-History.css">
    <link rel="stylesheet" href="../assets/css/footer1.css">

</head>

<body>
    <!-- navigation statr -->
    <section>
        <nav class="navbar navbar-expand-lg  navbar-dark navbar-static-top navigation">
            <div class="container-fluid">
                <a href="#" class="navbar-brand"><svg class="logo-nav" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="73" height="54">
                        <image width="73" height="54" xlink:href="data:img/png;base64,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" />
                    </svg></a>
                <button class="navbar-toggler " data-toggle="collapse" data-target=".mynav" aria-controls="#mynav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="collapse navbar-collapse mynav" id="mynav">
                    <ul class="navbar-nav ml-auto text-center">
                        <li class="nav-item"><a href="#" class="nav-link"><button id="book-now"> Book now</button></a>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link">Prices & services</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Warranty</a></li>
                        <li class="nav-item"><a href="#" class="nav-link"> Blog </a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                        <li class="nav-item" id="notification">
                            <a href="#" class="nav-link"><img src="../assets/img/icon-notification.png" alt=""><span class="notification-no">2</span></a>
                        </li>

                        <li class="nav-item">

                            <div class="dropdown">
                                <a type="button nav-link" class="drop-icon" data-toggle="dropdown"> <img src="../assets/img/user.png" class="user-image" alt=""><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="12" height="7">
                                        <image width="12" height="7" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAwAAAAHCAQAAACWu2SvAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAAmJLR0QA/4ePzL8AAAAHdElNRQflCxgKKTQARYB4AAAAa0lEQVQI103NoQoCYQDD8VkMggYRLYLFt7rmI10ziMVkEs6m2ZcwWQQRsdh/huM73dL+jC0qjYn8eaSxijNu5h2euuISA0c8LUUs3HEybFt7fMyMvXEQKQMbvDywa8nvsgbrknvSaZt+qhK+nGpkpn2sFJAAAAAASUVORK5CYII=" />
                                    </svg>
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right text-center">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">LogOut</a></li>
                                    <li><a href="#">Setting</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <!-- navigation end -->

    <div class="userheader">
        <div class="container text-center ">
            <h1 class="welcome">Welcome,<span class="uname"> Gaurang!</span></h1>
        </div>
    </div>



    <!--navtab start -->
    <section class="nav-tab">
        <div class="row">
            <div class="col-lg-3">
                <nav class="vertical-nav navbar-expand-lg  " id="sidebar">

                    <div class="collapse navbar-collapse text-xl-left text-lg-center mynav " id="navbarSupportedContents3">
                        <ul class=" nav flex-column  mb-0 ">
                            <li class="nav-item" id="Dashboard" onclick="Tab1Click()">
                                <a class="nav-link">
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item active" id="Service_History" onclick="Tab2Click()">
                                <a class="nav-link" id="Service_History">
                                    Service History

                                </a>
                            </li>
                            <li class="nav-item" id="Service_Schedule" onclick="Tab3Click()">
                                <a class="nav-link">
                                    Service Schedule

                                </a>
                            </li>
                            <li class="nav-item" id="Favourite_Pros" onclick="Tab4Click()">
                                <a class="nav-link">
                                    Favourite Pros

                                </a>
                            </li>
                            <li class="nav-item" id="Invoices" onclick="Tab5Click()">
                                <a class="nav-link">
                                    Invoices

                                </a>
                            </li>
                            <li class="nav-item" id="Notifications" onclick="Tab6Click()">
                                <a class="nav-link">
                                    Notifications
                                </a>
                            </li>

                        </ul>
                    </div>
                </nav>
            </div>

            <!-- row model Start-->


            <!-- Modal -->
            <div class="modal fade" id="Row-Data_Model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row model End-->

            <div class="col-lg-9">
                <div id="History_Content">
                    <span class="sh"><strong>Service History</strong> </span>
                    <span class="ex-btn"><button id="export"> Export</button></span>
                    <table class="table table-responsive-sm table-hover" id="table-download">
                        <thead id="headings">
                            <tr>
                                <th scope="col">Service Details <img src="../assets/img/sort.png" class="sort"></th>
                                <th scope="col">Service Provider <img src="../assets/img/sort.png" class="sort"></th>
                                <th scope="col">Payment <img src="../assets/img/sort.png" class="sort"></th>
                                <th scope="col"> Status<img src="../assets/img/sort.png" class="sort"></th>
                                <th scope="col">Rate SP <img src="../assets/img/sort.png" class="sort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">
                                    <div class="col date"><img src="../assets/img/calendar.png" class="calender">31/03/2018</div>
                                    <div class="col time"> 12:00 - 18:00</div>
                                </td>
                                <td class="row">
                                    <div class="col-lx-3  cap-image">
                                        <img class="rounded" src="../assets/img/cap.png" alt="">
                                    </div>
                                    <div class="col-lx-9 name-star">
                                        <span class="name-lyum">Lyum Watson</span>
                                        <span class="star">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star2.png" alt="">
                                            <span class="star-no">4</span>
                                        </span>
                                    </div>
                                </td>
                                <td scope="row">
                                    <div class="col prices">&euro;63</div>
                                </td>
                                <td><button type="button" class="btn btn-status">Completed</button></td>
                                <td><button type="button" class="btn btn-rate">Rate SP</button></td>

                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="col date"><img src="../assets/img/calendar.png" class="calender">15/03/2018</div>
                                    <div class="col time"> 12:00 - 18:00</div>
                                </td>
                                <td class="row">
                                    <div class="col-lx-3 cap-image">
                                        <img class="rounded" src="../assets/img/cap.png" alt="">
                                    </div>
                                    <div class="col-lx-9 name-star">
                                        <span class="name-lyum">Lyum Watson</span>
                                        <span class="star">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star2.png" alt="">
                                            <span class="star-no">4</span>
                                        </span>
                                    </div>
                                </td>
                                <td scope="row">
                                    <div class="col prices">&euro;63</div>
                                </td>
                                <td><button type="button" class="btn btn-status">Completed</button></td>
                                <td><button type="button" class="btn btn-rate">Rate SP</button></td>

                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="col date"><img src="../assets/img/calendar.png" class="calender">10/03/2018</div>
                                    <div class="col time"> 12:00 - 18:00</div>
                                </td>
                                <td class="row">
                                    <div class="col-lx-3 cap-image">
                                        <img class="rounded" src="../assets/img/cap.png" alt="">
                                    </div>
                                    <div class="col-lx-9 name-star">
                                        <span class="name-lyum">Lyum Watson</span>
                                        <span class="star">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star2.png" alt="">
                                            <span class="star-no">4</span>
                                        </span>
                                    </div>
                                </td>
                                <td scope="row">
                                    <div class="col prices">&euro;63</div>
                                </td>
                                <td><button type="button" class="btn btn-status">Completed</button></td>
                                <td><button type="button" class="btn btn-rate">Rate SP</button></td>

                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="col date"><img src="../assets/img/calendar.png" class="calender">28/02/2018</div>
                                    <div class="col time"> 12:00 - 18:00</div>
                                </td>
                                <td class="row">
                                    <div class="col-lx-3 cap-image">
                                        <img class="rounded" src="../assets/img/cap.png" alt="">
                                    </div>
                                    <div class="col-lx-9 name-star">
                                        <span class="name-lyum">Lyum Watson</span>
                                        <span class="star">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star2.png" alt="">
                                            <span class="star-no">4</span>
                                        </span>
                                    </div>
                                </td>
                                <td scope="row">
                                    <div class="col prices">&euro;63</div>
                                </td>
                                <td><button type="button" class="btn btn-status-cancle">Canclled</button></td>
                                <td><button type="button" class="btn btn-rate">Rate SP</button></td>

                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="col date"><img src="../assets/img/calendar.png" class="calender">15/02/2018</div>
                                    <div class="col time"> 12:00 - 18:00</div>
                                </td>
                                <td class="row">
                                    <div class="col-lx-3 cap-image">
                                        <img class="rounded" src="../assets/img/cap.png" alt="">
                                    </div>
                                    <div class="col-lx-9 name-star">
                                        <span class="name-lyum">Lyum Watson</span>
                                        <span class="star">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star2.png" alt="">
                                            <span class="star-no">4</span>
                                        </span>
                                    </div>
                                </td>
                                <td scope="row">
                                    <div class="col prices">&euro;63</div>
                                </td>
                                <td><button type="button" class="btn btn-status">Completed</button></td>
                                <td><button type="button" class="btn btn-rate">Rate SP</button></td>

                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="col date"><img src="../assets/img/calendar.png" class="calender">11/02/2018</div>
                                    <div class="col time"> 12:00 - 18:00</div>
                                </td>
                                <td class="row">
                                    <div class="col-lx-3 cap-image">
                                        <img class="rounded" src="../assets/img/cap.png" alt="">
                                    </div>
                                    <div class="col-lx-9 name-star">
                                        <span class="name-lyum">Lyum Watson</span>
                                        <span class="star">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star2.png" alt="">
                                            <span class="star-no">4</span>
                                        </span>
                                    </div>
                                </td>
                                <td scope="row">
                                    <div class="col prices">&euro;63</div>
                                </td>
                                <td><button type="button" class="btn btn-status-cancle">Canclled</button></td>
                                <td><button type="button" class="btn btn-rate">Rate SP</button></td>

                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="col date"><img src="../assets/img/calendar.png" class="calender">31/01/2018</div>
                                    <div class="col time"> 12:00 - 18:00</div>
                                </td>
                                <td class="row">
                                    <div class="col-lx-3 cap-image">
                                        <img class="rounded" src="../assets/img/cap.png" alt="">
                                    </div>
                                    <div class="col-lx-9 name-star">
                                        <span class="name-lyum">Lyum Watson</span>
                                        <span class="star">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star2.png" alt="">
                                            <span class="star-no">4</span>
                                        </span>
                                    </div>
                                </td>
                                <td scope="row">
                                    <div class="col prices">&euro;63</div>
                                </td>
                                <td><button type="button" class="btn btn-status">Completed</button></td>
                                <td><button type="button" class="btn btn-rate">Rate SP</button></td>

                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="col date"><img src="../assets/img/calendar.png" class="calender">19/01/2018</div>
                                    <div class="col time"> 12:00 - 18:00</div>
                                </td>
                                <td class="row">
                                    <div class="col-lx-3 cap-image">
                                        <img class="rounded" src="../assets/img/cap.png" alt="">
                                    </div>
                                    <div class="col-lx-9 name-star">
                                        <span class="name-lyum">Lyum Watson</span>
                                        <span class="star">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star2.png" alt="">
                                            <span class="star-no">4</span>
                                        </span>
                                    </div>
                                </td>
                                <td scope="row">
                                    <div class="col prices">&euro;63</div>
                                </td>
                                <td><button type="button" class="btn btn-status">Completed</button></td>
                                <td><button type="button" class="btn btn-rate">Rate SP</button></td>

                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="col date"><img src="../assets/img/calendar.png" class="calender">05/01/2018</div>
                                    <div class="col time"> 12:00 - 18:00</div>
                                </td>
                                <td class="row">
                                    <div class="col-lx-3 cap-image">
                                        <img class="rounded" src="../assets/img/cap.png" alt="">
                                    </div>
                                    <div class="col-lx-9 name-star">
                                        <span class="name-lyum">Lyum Watson</span>
                                        <span class="star">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star2.png" alt="">
                                            <span class="star-no">4</span>
                                        </span>
                                    </div>
                                </td>
                                <td scope="row">
                                    <div class="col prices">&euro;63</div>
                                </td>
                                <td><button type="button" class="btn btn-status-cancle">Cancelled</button></td>
                                <td><button type="button" class="btn btn-rate">Rate SP</button></td>

                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="col date"><img src="../assets/img/calendar.png" class="calender">01/01/2018</div>
                                    <div class="col time"> 12:00 - 18:00</div>
                                </td>
                                <td class="row">
                                    <div class="col-lx-3 cap-image">
                                        <img class="rounded" src="../assets/img/cap.png" alt="">
                                    </div>
                                    <div class="col-lx-9 name-star">
                                        <span class="name-lyum">Lyum Watson</span>
                                        <span class="star">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star1.png" alt="">
                                            <img src="../assets/img/star2.png" alt="">
                                            <span class="star-no">4</span>
                                        </span>
                                    </div>
                                </td>
                                <td scope="row">
                                    <div class="col prices">&euro;63</div>
                                </td>
                                <td><button type="button" class="btn btn-status-cancle">Cancelled</button></td>
                                <td><button type="button" class="btn btn-rate">Rate SP</button></td>

                            </tr>

                        </tbody>
                    </table>
                    <div class=" tab-end">
                        <div class="left-entry">
                            <span>Show</span>
                            <span class="brdr-spn">10<i class='fa fa-angle-down'></i> </span>
                            <span class="entries">entries</span>
                            <span>Total Record: 55</span>
                        </div>
                        <div class=" right-entry">
                            <span class="next-to-next"><img src="../assets/img/next-to-next.png" alt=""></span>
                            <span><i class='fa fa-angle-left'></i></span>
                            <span class="page-1">1</span>
                            <span>2</span>
                            <span>3</span>
                            <span>4</span>
                            <span><i class='fa fa-angle-right'></i></span>
                            <span class="next-to-next" id="next-to-next"><img src="../assets/img/next-to-next.png" alt=""></span>
                        </div>
                    </div>
                </div>
                <div id="Dashboard_Content" style="display:none;">
                    <span class="sh"><strong>Current Service Requests</strong> </span>
                    <span class="ex-btn"><button id="" style="width: 200px;"> Add new service request</button></span>
                    <table class="table table-responsive-sm table-hover" id="">
                        <thead id="headings">
                            <tr>
                                <th scope="col">Service Id <img src="../assets/img/sort.png" class="sort"></th>
                                <th scope="col">Services Date <img src="../assets/img/sort.png" class="sort"></th>
                                <th scope="col">Service Provider <img src="../assets/img/sort.png" class="sort"></th>
                                <th scope="col"> Payment<img src="../assets/img/sort.png" class="sort"></th>
                                <th scope="col">Action <img src="../assets/img/sort.png" class="sort"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr data-toggle="modal" data-target="#Row-Data_Model">
                                <td scope="row">
                                    1
                                </td>
                                <td scope="row">
                                    2
                                </td>
                                <td scope="row">
                                    3
                                </td>
                                <td scope="row">
                                    4
                                </td>
                                <td scope="row">
                                    <span><button class="btn btn-primary m-2" id="Reschedule" data-toggle="modal" data-target="#Reschedual-Model">Reschedule</button><button class="btn btn-danger" data-toggle="modal" data-target="#Cancle-Model">Cancel</button></span>
                                </td>
                                <!-- Button trigger modal -->


                                <!-- Reschedule Modal  -->
                                <div class="modal fade" id="Reschedual-Model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...2
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Reschedule Modal  End -->

                                <!-- cancel Modal  -->
                                <div class="modal fade" id="Cancle-Model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                ...3
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cancle Modal  End -->
                            </tr>
                            <tr data-toggle="modal" data-target="#Row-Data_Model">
                                <td scope="row">
                                    1
                                </td>
                                <td scope="row">
                                    2
                                </td>
                                <td scope="row">
                                    3
                                </td>
                                <td scope="row">
                                    4
                                </td>
                                <td scope="row">
                                    5
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
                <div id="Schedule_Content" style="display:none;">
                    Scheduale content
                </div>
                <div id="Favourite_Content" style="display:none;">
                    Fsvourite content
                </div>
                <div id="Invoices_Content" style="display:none;">
                    Invoice content
                </div>
                <div id="Notifications_Content" style="display:none;">
                    Notificaion content
                </div>
            </div>

        </div>
    </section>

    <?php include("footer1.php"); ?>


    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/js/table2excel.js"></script>
    <script src="../assets/js/Services-History.js"></script>

</body>

</html>