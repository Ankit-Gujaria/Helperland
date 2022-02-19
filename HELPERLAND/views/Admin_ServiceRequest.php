<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin_ServiceRequest</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/Admin_ServiceRequest.css">
 

</head>

<body>
    <!--header start-->
    <section>
        <nav class="navbar navbar-expand-sm fixed-top top-navigation">
            <a class="navbar-brand p-0 c-name" href="#">helperland</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto  mb-lg-0 ">
                    <li class="nav-item" id="profile">
                        <a class=" header-nav-2" href="#">
                            <img src="../assets/img/user.png" alt=""> </a>
                        <span class="james-name">James Smith</span>
                    </li>
                    <li class="nav-item logout">
                        <a href="#"><img src="../assets/img/logout.png" alt=""></a>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <!--header end-->
   <div class="row admin-sq" style="background: #f2f4f5; margin-top: 60px; width: 100%;">
        <div class="col-md-3 left-manu">
            <nav class="sidebar card py-2" style="height: 100%;">
                <ul class="nav flex-column" id="nav_accordion">
                    <li class="nav-item ">
                        <a class="nav-link" href="#"> Service Management </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Role Management </a>
                    </li>
                    <li class="nav-item has-submenu">
                        <a class="nav-link" href="#"> Coupon Code Management <img src="../assets/img/forma-1-copy-14@3x.png"
                                alt=""></a>
                        <ul class="submenu collapse">
                            <li><a class="nav-link" href="#">Coupon Codes</a></li>
                            <li><a class="nav-link" href="#">Usage History </a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Escalation Management </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" id="sr-color">Service Requests</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Service Providers </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> User Management</a>
                    </li>
                    <li class="nav-item has-submenu">
                        <a class="nav-link" href="#"> Finance Module<img src="../assets/img/forma-1-copy-14@3x.png" alt=""></a>
                        <ul class="submenu collapse">
                            <li><a class="nav-link" href="#">All Transactions</a></li>
                            <li><a class="nav-link" href="#"> Generate Payment</a></li>
                            <li><a class="nav-link" href="#"> Customer Invoices</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Zip Code Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Rating Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Inquiry Management </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"> Newsletter Management </a>
                    </li>
                    <li class="nav-item has-submenu">
                        <a class="nav-link" href="#"> Content Management<img src="../assets/img/forma-1-copy-14@3x.png"
                                alt=""></a>
                        <ul class="submenu collapse">
                            <li><a class="nav-link" href="#">Blog</a></li>
                            <li><a class="nav-link" href="#">FAQs</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    
        <div class="col-md-9">
            <div class="tbl">
                <div class="um-head">
                    <span class="um-sub">Service Requests</span>

                </div>
        
        
                <div class="frm">
                    <form>
                        <div class="form-row">
                            <div class="col-auto zero">
                                <label class="sr-only" for="inlineFormInput">Service ID</label>
                                <input type="text" class="form-control" id="inlineFormInput" placeholder="Service ID">
                            </div>
                            <div class="col-auto one">
                                <select class="form-control form-control-lg" >
                                    <option>Customer</option>
                                    <option>Ankit Gujaria</option>
                                </select>
                            </div>
                            <div class="col-auto two">
                                <select class="form-control form-control-lg">
                                    <option>Service Provider</option>
                                </select>
                            </div>
                            <div class="col-auto three">
                                <select class="form-control form-control-lg">
                                    <option>Status</option>
                                </select>
                            </div>
                            <div class="col-auto four" >
                                <label class="sr-only" for="inlineFormInput">From Date</label>
                                <input type="text" class="form-control" id="inlineFormInput" placeholder="From Date">
                            </div>
                            <div class="col-auto five">
                                <label class="sr-only" for="inlineFormInput">To Date</label>
                                <input type="text" class="form-control" id="inlineFormInput" placeholder="To Date">
                            </div>
                            <div class="col-auto six" style="margin-bottom: 15px;">
                                <button type="submit" class="btn search">Search</button>
                            </div>
                            <div class="col-auto seven">
                                <button type="submit" class="btn clear">Clear</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="data-tbl" style="padding-top: 15px;">
        
                    <table class="table table-responsive-sm ">
                        <thead id="headings">
                            <tr>
                                <th scope="col"> Service ID   <img src="../assets/img/sort.png" class="sort"></th>
                                <th scope="col">Service date<img src="../assets/img/sort.png" class="sort"></th>
                                <th scope="col"> Customer details <img src="../assets/img/sort.png" class="sort"></th>
                                <th scope="col"> Service provider<img src="../assets/img/sort.png" class="sort"></th>
                                <th scope="col"> Status<img src="../assets/img/sort.png" class="sort"> </th>
                                <th scope="col">Actions</th>
                                
                        </thead>
                                                                                                                                                     
                        <tbody>
                            <tr>
                                <td scope="row">
                                    <div class="serviceid" >323436</div>
                                </td>
                                <td scope="row" style=" padding-left: 0px;">
                                    <div class="col date"><img src="../assets/img/calculator@3x.png" class="calender">09/04/2018</div>
                                    <div class="col time"><img src="../assets/img/layer-712.png" class="clock">12:00 - 18:00</div>
                                </td>
                                <td scope="row">
                                    <div clas="col name">David Bough </div>
                                    <div class="col address"><img src="../assets/img/layer-15.png" class="home">Musterstrabe 5,12345 Bonn</div>
                                  </td>

                                  <td class="row">
                                    
                                  </td>
                                <td ><button type="button" class="btn btn-status">New</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dot" type="button" data-toggle="dropdown">
                                            <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right d-list">
                                            <li><a href="#">Edit & Reschedule </a></li>
                                            <li><a href="#">Refund</a></li>  
                                                <li><a href="#">Cancel</a></li>
                                                <li><a href="#">Change SP</a></li>
                                                <li><a href="#">Escalate</a></li>
                                                <li><a href="#">History Log</a></li>
                                                <li><a href="#"> Download Invoice </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td scope="row">
                                    <div class="serviceid" >323436</div>
                                </td>
                                <td scope="row" style=" padding-left: 0px;">
                                    <div class="col date"><img src="../assets/img/calculator@3x.png" class="calender">09/04/2018</div>
                                    <div class="col time"><img src="../assets/img/layer-712.png" class="clock">12:00 - 18:00</div>
                                </td>
                                <td scope="row">
                                    <div clas="col name">David Bough </div>
                                    <div class="col address"><img src="../assets/img/layer-15.png" class="home">Musterstrabe 5,12345 Bonn</div>
                                  </td>

                                <td class="row">
                                    
                                </td>
                                <td ><button type="button" class="btn btn-status">New</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dot" type="button" data-toggle="dropdown">
                                            <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right d-list">
                                            <li><a href="#">Edit & Reschedule </a></li>
                                            <li><a href="#">Refund</a></li>  
                                                <li><a href="#">Cancel</a></li>
                                                <li><a href="#">Change SP</a></li>
                                                <li><a href="#">Escalate</a></li>
                                                <li><a href="#">History Log</a></li>
                                                <li><a href="#"> Download Invoice </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td scope="row">
                                    <div class="serviceid" >323436</div>
                                </td>
                                <td scope="row" style=" padding-left: 0px;">
                                    <div class="col date"><img src="../assets/img/calculator@3x.png" class="calender">09/04/2018</div>
                                    <div class="col time"><img src="../assets/img/layer-712.png" class="clock">12:00 - 18:00</div>
                                </td>
                                <td scope="row">
                                    <div clas="col name">David Bough </div>
                                    <div class="col address"><img src="../assets/img/layer-15.png" class="home">Musterstrabe 5,12345 Bonn</div>
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
                                <td ><button type="button" class="btn btn-status-pending">Pending</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dot" type="button" data-toggle="dropdown">
                                            <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right d-list">
                                            <li><a href="#">Edit & Reschedule </a></li>
                                            <li><a href="#">Refund</a></li>  
                                                <li><a href="#">Cancel</a></li>
                                                <li><a href="#">Change SP</a></li>
                                                <li><a href="#">Escalate</a></li>
                                                <li><a href="#">History Log</a></li>
                                                <li><a href="#"> Download Invoice </a></li> 
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td scope="row">
                                    <div class="serviceid" >323436</div>
                                </td>
                                <td scope="row" style=" padding-left: 0px;">
                                    <div class="col date"><img src="../assets/img/calculator@3x.png" class="calender">09/04/2018</div>
                                    <div class="col time"><img src="../assets/img/layer-712.png" class="clock">12:00 - 18:00</div>
                                </td>
                                <td scope="row">
                                    <div clas="col name">David Bough </div>
                                    <div class="col address"><img src="../assets/img/layer-15.png" class="home">Musterstrabe 5,12345 Bonn</div>
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
                                <td ><button type="button" class="btn btn-status-pending">Pending</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dot" type="button" data-toggle="dropdown">
                                            <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right d-list">
                                            <li><a href="#">Edit & Reschedule </a></li>
                                            <li><a href="#">Refund</a></li>  
                                                <li><a href="#">Cancel</a></li>
                                                <li><a href="#">Change SP</a></li>
                                                <li><a href="#">Escalate</a></li>
                                                <li><a href="#">History Log</a></li>
                                                <li><a href="#"> Download Invoice </a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="serviceid" >323436</div>
                                </td>
                                <td scope="row" style=" padding-left: 0px;">
                                    <div class="col date"><img src="../assets/img/calculator@3x.png" class="calender">09/04/2018</div>
                                    <div class="col time"><img src="../assets/img/layer-712.png" class="clock">12:00 - 18:00</div>
                                </td>
                                <td scope="row">
                                    <div clas="col name">David Bough </div>
                                    <div class="col address"><img src="../assets/img/layer-15.png" class="home">Musterstrabe 5,12345 Bonn</div>
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
                                <td ><button type="button" class="btn btn-status-complet">Completed</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dot" type="button" data-toggle="dropdown">
                                            <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right d-list">
                                            <li><a href="#">Edit & Reschedule </a></li>
                                            <li><a href="#">Refund</a></li>  
                                                <li><a href="#">Cancel</a></li>
                                                <li><a href="#">Change SP</a></li>
                                                <li><a href="#">Escalate</a></li>
                                                <li><a href="#">History Log</a></li>
                                                <li><a href="#"> Download Invoice </a></li> 
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td scope="row">
                                    <div class="serviceid" >323436</div>
                                </td>
                                <td scope="row" style=" padding-left: 0px;">
                                    <div class="col date"><img src="../assets/img/calculator@3x.png" class="calender">09/04/2018</div>
                                    <div class="col time"><img src="../assets/img/layer-712.png" class="clock">12:00 - 18:00</div>
                                </td>
                                <td scope="row">
                                    <div clas="col name">David Bough </div>
                                    <div class="col address"><img src="../assets/img/layer-15.png" class="home">Musterstrabe 5,12345 Bonn</div>
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
                                <td ><button type="button" class="btn btn-status-complet">Completed</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dot" type="button" data-toggle="dropdown">
                                            <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right d-list">
                                            <li><a href="#">Edit & Reschedule </a></li>
                                            <li><a href="#">Refund</a></li>  
                                                <li><a href="#">Cancel</a></li>
                                                <li><a href="#">Change SP</a></li>
                                                <li><a href="#">Escalate</a></li>
                                                <li><a href="#">History Log</a></li>
                                                <li><a href="#"> Download Invoice </a></li> 
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td scope="row">
                                    <div class="serviceid" >323436</div>
                                </td>
                                <td scope="row" style=" padding-left: 0px;">
                                    <div class="col date"><img src="../assets/img/calculator@3x.png" class="calender">09/04/2018</div>
                                    <div class="col time"><img src="../assets/img/layer-712.png" class="clock">12:00 - 18:00</div>
                                </td>
                                <td scope="row">
                                    <div clas="col name">David Bough </div>
                                    <div class="col address"><img src="../assets/img/layer-15.png" class="home">Musterstrabe 5,12345 Bonn</div>
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
                                <td ><button type="button" class="btn btn-status-cancle">Cancelled</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dot" type="button" data-toggle="dropdown">
                                            <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right d-list">
                                            <li><a href="#">Edit & Reschedule </a></li>
                                            <li><a href="#">Refund</a></li>  
                                                <li><a href="#">Cancel</a></li>
                                                <li><a href="#">Change SP</a></li>
                                                <li><a href="#">Escalate</a></li>
                                                <li><a href="#">History Log</a></li>
                                                <li><a href="#"> Download Invoice </a></li> 
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">
                                    <div class="serviceid" >323436</div>
                                </td>
                                <td scope="row" style=" padding-left: 0px;">
                                    <div class="col date"><img src="../assets/img/calculator@3x.png" class="calender">09/04/2018</div>
                                    <div class="col time"><img src="../assets/img/layer-712.png" class="clock">12:00 - 18:00</div>
                                </td>
                                <td scope="row">
                                    <div clas="col name">David Bough </div>
                                    <div class="col address"><img src="../assets/img/layer-15.png" class="home">Musterstrabe 5,12345 Bonn</div>
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
                                <td ><button type="button" class="btn btn-status-complet">Completed</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dot" type="button" data-toggle="dropdown">
                                            <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right d-list">
                                            <li><a href="#">Edit & Reschedule </a></li>
                                            <li><a href="#">Refund</a></li>  
                                                <li><a href="#">Cancel</a></li>
                                                <li><a href="#">Change SP</a></li>
                                                <li><a href="#">Escalate</a></li>
                                                <li><a href="#">History Log</a></li>
                                                <li><a href="#"> Download Invoice </a></li> 
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td scope="row">
                                    <div class="serviceid" >323436</div>
                                </td>
                                <td scope="row" style=" padding-left: 0px;">
                                    <div class="col date"><img src="../assets/img/calculator@3x.png" class="calender">09/04/2018</div>
                                    <div class="col time"><img src="../assets/img/layer-712.png" class="clock">12:00 - 18:00</div>
                                </td>
                                <td scope="row">
                                    <div clas="col name">David Bough </div>
                                    <div class="col address"><img src="../assets/img/layer-15.png" class="home">Musterstrabe 5,12345 Bonn</div>
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
                                <td ><button type="button" class="btn btn-status-cancle">Cancelled</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dot" type="button" data-toggle="dropdown">
                                            <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right d-list">
                                            <li><a href="#">Edit & Reschedule </a></li>
                                            <li><a href="#">Refund</a></li>  
                                                <li><a href="#">Cancel</a></li>
                                                <li><a href="#">Change SP</a></li>
                                                <li><a href="#">Escalate</a></li>
                                                <li><a href="#">History Log</a></li>
                                                <li><a href="#"> Download Invoice </a></li> 
                                        </ul>
                                    </div>
                                </td>
                            </tr>

                            <tr>
                                <td scope="row">
                                    <div class="serviceid" >323436</div>
                                </td>
                                <td scope="row" style=" padding-left: 0px;">
                                    <div class="col date"><img src="../assets/img/calculator@3x.png" class="calender">09/04/2018</div>
                                    <div class="col time"><img src="../assets/img/layer-712.png" class="clock">12:00 - 18:00</div>
                                </td>
                                <td scope="row">
                                    <div clas="col name">David Bough </div>
                                    <div class="col address"><img src="../assets/img/layer-15.png" class="home">Musterstrabe 5,12345 Bonn</div>
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
                                <td ><button type="button" class="btn btn-status-complet">Completed</button></td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn dot" type="button" data-toggle="dropdown">
                                            <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                        <ul class="dropdown-menu dropdown-menu-right d-list">
                                            <li><a href="#">Edit & Reschedule </a></li>
                                            <li><a href="#">Refund</a></li>  
                                                <li><a href="#">Cancel</a></li>
                                                <li><a href="#">Change SP</a></li>
                                                <li><a href="#">Escalate</a></li>
                                                <li><a href="#">History Log</a></li>
                                                <li><a href="#"> Download Invoice </a></li> 
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="3" >
                                 <div class="left">
                                 <span>Show</span>
                                 <span class="brdr-spn">10<i class="fa fa-caret-down" aria-hidden="true"></i> </span>
                                 <span class="entries">entries</span>
                                 </div>
                                </td>
                                <td colspan="5">
                                 <div class="right">
                                 <span><i class='fa fa-caret-left'></i></span>
                                 <span class="page-1">1</span>
                                 <span>2</span>
                                 <span>3</span>
                                 <span>4</span>
                                 <span><i class="fa fa-caret-right" aria-hidden="true"></i></span>
                                 
                                 </div>
                                </td>
                              </tr>
                              
                        </tbody>
                </table>

                <div class="policy">
                    <span>©2018 Helperland. All rights reserved.</span>
                </div>
        </div>

    </div>   


    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            document.querySelectorAll('.sidebar .nav-link').forEach(function (element) {

                element.addEventListener('click', function (e) {

                    let nextEl = element.nextElementSibling;
                    let parentEl = element.parentElement;

                    if (nextEl) {
                        e.preventDefault();
                        let mycollapse = new bootstrap.Collapse(nextEl);

                        if (nextEl.classList.contains('show')) {
                            mycollapse.hide();
                        } else {
                            mycollapse.show();
                            // find other submenus with class=show
                            var opened_submenu = parentEl.parentElement.querySelector('.submenu.show');
                            // if it exists, then close all of them
                            if (opened_submenu) {
                                new bootstrap.Collapse(opened_submenu);
                            }
                        }
                    }
                }); // addEventListener
            })   // forEach
        });
                 // DOMContentLoaded  end
    </script>

</body>

</html>