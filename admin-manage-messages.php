 
 <?php 
 include('includes/dbcon.php');
 ?>

 
<?php
 include "includes/header.php";
 include "includes/admin_nav.php";
 
?>

    <?php 
     $query = "SELECT m.*, s.full_name AS full_name FROM messages m LEFT JOIN registration s ON m.student_id = s.id ORDER BY m.date_sent DESC";
     $result = mysqli_query($con, $query);
     ?>
     
<div class="container-fluid">
    <div class="row">
     <div class="col-md-3 col-lg-2 text-center bg-light min-vh-50 p-0" id="sidebar-wrapper">
         <?php include "includes/sidebar.php"; ?>
     </div>

<div class="col-md-9 col-lg-10 " id="page-content-wrapper">  
    <div class="container py-4">
     <h3 class="text-center mb-4">All Sent Messages</h3>  
     <!-- <div class="d-flex justify-content-center text-center" style="width: 70%; margin:0 auto; margin-left:300px;"> -->
        <div class="table-responsive" style="width: 100%;">
         <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Id</th>
                    <th>Recipient</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date Sent</th>
                    <th>Action</th>
                </tr>
            </thead>
         

         <tbody>
            <?php 
                $count = 1;
                while($row = mysqli_fetch_assoc($result)) {
                  $recipient = $row['student_id'] ? $row['full_name'] : 'All student';
                  echo "<tr>
                         <td>{$count}</td>
                         <td>{$recipient}</td>
                         <td>{$row['subject']}</td>
                         <td>{$row['message']}</td>
                         <td>{$row['date_sent']}</td>
                        <td>                               
                        <a href='admin_delete_message.php?id={$row['id']}'return onclick =\"return confirm('Are you sure you want to delete this message?');\ class = 'btn btn-danger btn-sm'>Delete</a>
                    </td>
                  </tr>" ;
                  $count++;
                }
            ?>
         </tbody>
     </table>
     </div>
     </div>
     </div>


</div>  
</div> 

<style>
    .table td, .table th {
        vertical-align: middle;
        width: 100%;
    }
    @media screen and (max-width:756px) {
         .table-responsive{
            width: 100%;
         }

         .container{
            width: 100%;
         }
    }
</style>