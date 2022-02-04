<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forgotPassword</title>
</head>
<body>
     <!--Forgot password Modal -->
<div class="modal fade" id="forgotpassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" style="width:300px" role="document">
    <div class="modal-content">
      <div class="modal-header" style="border-bottom:none;" >
        <h4 class="modal-title" id="exampleModalLongTitle">Forgot password</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form>
      <div class="modal-body">
        <div class="row">
         <div class="col-12 mb-3">
            <input type="text" class="form-control" name="E_mail" placeholder="Email Address">
         </div>
        </div>
      </div>
      <div class="modal-footer justify-content-center" style="border-top:none;">
        <button type="button" class="btn col-12 btn-primary " name="send_btn" style="border-radius:30px;" >Send</button>
       <center>
        <div class="row ">
        <div class="col-12 mt-2 mb-2"> <a href="" class="forgot">Login now</a> </div>
        </div>
        </center>
      </div>
      </form>
    </div>
  </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>