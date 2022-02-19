<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/Create_Account.css">
    <?php 
			  include_once '../helpers/msgs.php'; 
              
    ?>
</head>
<body>
    <?php 
       include("header.php");
       include("login.php");
    ?>
<div class="create-account"  style="margin-top:120px">
        
        <div class="form">
            <h2 class="create-head text-center">Create an account</h2>
            <div class="design text-center">
            <hr><img src="../assets/img/forma-1-copy-5@3x.png" alt=""><hr>
            </div>
            <form>
                <div class="form-row align-items-center">
                    <div class="col-md-6">
                        <label class="sr-only" for="inlineFormInput">f_Name</label>
                        <input type="text" class="form-control mb-4 " name="usersFirstName" style=" height: 50px;" id="inlineFormInput" placeholder="First name">
                    </div>
                    <div class="col-md-6">
                        <label class="sr-only" for="inlineFormInput">l_Name</label>
                        <input type="text" class="form-control mb-4 " name="usersLastName" style=" height: 50px;" id="inlineFormInput" placeholder="Last name">
                    </div>
                    <div class="col-md-6">
                        <label class="sr-only" for="inlineFormInput">E-mail</label>
                        <input type="text" class="form-control mb-4 " name="usersEmail" style=" height: 50px;" id="inlineFormInput"
                            placeholder="E-mail address">
                    </div>
                    <div class="col-md-6">
                        <label class="sr-only" for="inlineFormInputGroup"></label>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <div class="input-group-text" style=" height: 50px;">+49</div>
                            </div>
                            <input type="text" class="form-control" name="phone" style=" height: 50px;" id="inlineFormInputGroup"
                                placeholder="Mobile number">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="sr-only" for="inlineFormInput">Password</label>
                        <input type="text" class="form-control mb-4" name="usersPwd" style=" height: 50px;" id="inlineFormInput" placeholder="Password">
                    </div>
                    <div class="col-md-6">
                        <label class="sr-only" for="inlineFormInput">C_password</label>
                        <input type="text" class="form-control mb-4" name="pwdRepeat" style=" height: 50px;" id="inlineFormInput"
                            placeholder="Confirm password">
                    </div>
                    <div class="col-12">
                        <div class="form-check mb-2">
                            <input class="form-check-input ck" type="checkbox" id="autoSizingCheck">
                            <label class="form-check-label rmb" for="autoSizingCheck">
                                I have read the <a href="">privacy policy.</a>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" class="btn  mb-4" name="submit" style=" height: 50px;" >Register</button>
                    </div>
                    <div class="col-12 text-center">
                        <span> Already Registerd? <a href="#" data-toggle="modal" data-target="#exampleModal" >Login now</a></span>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
          include("footer.php");
    ?>
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