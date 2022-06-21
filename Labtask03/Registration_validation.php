<?php
 
 
    session_start();
 
if ( isset ( $_POST [ 'submit' ] ) ) {
 
  $name = $_POST [ 'name' ];
  $email =$_POST [ 'email' ];
   
  $userName =$_POST [ 'uname' ];
  $password =$_POST [ 'pword' ];
  $confirmPassword = $_POST [ 'conpword' ];
   
  $day    =   $_POST [ 'date'] ;
  $month  = $_POST [ 'month'];
  $year   = $_POST [ 'year' ] ;
  $dateOfBirth = $day."/".$month."/".$year;
  

 
    if ( $name == "" || $email == ""|| $userName == "" || $password == "" || $confirmPassword == "" || $day == "" || $month == "" || $year == "" ) {
  echo "Filled all the file... ";
 }
 elseif ( $password != $confirmPassword) {
  echo "Password didn't match with confirm Password ";
 }
 else{
  $employeeData = [  

                      'name'=>$name,  
                      'email'=> $email,
              
                      'userName'=>$userName, 
                      'password'=>$password, 
                      'gender'=> $gender,
                      'dateOfBarth'=> $dateOfBirth,
                      
 
            ];
             $regDataJson= json_encode( $regData );
             $jsonFile= fopen( "./regData.json", "w");
              fwrite($jsonFile , $regDataJson);
              fclose($jsonFile);
             header('location: ./registration.php');
}
  
 }
 

 
?>