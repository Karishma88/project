<?php
error_reporting(0);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Contact Us</title>
    
    <h1>Contact Us</h1>
    <style type="text/css">
    
      body{
        background-color: #f1f1f1;
  }
    .form-control {
    width: 100%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    color: #555;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.btn-primary {
    padding: 6px 12px;
    font-size: 14px;
    font-weight: 400;
    cursor: pointer;
    border: 1px solid transparent;
    border-radius: 4px; 
    background-color: #337ab7;
    color: #fff;
}
textarea.form-control {
    height: auto;
}
.container 
{ 
margin-left: 30%;
width: 400px ;
margin-top: 6%;
background-color: #fff;
padding: 30px;
padding-right: 60px;
box-shadow: 10px 5px 5px grey;
 }
label   {
  font-size: 18px;
}
.success 
{ 
  margin: 5px auto;
  border-radius: 5px;
  border: 3px solid #fff;
  background: #33CC00;
  color: #fff;
font-size: 20px;
  padding: 10px;
  box-shadow: 10px 5px 5px grey;
}
    
    
	</style>
  </head>
  <body>
    <div class="container">

    <?php
    if(isset($_POST['submit_form']))
    {
      $name=$_POST['name'];
      $email=$_POST['email'];
      $msg=$_POST['msg'];
      $phone=$_POST['phone'];
      
      
  
      


            
    
    echo '<div class="success"><center><span style="font-size:100px;">&#9989;</span></center> <br> Thank you <strong>'.$name.',</strong> Your message has been sent. We will reply soon as possible. </div> '; 
	      
	} else {
		echo "The server failed to send the message. Please try again later or Make sure , you are using live server for email.";
} 
    


  

     ?>
     <div class="col-4 text-center">
            <a class="blog-header-logo text-dark" href="#">Contact Us</a>
          </div>
    <form action="" method="POST">
      <label>Name:-</label>
      <input type="text" name="name" class="form-control" required>

      <label>Email:</label>
       <input type="email" name="email" class="form-control" required>

       <label>Phone Number:</label>
       <input type="number" name="phone" class="form-control" required>

       <label>Message:</label>
       <textarea name="msg"  cols="10" rows="5" class="form-control" required></textarea>
       <input type="submit" name="submit_form" value="Send" class="btn-primary">

    </form>
</div>
  </body>
  
</html>