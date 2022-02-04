<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiceProviderRegistrer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    /* Service provider model start*/

.modal-body .int{
	height: 45px;
	border: 1px solid rgb(206, 196, 196);
	border-radius: 5px;
}

.ck {
	width: 25px;
	height: 25px;
}

.rmb {
	margin-left: 10px;
	padding-top: 5px;
	font-size: 16px;
}

.rmb a {
	text-decoration: none;
}
.modal-footer .modalButton {
	width: 200px;
	border: none;
	border-radius: 40px;
	background: darkcyan;
	color: aliceblue;
	font-weight: 600;
	font-size: 20px;
	margin-top:60px ;
   margin-bottom: 100px !important;
   
}


/*Service provider model end*/
</style>
</head>
<body>
      <!--service provider Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
              <div class="modal-header justify-content-center" style="border-bottom:none;">

                  <h4 class="modal-title" id="exampleModalLongTitle">Register as helper</h4>
                  
              </div>
           <form>   
              <div class="modal-body">
               <div class="form-row align-items-center">
                  <div class="col-md-12">
                      <label class="sr-only" for="inlineFormInput">f_Name</label>
                      <input type="text" class="form-control mb-3  int"  id="inlineFormInput" placeholder="First given name">
                  </div>
                  <div class="col-md-12">
                      <label class="sr-only" for="inlineFormInput">l_Name</label>
                      <input type="text" class="form-control mb-3 int" id="inlineFormInput" placeholder="Surname">
                  </div>
                  <div class="col-md-12">
                      <label class="sr-only" for="inlineFormInput">E-mail</label>
                      <input type="text" class="form-control mb-3 int" id="inlineFormInput"
                          placeholder="E-mail address">
                  </div>
                  <div class="col-md-12">
                      <label class="sr-only" for="inlineFormInputGroup"></label>
                      <div class="input-group mb-3">
                          <div class="input-group-prepend">
                              <div class="input-group-text int">+49</div>
                          </div>
                          <input type="text" class="form-control int" id="inlineFormInputGroup"
                              placeholder="Mobile number">
                      </div>
                  </div>
                  <div class="col-md-12">
                      <label class="sr-only" for="inlineFormInput">Password</label>
                      <input type="text" class="form-control mb-3 int" id="inlineFormInput" placeholder="Password">
                  </div>
                  <div class="col-md-12">
                      <label class="sr-only" for="inlineFormInput">C_password</label>
                      <input type="text" class="form-control mb-3 int" id="inlineFormInput"
                          placeholder="Confirm password">
                  </div>
                  <div class="col-12">
                      <div class="form-check mb-2">
                          <input class="form-check-input ck" type="checkbox" id="autoSizingCheck">
                          <label class="form-check-label rmb" for="autoSizingCheck">
                              I accept <a href="">turms and conditions</a> & <a href="">privacy policy.</a>
                          </label>
                      </div>
                  </div>
                 
                  
              </div>
         
              </div>
              <div class="modal-footer justify-content-center" style="border-top:none;">
                  
              <button type="submit" class="btn mb-4 modalButton">Get started </button>
              </div>
              </form>  
          </div>
      </div>
  </div>
</body>
</html>