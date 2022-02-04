<?php 
   
   class Controller{


    private $usermodel;

      function __construct()
      {
          include('model/Connection.php');
          $this->usermodel=new Helperland();
      }

     

   }


   public function contactUs(){
    $contact = [
        'Name' => $_POST['FirstName']. " " .$_POST['LastName'],
        'Email' => $_POST['Email'],
        'sub'=>$_POST['sub'],
        'phone'=>$_POST['phone'],
        'msg'=>$_POST['msg']
    ];

    // Validate inputs
    if(empty($contact['Name']) || empty($contact['Email']) || empty($contact['phone']) || empty($contact['sub']) || empty($contact['msg']))
    {
            flash('contact', 'Please fill out all inputs');
            redirect('../views/ContactUs.php');
    }
    // Message sent succesfull or not
    if($this->usermodel->contact($contact)){
        $_SESSION['mesaage'] = $contact['msg'];
        flash('succesmsg','Your message sent successfully','form-message form-message-green text-center text-success');
        redirect("../views/ContactUs.php");
    }
    else
    {
        echo "<h1>Message not sent</h1>";
    }



    public function customerRegister(){
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


public function serviceprovider_Register(){
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
    else
    {
        echo "<h1>Account is not created ,please fill form proper</h1>";
    }

}

public function login(){
        

    //Init data
    $data=[
        'Email' => trim($_POST['Email']),
        'usersPwd' => trim($_POST['password'])
    ];

    if(empty($data['Email']) || empty($data['usersPwd'])){
        flash("login", "Please fill out all inputs");
        header("location: ../views/index.php");
        exit();
    }

    //Check for user/email
    if($this->usermodel->findUserByEmailOrUsername($data['Email'], $data['Email'])){
        //User Found
        $loggedInUser = $this->usermodel->login($data['Email'], $data['usersPwd']);
        if($loggedInUser){
            //Create session
            $this->createUserSession($loggedInUser);
        }else{
            flash("login", "Password Incorrect");
            redirect("../views/index.php");
        }
    }else{
        flash("login", "No user found");
        redirect("../views/index.php");
    }
}
public function createUserSession($user){
    
    $_SESSION['FirstName'] = $user;
    redirect("../views/customer_service_history.php");
}

public function logout(){
    unset($_SESSION['FirstName']);
    session_destroy();
    redirect("../views/index.php");

}
}
$init = new Controller;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
switch ($_POST['type']){
     case 'contact' :
     $init->contactUs();
     break;

     case 'register' :
     $init->customerRegister();
     break;

     case 'service_provider' :
     $init->serviceprovider_Register();
     break;

     case 'login' :
     $init->login();
     break;
     default:
     redirect("../views/index.php");
}
}
else
{
switch($_GET['q']){
    case 'home' :
        redirect("../views/index.php");
        break;
    case 'about' :
        redirect("../views/About.php");
        break;
    case 'faq' :
        redirect("../views/FAQs.php");
        break;
    case 'contactus' : 
        redirect("../views/ContactUs.php");
        break;
    case 'prices' :
        redirect("../views/Prices.php");
        break;
    case 'serviceprovider' :
        redirect("../views/Become_a_Pro.php");
        break;
    case 'logout' :
        $init->logout();
        break;
    default:
        redirect("../views/index.php");

}
}



}


?>