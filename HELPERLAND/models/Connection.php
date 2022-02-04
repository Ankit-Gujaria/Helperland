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
        return flase;
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




}

    
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