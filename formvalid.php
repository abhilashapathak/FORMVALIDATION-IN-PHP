<?php
if($_POST){
    //not Empty
    //atleast 6 characters long
     $errors=array();
     //start validation
    if(empty($_POST['firstname'])){
      $errors['firstname1']="Your firstname cannot be empty";
    }
    if(strlen($_POST['firstname'])<2){
      $errors['firstname2']="Your firstname must be atleast 2 characters long";
    }
    if(empty($_POST['lastname'])){
      $errors['lasttname1']="Your lastname cannot be empty";
    }
    if(strlen($_POST['lastname'])<2){
      $errors['lastname2']="Your lastname must be atleast 2 characters long";
    }
    if(empty($_POST['email'])){
      $errors['email1']="Your email cannot be empty";
    }
    if(strlen($_POST['email'])<6){
      $errors['email2']="Your email must be atleast 6 characters long";
    }
    if(empty($_POST['password'])){
      $errors['password1']="Your password cannot be empty";
    }
    if(strlen($_POST['password'])<8){
      $errors['password2']="Your password must be atleast 8 characters long";
    }

     //check errors
     if(count($errors)==0){
       //redirect to succes page
       header("Location:succes.php");
       exit();
     }
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<title></title>
</head>
<body>
<form method="post" target="">
<p>
<label for="firstname">First Name</label>
<input type="text" name="firstname" id="firstname" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname'] ?>" />
</p>
<p><?php if(isset($errors['firstname1'])) echo $errors['firstname1'];?></p>
<p><?php if(isset($errors['firstname2'])) echo $errors['firstname2'];?></p>
<p>
<label for="lastname">Last Name</label>
<input type="text" name="lastname" id="lastname"value="<?php if(isset($_POST['lasttname'])) echo $_POST['lasttname'];?>"/>
</p>
<p><?php if(isset($errors['lastname1'])) echo $errors['lastname1'];?></p>
<p><?php if(isset($errors['lastname2'])) echo $errors['lastname2'];?></p>
<p>
<label for="email">Email</label>
<input type="text" name="email" id="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>"/>
</p>
<p><?php if(isset($errors['email1'])) echo $errors['email1'];?></p>
<p><?php if(isset($errors['email2'])) echo $errors['email2'];?></p>
<p>
<label for="password">Password</label>
<input type="password" name="password" id="password"value="<?php if(isset($_POST['password'])) echo $_POST['password'];?>"/>
</p>
<p><?php if(isset($errors['password1'])) echo $errors['password1'];?></p>
<p><?php if(isset($errors['password2'])) echo $errors['password2'];?></p>
<input type="submit" value="submit"/>

</form>
</body>
</html>
