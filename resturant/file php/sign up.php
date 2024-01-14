 <?php session_start(); ?>

<?php 


//////////////////////////////////////// لاستقبال البيانات  
if(isset($_POST['submit'])):

   if(isset($_POST['name'])):

      if(empty($_POST['name']))
        $error['user']="enter user name ";
      else
    $user_name=$_POST['name'];
   
   endif;

   if(isset($_POST['email'])):

      if(empty($_POST['email']))
        $error['email']="enter email ";
      else
    $user_email=$_POST['email'];
   
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

   $passwd=0;
   
              if(strlen($user_password) >= 8)    //شرط كلمة السر
                $passwd=1;
                
              else
                $passwd=0;

///////////////////////////////////////////////////////////////////////////////////////////للتأكد من البريد هل هو موجود ام لا

  if($email==1){           //للتأكد من البريد
    if($passwd==1){       // للتأكد من طول كلمة السر

$sql_test = "SELECT email_user FROM user WHERE upper(email_user) = upper(:user_email);";
$conn = new PDO($dsn, $db_user, $db_password);
$stet = $conn->prepare($sql_test);
$stet->bindParam(':user_email', $user_email, PDO::PARAM_STR); ///////////////// تأكد من تحديد نوع المتغير
$stet->execute();
$resulte = $stet->fetchAll();

$test = 1; ///////////////////////////////////////// تعيين قيمة افتراضية

foreach ($resulte as $row) {
    if (strcasecmp($row['email_user'], $user_email) == 0) {
        $test = 0;
        break; /////////////////////////////////////// إذا تم العثور على تطابق، قم بالخروج من الحلقة
    }
}


  /////////////////////////////////////////////////////// ادخال البيانات للقاعدة 

 if($test==1){
  
  
  $sql_insert="INSERT INTO user(name_user,email_user,pass_user) value(:user_name,:user_email,:user_password)";

   $conn= new PDO($dsn,$db_user,$db_password);
   $stet=$conn->prepare($sql_insert);
   $stet->bindparam(':user_name', $user_name);
   $stet->bindparam(':user_email', $user_email);
   $stet->bindparam(':user_password', $user_password);
   $stet->execute();


   ///////////////////////////////////////////////////////////من اجل ارساله هنا للتأكد من رقم الايدي
    $sql_serch="SELECT id_user,email_user from user ";
    $serch_id= $conn->prepare($sql_serch);
    $serch_id->execute();
    $resulte=$serch_id->fetchAll();
 $id_user=0;
 foreach($resulte as $rows){
      if(strcasecmp($rows['email_user'], $user_email) == 0){
      $id_user=$rows['id_user'];

      //////////////////////////////////////////////////////////////////////
      //////////////////////////////////////////////////////////////////////
      /////////////////////////////////////////////////////////////////////

      $massig="Enter";///////////////تم انشاء الحساب بنجاح 
      $id_user_enter = $id_user;//متغير للايدي
      $enter=1;//متغير للدخول
      
      header("location: index_2.php?id=$id_user_enter");
      
      // include_once('index_2.php'); 
   
    }
  

      
       //////////////////////////////////////////////////////////////////////
      //////////////////////////////////////////////////////////////////////
      /////////////////////////////////////////////////////////////////////

    ////////////////////////////////////////////////////////// هنا تم التأكد من الايدي و تم التأكد من انشاء حساب
  




}
 }

else
$massig="This Email address is already registered ";  ///////// رسالة الخطأ

}
else
$massig2="password most by bigger or equal 8"; //رسالة خطأ لطول كلمةالسر

  }
  else 
  $massig3="This email is incorrect"; /////////////////////////رسالة الخطأ عند عدم كتابة البيريد بشكل صحيح من غير @
  
 endif;
?>