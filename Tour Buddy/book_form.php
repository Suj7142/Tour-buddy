<?php

   $connection = mysqli_connect('localhost','root','','database');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $s_location = $_POST['s_location'];
      $Medium = $_POST['Medium'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      $request = " insert into book_form(name, email, phone, address, location, s_location, Medium, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$s_location','$Medium','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);
      session_start();
      $_SESSION['success_message'] = "room booked successfully.";
      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>