<!DOCTYPE html>
<html>

<body>
<?php 

       $fname = $_POST['name'];
       $email = $_POST['email'];
       $lname = $_POST['lname'];
       $subject =$_POST['subject'];;
       $message = $_POST['message'];

            $to = "tiwariprince795@gmail.com";
                $too="sanchitgupta0101@gmail.com";
           if(mail($to,$subject,"Frist Name: ".$fname."\nlname: ".$lname."\nMessage: ".$message,$email))
           {mail($too,$subject,"Frist Name: ".$fname."\nlname: ".$lname."\nMessage: ".$message,$email);
                echo '<script>alert("Your Messege has been sent")</script>'; 
           }
           else
           {
              echo '<script>alert("Your Messege has some Error\n *Please Try Again*")</script>'; 
           }

?>
</body>
<head><meta http-equiv = "refresh" content = "0; url = contact.html" /></head>
</html>
