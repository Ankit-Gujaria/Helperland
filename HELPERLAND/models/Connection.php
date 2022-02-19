<?php

class Helperlend{


    //database connection create

    function __construct(){
      try{
     
          $servername = "localhost";
          $dbname = "project";
          $username = "root";
          $password = "";

          $this->conn = new PDO(
              "mysql:host=$servername; dbname=project",
              $username, $password
          );

  $this->conn->setAttribute(PDO::ATTR_ERRMODE,
              PDO::ERRMODE_EXCEPTION);
     }catch(PDOException $e){
              echo $e->getMessage();
     }
  }


  // contact with us

  public function contact($contact){

    $name = $contact['Name'];
    $email = $contact['Email'];
    $phone = $contact['phone'];
    $sub = $contact['sub'];
    $msg = $contact['msg'];
    $insert_query = "INSERT INTO contactus (Name,Email,Subject,PhoneNumber,Message) VALUES ('$name','$email','$sub','$phone','$msg')" ;
    
    $result_insert = mysqli_query($this->conn , $insert_query);

    if($result_insert)
    {
        return true;
    }
    else
    {
        return false;
    }
  }

  
  // registration 

  public function register($data){
    $Firstname = $data['usersFirstName'];
    $LastName = $data['usersLastName'];
    $Email = $data['usersEmail'];
    $Password = $data['usersPwd'];
    $Mobile = $data['phone'];
    $UserTypeId = $data['userTypeId'];
    $IsRegisteredUser = $data['isregistered'];
    $CreatedDate = $data['creationDate'];
    $IsActive = $data['isactive'];
    $Status = $data['status'];

    $insert_query = "INSERT INTO user (FirstName,LastName,Email,Password,Mobile,UserTypeId,IsRegisteredUser,CreatedDate,IsActive,Status) VALUES ('$Firstname','$LastName','$Email','$Password','$Mobile','$UserTypeId','$IsRegisteredUser','$CreatedDate','$IsActive','$Status')" ;
    
    $result_insert = mysqli_query($this->conn , $insert_query);

    if($result_insert)
    {
        return true;
    }
    else
    {
        return false;
    }
  }


 // login 

 public function login($email, $password){
    $row = $this->findUserByEmailOrUsername($email, $email);

    if($row == false) return false;
    $array = $row['array'];
    $hashedPassword =  $array['Password'];
    
    if(password_verify($password, $hashedPassword)){
        return $array['FirstName']." ".$array['LastName'];
    }else{
        return false;
    }
 }


  // Reset Password
  public function resetPassword($newPwdHash , $tokenEmail){
    $query_update = "UPDATE user SET Password = '$newPwdHash' WHERE Email = '$tokenEmail'";
    $result_update = mysqli_query($this->conn , $query_update);

    if($result_update){
        return true;
    }
    else
    {
        return false;
    }
 }


 // Find user by email or uername

  public function findUserByEmailOrUsername($email,$username){
    $select_query = "SELECT * FROM user where FirstName='$username' OR Email = '$email' ";
    $result = mysqli_query($this->conn , $select_query);
    $array = mysqli_fetch_assoc($result);
    $row = mysqli_num_rows($result);

    // check result

    if($row > 0){
        return array('result'=>$result,'array'=>$array);
    }
    else
    {
        return false;
    }

 }

 public function checkcode($code)
 {
     
     $sql = "SELECT * FROM zipcode WHERE ZipcodeValue = '$code' ";
     $stmt =  $this->conn->prepare($sql);
     $stmt->execute();
     $count = $stmt->rowCount();
     if($count == 1){
         echo json_encode('Yes');
     } else{
         echo json_encode('No');
     }
 }

 public function addadress($address)
 {
     $sql = "INSERT INTO useraddress (UserId , AddressLine1 , AddressLine2 , City , zip , Mobile )
     VALUES (:userid, :street, :house, :city, :zip, :mobile)";
     $stmt =  $this->conn->prepare($sql);
     $result = $stmt->execute($address);
     if($result){
         echo json_encode('Yes');
     } else{
         echo json_encode('No');
     }
 }

 public function showaddress($userid)
 {
     $sql = "SELECT * FROM useraddress WHERE UserId = '$userid'";
     $stmt =  $this->conn->prepare($sql);
     $stmt->execute();
     $result  = $stmt->fetchAll(PDO::FETCH_ASSOC);
     if($result){
             
         foreach($result as $row){
             $street = $row['AddressLine1'];
             $house = $row['AddressLine2'];
             $address = $row['AddressId'];
             $userid = $row['UserId'];
             $city = $row['City'];
             $zip = $row['zip'];
             $mobile = $row['Mobile'];
             $output = '<div class="card mt-3 addcard">
             <div class="card-text">
             <input type="radio" name="radio" id="address_id" required> <span class="font-weight-bold ml-2"> Address :</span>
             <span id="addressline1">'.$street.'</span>&nbsp;<span id="addressline2">'.$house.'</span>  
             <span></span> <br>
             <span class="font-weight-bold ml-4"> Phone Number :</span>
             <span  id="mobile">'.$mobile.'</span>
             
             </div>   
         </div>';

             echo ($output);
            
         }
     }
     

 }

 public function booking($array)
 {
     $service_id =  rand(100,1000);
     $sql = "INSERT INTO servicerequest (UserId , ServiceId , ServiceDate,ZipCode )
     VALUES (:userid,'$service_id' , :date,:code )";
     $stmt =  $this->conn->prepare($sql);
     $result = $stmt->execute($array);
     if($result){
         echo ($service_id);
     } else{
         echo ('No');
     }
 }


}

?>    
  /*
  
  public function Contectus()
    {
        $sql = "INSERT INTO ConetctUs (firstname, lastname, email)
        VALUES ('John', 'Doe', 'john@example.com')";

        if (mysqli_query($conn, $sql)) {
             echo "New record created successfully";
            } 
            else {
                       echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                 }

           mysqli_close($conn);
        }
    }

?>
*/