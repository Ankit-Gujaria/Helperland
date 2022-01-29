<?php 
   
   class Controller{

      function __construct()
      {
          include('model/Connection.php');
          $this->model=new Helperland();
      }

      public fuction HomePage()
      {
          include('view/index.php');

      }

      public function ContactUs()
      {
          include('view/ContectUs.php');
      }

   }

?>