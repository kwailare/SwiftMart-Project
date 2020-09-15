<?php 

    if(isset($_POST['btn-send']))
    {
        
       $UserName = $_POST['Uname'];
       $Email = $_POST['E_mail'];
       $P_num = $_POST['Phone'];
       $Msg = $_POST['Mssg'];

       if(empty($UserName) || empty($Email) || empty($P_num) || empty($Msg))
       {
           header('location:contact.php?error');
       }
       else
       {
           $to = "feedbacks@swiftmart.com.ng";
           
          
           if(mail($to,$UserName,$Email,$Msg,$P_num))
           {
               header("location:contact.php?success");
           }
       }
    }
    else
    {
        header("location:contact.php");
    }
?>