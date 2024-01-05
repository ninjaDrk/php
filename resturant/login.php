<?php require_once("connection/config.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Glassmorphism login Form Tutorial in html css</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,d
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    position: relative;
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
span{
    position: absolute;
    top: 10px;
    right: 20px;
    padding: 5px;
}

form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
  background-color: black;
}
.social i{
  margin-right: 4px;
}

.sign_up{
    text-decoration: none;
}

.error{
    color:red;
    margin-left:85px;
}

<?php 

  if(isset($_POST['submit'])):

   if(isset($_POST['username'])):

      if(empty($_POST['username']))
        $error['user']="enter user name ";
      else
    $user_name=$_POST['username'];
   
   endif;

   if(isset($_POST['password'])):

     if(empty($_POST['password']))
     $error['pass']="enter password";
    else
     $user_password=$_POST['password']; 

   endif;

$sql_test = "SELECT email_user FROM user WHERE upper(email_user) = upper(:user_name);";
$conn = new PDO($dsn, $db_user, $db_password);
$stet = $conn->prepare($sql_test);
$stet->bindParam(':user_name', $user_name, PDO::PARAM_STR); // تأكد من تحديد نوع المتغير
$stet->execute();
$resulte = $stet->fetchAll();

$test = 1; // تعيين قيمة افتراضية

foreach ($resulte as $row) {
    if (strcasecmp($row['email_user'], $user_name) == 0) {
        $test = 0;
        break; // إذا تم العثور على تطابق، قم بالخروج من الحلقة
    }
}


  ///////////////////////////////////////////////////////ادخال البيانات للقاعدة 
 if($test==0)
 $massig="You already exist";
   
 else
$massig="Enter"; 

endif;
?>



    </style>
</head>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form method="POST">
       <span> <i class="fab fa-google"></i></span>

        <h3>Login Here</h3>

        <p class="error" ><?php if(isset($massig))echo $massig; ?></p>

        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Email" id="username" required>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" id="password" required>
 
        <button name="submit">Log In</button>
        <div class="social">
          <div class="go"><i class="fab fa-google"></i>Google</div>
       <a class="sign_up" href="signup.php">   <div class="fb"> Sign Up</div> </a>
        </div>
    </form>
</body>
</html>
