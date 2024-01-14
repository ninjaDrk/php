<?php require_once("../connection/config.php")?>

<?php     $conn = new PDO($dsn, $db_user, $db_password); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>



<body>
  <?php 


if(isset($_POST["submit"])) {

    $price_item=0;

/////////////////////////////name item    
 if(isset($_POST['name'])): 

 if(empty($_POST['name']))
 $error['name']="enter name ";
else
$name_item=$_POST['name'];

endif;

////////////////////////////////descreption item
 if(isset($_POST['descr_item'])): 

 if(empty($_POST['descr_item']))
 $error['descr_item']="enter name ";
else
$descr_item=$_POST['descr_item'];

endif;

///////////////////////////////price item
 if(isset($_POST['price_item'])): 

 if(empty($_POST['price_item']))
 $error['price_item']="enter name ";
else
$price_item=$_POST['price_item'];

endif;

/////////////////////////////////////////////////////////////////// لاضافة رقم الصنف الى الصورة start
$sql_serch="SELECT max(id_item) from item;";
$serch_id= $conn->prepare($sql_serch);
$serch_id->execute();
$resulte=$serch_id->fetchAll();
 
$id=0;
foreach($resulte as $row)
{
   $id=$row['id_item'];
}
$id+=1;
$id.=",,";  //شرظ الفصل بين الايدي واسم الصورة

//////////////////////////////////////////////////////////////////end

    /////////////////////////////////////////////////////////upload img 
    $fileType = $_FILES["file"]["type"]; // not used here

    $fileName = $id.$_FILES["file"]["name"];// تم التعديل عليه
    
    
    $file =$_FILES["file"]["tmp_name"];

    move_uploaded_file($file, __DIR__."/file img/".$fileName);
    $position = "file img/".$fileName;

    $sql_insert = "INSERT INTO item (name_item, descr_item, price_item, img_position) VALUES (:name_item, :descr_item, :price_item, :position);";
    $uploadfile = $conn->prepare($sql_insert);
    $uploadfile->bindParam(":name_item", $name_item, PDO::PARAM_STR);
    $uploadfile->bindParam(":descr_item", $descr_item, PDO::PARAM_STR);
    $uploadfile->bindParam(":price_item", $price_item, PDO::PARAM_STR);
    $uploadfile->bindParam(":position", $position, PDO::PARAM_STR);
    // $uploadfile->bindParam(":type", $fileType, PDO::PARAM_STR);// not used here
    
    if($uploadfile->execute())
        echo "enter ".$id;
    else
        echo "no enter";
}

$sql_serch="SELECT * from item;";
$serch_id= $conn->prepare($sql_serch);
$serch_id->execute();
$resulte=$serch_id->fetchAll();
 
$id=0;
foreach($resulte as $row)
{  
   echo$row['id_item']."<br>";
   echo '<img src="' . $row['img_position'] . '" ><br>';
   echo$row['price_item']."<br>";

}

  ?>



    <form method="POST" enctype="multipart/form-data">
       <input type="text" name="name_item" placeholder="name item"><br>
       <input type="text" name="descr_item" placeholder="name descr"><br>
       <input type="text" name="price_item" placeholder="price"><br>
       <input type="file" name="file" placeholder="file" accept="image/*">
           <button type="submit" name="submit">save</button>
    </form>
    
</body>
</html>