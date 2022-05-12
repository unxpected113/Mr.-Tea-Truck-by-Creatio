<?php
include('front-partials/sessions.php');
include('front-partials/log.php');
?>

<html>
    
    <head>
        <title>Login - Mr. Tea Truck</title>
        <link rel="stylesheet" href="css/admin.css">
    </head>
      
    <div class="login">
        <h1 class="text-center">User Profile</h1>
        <form action="" method="POST" class="text-center">

        <br><br>
       <table>
           <tr>
               <td>Full Name:</td>
               <td><?php echo $row['full_name'];?></td>
           </tr>
           <tr>
               <td>Username:</td>
               <td><?php echo $row['user'];?></td>
           </tr>
           <tr>
               <td>Contact:</td>
               <td><?php echo $row['contact'];?></td>
           </tr>
       </table>


        
        <br><br><br>
        <input type="submit" name="Edit Account" value="Login" class="btn-add">
        <br><br>
        </form>
    </div>