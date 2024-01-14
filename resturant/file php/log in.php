<?php 
    session_start();// جلسة 


  if(isset($_POST['submit'])):

   if(isset($_POST['user_email'])):

      if(empty($_POST['user_email']))
        $error['user_email']="enter user name ";
      else
    $user_email=$_POST['user_email'];
   
   endif;

   if(isset($_POST['password'])):

     if(empty($_POST['password']))
     $error['pass']="enter password";
    else
     $user_password=$_POST['password']; 

   endif;
   ///////////////////////////////////////////////اخال البريد للتاكد من صحته

   $test_user_email=str_split($user_email);
   $email=1;    

   foreach( $test_user_email as $user_email_arry)
   {
    if (strpos($user_email_arry, '@') !== false) {
        $email=1;
      break; }

      else
      $email=0;
  
 }
    
////////////////////////////////////////اذا تنفذ شرط الايميل يسمح له بالدخول


  if($email==1){
$sql_test = "SELECT id_user, email_user, pass_user,role_id FROM user WHERE upper(email_user) = upper(:user_email);";
$conn = new PDO($dsn, $db_user, $db_password);
$stet = $conn->prepare($sql_test);
$stet->bindParam(':user_email',$user_email, PDO::PARAM_STR); // تأكد من تحديد نوع المتغير
$stet->execute();
$resulte = $stet->fetchAll();
$_SESSION['user']=$resulte;

$test = 0; // تعيين قيمة افتراضية

foreach ($resulte as $row) {
    if (strcasecmp($row['email_user'], $user_email) == 0) {
        if (strcasecmp($row['pass_user'], $user_password) == 0){ 
          // $_SESSION['user']=$stet->fetchAll();
          $_SESSION['id_user']=$row['id_user'];
         $_SESSION['email']=$row['email_user'];
         $_SESSION['pass']=$row['pass_user'];
         $_SESSION['role_id']=$row[''];

         $role_typy=$row['role_id'];
         $test = 1;
         $id_user=$row['id_user'];

          break; // إذا تم العثور على تطابق، قم بالخروج من الحلقة
    }
  }

}

    //////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////

        if($test==1){
      $massig=" welcome back $id_user";  ////شرط تسجيل الدخول بنجاح
      $id_user_enter=$id_user;//متغير للايدي
      $enter=1;//متغير للدخول
        if($role_typy==1)
        {
          header("location: admin/index.php?id=$id_user_enter");
        }

        else
       header("location: index_2.php?id=$id_user_enter");
        // require_once('index_2.php');
  
      ?>


     <?php

    }

    //////////////////////////////////////////////////////////////////////
    //////////////////////////////////////////////////////////////////////
    /////////////////////////////////////////////////////////////////////


   
 else
$massig="That was an invalid email or password. Try again!"; 
}
endif;
 
?>