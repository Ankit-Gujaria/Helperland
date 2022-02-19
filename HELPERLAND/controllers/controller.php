<?php 
   
   class Controller{


          private $usermodel;

          function __construct()
           {
              include('model/Connection.php');
              $this->usermodel=new Helperland();
           }

          function HomePage()
            {
             include('view/index.php');

            }

            function customerRegister(){
		    //$baseurl = "localhost/Helperland/customerRegister.php";
		    $data = [
			'usersFirstName' => $_POST['usersFirstName'],
			'usersLastName' => $_POST['usersLastName'],
			'usersEmail' => $_POST['usersEmail'],
			'phone'=>$_POST['phone'],
			'usersPwd' => $_POST['usersPwd'],
			'pwdRepeat' => $_POST['pwdRepeat'],
			'userTypeId' => 1,
			'creationDate'=>date('Y-m-d H:i:s'),
			'currentTime'=>time(),
			'status' => 'New', 
			'isregistered' => 'YES',
			'isactive' => 'No'
			//date('Y-m-d H:i:s'),
            //'resetkey' => $resetkey,
			//'roleid' => 'Customer',
		
            ];

		  // Validate inputs
	    	if(empty($data['usersFirstName']) || empty($data['usersLastName']) || empty($data['usersEmail']) || empty($data['phone']) || empty($data['usersPwd']) || empty($data['pwdRepeat']))
		    {
                flash("register", "For registering Please fill out all inputs");
                redirect('../views/CreateAccount.php');
            }


		     if(!filter_var($data['usersEmail'],FILTER_VALIDATE_EMAIL)){
			 flash("register","Invalid Email");
		 	 redirect("../views/customerRegister.php");
		    }
		
		     if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,14}$/" ,$data['usersPwd'])){
		     	flash("register","Please make strong password");
			    redirect("../views/CreateAccount.php");
		    }
		   else if ($data['usersPwd'] !== $data['pwdRepeat']){
			  flash("register","Passwords are don't match");
			  redirect("../views/CreateAccount.php");
		    }

		     // User with same email or password already exist
		    if($this->usermodel->findUserByEmailOrUsername($data['usersEmail'],$data['usersFirstName'])){

			flash("register","Username or Email already exist");
			redirect("../views/CreateAccount.php");
		     }
		      // Password hashing

		      $data['usersPwd'] = password_hash($data['usersPwd'],PASSWORD_BCRYPT);

		      // Registration succesfull or not
		       if($this->usermodel->register($data)){
		     	$this->createUserSession($data['usersFirstName']." ".$data['usersLastName']);
			   ?>
			   <script type="text/javascript">
			     	alert ("Registerd succesfully");
			   </script>
		    	<?php
			    flash("register","Succesfully account created");
		     	redirect("../views/customer_service_history.php");
		       }
		  else
		    {
			echo "<h1>Account is not created ,please fill form proper</h1>";
		    }
 
             }
 

            function serviceprovider_Register(){

              //$baseurl = "localhost/Helperland/customerRegister.php";
              $data = [
             'usersFirstName' => $_POST['usersFirstName'],
              'usersLastName' => $_POST['usersLastName'],
               'usersEmail' => $_POST['usersEmail'],
              'phone'=>$_POST['phone'],
              'usersPwd' => $_POST['usersPwd'],
              'pwdRepeat' => $_POST['pwdRepeat'],
              'userTypeId' => 2,
              'creationDate'=>date('Y-m-d H:i:s'),
               'currentTime'=>time(),
               'status' => 'New', 
             'isregistered' => 'YES',
             'isactive' => 'No'
              //date('Y-m-d H:i:s'),
               //'resetkey' => $resetkey,
              //'roleid' => 'ServiceProvider'
    
        

    ];

    // Validate inputs
    if(empty($data['usersFirstName']) || empty($data['usersLastName']) || empty($data['usersEmail']) || empty($data['phone']) || empty($data['usersPwd']) || empty($data['pwdRepeat']))
    {
            flash("register", "For registering Please fill out all inputs");
        redirect('../views/Become_a_Pro.php');
    }


    if(!filter_var($data['usersEmail'],FILTER_VALIDATE_EMAIL)){
        flash("register","Invalid Email");
        redirect("../views/Become_a_Pro.php");
    }
    
    if(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,14}$/" ,$data['usersPwd'])){
        flash("register","Please make strong password");
        redirect("../views/Become_a_Pro.php");
    }
    else if ($data['usersPwd'] !== $data['pwdRepeat']){
        flash("register","Passwords are don't match");
        redirect("../views/Become_a_Pro.php");
    }

    // User with same email or password already exist
    if($this->usermodel->findUserByEmailOrUsername($data['usersEmail'],$data['usersFirstName'])){

        flash("register","Username or Email already exist");
        redirect("../views/Become_a_Pro.php");
    }
    // Password hashing

    $data['usersPwd'] = password_hash($data['usersPwd'],PASSWORD_BCRYPT);

    // Registration succesfull or not
    if($this->usermodel->register($data)){
        $this->createUserSession($data['usersFirstName']." ".$data['usersLastName']);
        ?>
        <script type="text/javascript">
            alert ("Registerd succesfully");
        </script>
        <?php
        flash("register" , "Registration succesfull");
        redirect("../views/upcoming_service.php");
    }
    
 

     function checkcode()
    {   
        if(isset($_POST)){
               $code = $_POST['code'];
               
               $result = $this->model->checkcode($code);
        }   
           
    }

     function addadress()
    {
        if(isset($_POST)){
           $userid = $_POST['userid'];
           $street = $_POST['street'];
           $house = $_POST['houseno'];
           $zip = $_POST['zip']; 
           $city = $_POST['city']; 
           $mobile = $_POST['mobile']; 
           $address = [
               'userid' => $userid,
               'street' => $street,
               'house' => $house,
               'zip' => $zip,
               'city' => $city,
               'mobile' => $mobile,
           ];
           $result = $this->model->addadress($address);
     } 
    }

     function showaddress()
    {
        if(isset($_POST)){
            $userid = $_POST['id'];
            $rest = $this->model->showaddress($userid);
            
        }
             
        
    }

     function booking()
    {
        if(isset($_POST)){
            $userid = $_POST['userid'];
            $code = $_POST['zip'];
            $date = $_POST['date'];
            
            $array = [
                'userid' => $userid,
                'code' => $code,
                'date' => $date,
            ];
            $rest = $this->model->booking($array);
            
        }
    }


  }

?>