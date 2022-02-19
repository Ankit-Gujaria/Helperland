<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="../assets/css/admin_User_management.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

    <!--body section start-->

    <div class="w3-sidebar w3-light w3-bar-block">
        <a href="#" class="w3-bar-item w3-button">Service Management</a>
        <a href="#" class="w3-bar-item w3-button">Role Management</a>
        <div class="dropdown"><a href="#" class="w3-bar-item w3-button " type="button" data-toggle="dropdown"> Coupon
                Code Management <span><i class='fa fa-angle-right' style="float: right;"></i></span></a>
            <ul class="dropdown-menu di-width">
                <li><a href="#">Sub-item 1</a></li>
                <li><a href="#">Sub-item 2</a></li>
                <li><a href="#">Sub-item 3</a></li>
            </ul>
        </div>
        <a href="#" class="w3-bar-item w3-button">Escalation Management</a>
        <a href="#" class="w3-bar-item w3-button">Service Requests</a>

        <a href="#" class="w3-bar-item w3-button">Service Providers</a>
        <a href="#" class="w3-bar-item w3-button" id="um">User Management</a>
        <div class="dropdown"><a href="#" class="w3-bar-item w3-button " type="button" data-toggle="dropdown">Finance
                Module<span><i class='fa fa-angle-right' style="float: right;"></i></span></a>
            <ul class="dropdown-menu di-width">
                <li><a href="#">Sub-item 1</a></li>
                <li><a href="#">Sub-item 2</a></li>
                <li><a href="#">Sub-item 3</a></li>
            </ul>
        </div>
        <a href="#" class="w3-bar-item w3-button">Zip Code Management</a>
        <a href="#" class="w3-bar-item w3-button">Rating Management</a>
        <a href="#" class="w3-bar-item w3-button">Inquiry Management</a>
        <a href="#" class="w3-bar-item w3-button">Newsletter Management</a>
        <div class="dropdown"><a href="#" class="w3-bar-item w3-button " type="button" data-toggle="dropdown">Content Management<span><i class='fa fa-angle-right' style="float: right;"></i></span></a>
        <ul class="dropdown-menu di-width">
            <li><a href="#">Sub-item 1</a></li>
            <li><a href="#">Sub-item 2</a></li>
            <li><a href="#">Sub-item 3</a></li>
        </ul>
    </div>
    </div>
  
    <div class="tbl">
        <div class="um-head">
            <span class="um-sub">User Management </span>
            <span class="add-btn"><button><img src="../assets/img/vector-smart-object@3x.png" alt="">Add New User</button></span>
        </div>


        <div class="frm">
            <form>
                <div class="form-row align-items-center">
                    <div class="col-auto one">
                        <select class="form-control form-control-lg" >
                            <option>User name</option>
                            <option>Ankit Gujaria</option>
                        </select>
                    </div>
                    <div class="col-auto two">
                        <select class="form-control form-control-lg">
                            <option>User role</option>
                        </select>
                    </div>
                    <div class="col-auto three">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+49</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup"
                                placeholder="Phonr number">
                        </div>
                    </div>
                    <div class="col-auto four">
                        <label class="sr-only" for="inlineFormInput">Zipcode</label>
                        <input type="text" class="form-control" id="inlineFormInput" placeholder="Zipcode">
                    </div>
                    <div class="col-auto five">
                        <button type="submit" class="btn search">Search</button>
                    </div>
                    <div class="col-auto six">
                        <button type="submit" class="btn clear">Clear</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="data-tbl" style="padding-top: 20px;">

            <table class="table table-responsive-sm ">
                <thead id="headings">
                    <tr>
                        <th scope="col">User Name <img src="../assets/img/sort.png" class="sort"></th>
                        <th scope="col">User Type</th>
                        <th scope="col">Role </th>
                        <th scope="col"> Postal Code<img src="../assets/img/sort.png" class="sort"></th>
                        <th scope="col">City </th>
                        <th scope="col">Radius<img src="../assets/img/sort.png" class="sort"></th>
                        <th scope="col">User Status<img src="../assets/img/sort.png" class="sort"></th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td scope="row">
                            <span class="name-lyum">Lyum watson</span>
                        </td>
                        <td class="row">
                            <span class="name-lyum" style="padding-left:12px;"> Call Center</span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> Inquiry Manager</span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> 123456 </span>
                        </td>

                        <td scope="row">
                            <span class="name-lyum">Berlin </span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> </span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-status">Active</button>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dot" type="button" data-toggle="dropdown">
                                    <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                <ul class="dropdown-menu dropdown-menu-right d-list">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#">Deactive</a></li>

                                  
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row">
                            <span class="name-lyum">John Smith</span>
                        </td>
                        <td class="row">
                            <span class="name-lyum" style="padding-left:12px;"> Service provider</span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"></span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> 123456 </span>
                        </td>

                        <td scope="row">
                            <span class="name-lyum">Berlin </span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum">10km </span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-status">Active</button>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dot" type="button" data-toggle="dropdown">
                                    <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                <ul class="dropdown-menu dropdown-menu-right d-list">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#">Deactive</a></li>

                                  
                                </ul>
                            </div>
                        </td>
                    </tr>

                    
                    <tr>
                        <td scope="row">
                            <span class="name-lyum">John Smith</span>
                        </td>
                        <td class="row">
                            <span class="name-lyum" style="padding-left:12px;"> Call Center</span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> Inquiry Manager</span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> 123456 </span>
                        </td>

                        <td scope="row">
                            <span class="name-lyum">Berlin </span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> </span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-status">Active</button>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dot" type="button" data-toggle="dropdown">
                                    <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                <ul class="dropdown-menu dropdown-menu-right d-list">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#">Deactive</a></li>

                                  
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row">
                            <span class="name-lyum">John Smith</span>
                        </td>
                        <td class="row">
                            <span class="name-lyum" style="padding-left:12px;">Customer</span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> </span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> 123456 </span>
                        </td>

                        <td scope="row">
                            <span class="name-lyum">Berlin </span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> </span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-status">Active</button>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dot" type="button" data-toggle="dropdown">
                                    <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                <ul class="dropdown-menu dropdown-menu-right d-list">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#">Deactive</a></li>
                                    <li><a href="#">Service History</a></li>

                                  
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row">
                            <span class="name-lyum">John Smith</span>
                        </td>
                        <td class="row">
                            <span class="name-lyum" style="padding-left:12px;"> Call Center</span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> Content Manager</span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> 123456 </span>
                        </td>

                        <td scope="row">
                            <span class="name-lyum">Berlin </span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> </span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-status">Active</button>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dot" type="button" data-toggle="dropdown">
                                    <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                <ul class="dropdown-menu dropdown-menu-right d-list">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#">Deactive</a></li>

                                  
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row">
                            <span class="name-lyum">John Smith</span>
                        </td>
                        <td class="row">
                            <span class="name-lyum" style="padding-left:12px;">Customer</span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> </span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> 123456 </span>
                        </td>

                        <td scope="row">
                            <span class="name-lyum">Berlin </span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> </span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-status-cancle">Inactive</button>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dot" type="button" data-toggle="dropdown">
                                    <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                <ul class="dropdown-menu dropdown-menu-right d-list">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#">Deactive</a></li>
                                    <li><a href="#">Service History</a></li>

                                  
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row">
                            <span class="name-lyum">John Smith</span>
                        </td>
                        <td class="row">
                            <span class="name-lyum" style="padding-left:12px;"> Service provider</span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"></span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> 123456 </span>
                        </td>

                        <td scope="row">
                            <span class="name-lyum">Berlin </span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum">20km </span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-status">Active</button>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dot" type="button" data-toggle="dropdown">
                                    <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                <ul class="dropdown-menu dropdown-menu-right d-list">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#">Deactive</a></li>
                                    <li><a href="#">Service Hisrory</a></li>
                                  
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td scope="row">
                            <span class="name-lyum">John Smith</span>
                        </td>
                        <td class="row">
                            <span class="name-lyum" style="padding-left:12px;"> Call Center</span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> Finance Manager</span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> 123456 </span>
                        </td>

                        <td scope="row">
                            <span class="name-lyum">Berlin </span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> </span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-status">Active</button>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dot" type="button" data-toggle="dropdown">
                                    <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                <ul class="dropdown-menu dropdown-menu-right d-list">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#">Deactive</a></li>

                                  
                                </ul>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td scope="row">
                            <span class="name-lyum">John Smith</span>
                        </td>
                        <td class="row">
                            <span class="name-lyum" style="padding-left:12px;">Customer</span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> </span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> 123456 </span>
                        </td>

                        <td scope="row">
                            <span class="name-lyum">Berlin </span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> </span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-status">Active</button>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dot" type="button" data-toggle="dropdown">
                                    <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                <ul class="dropdown-menu dropdown-menu-right d-list">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#">Deactive</a></li>
                                    <li><a href="#">Service History</a></li>

                                  
                                </ul>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td scope="row">
                            <span class="name-lyum">John Smith</span>
                        </td>
                        <td class="row">
                            <span class="name-lyum" style="padding-left:12px;">Customer</span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> </span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> 123456 </span>
                        </td>

                        <td scope="row">
                            <span class="name-lyum">Berlin </span>
                        </td>
                        <td scope="row">
                            <span class="name-lyum"> </span>
                        </td>
                        <td>
                            <button type="button" class="btn btn-status">Active</button>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn dot" type="button" data-toggle="dropdown">
                                    <span><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span></button>
                                <ul class="dropdown-menu dropdown-menu-right d-list">
                                    <li><a href="#">Edit</a></li>
                                    <li><a href="#">Deactive</a></li>
                                    <li><a href="#">Service History</a></li>

                                  
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

  <!--body section end-->

    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>