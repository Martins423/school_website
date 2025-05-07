<div class="" style="width: 100%;">


<div class="sidebar text-white p-3" style="width: 250px; height:100vh; position:fixed;">
    <h4 class="text-white">Admin Panel</h4>
    <ul class="nav flex-column mt-4">
        <li class="nav-item"><a href="admin_dashboard.php" class="nav-link text-white"> <i class="fas fa-home"></i> Dashboard</a></li>
        <li class="nav-item"><a href="manage-students.php" class="nav-link text-white"><i class="fas fa-user-graduate"></i>  Manage Students</a></li>
        <li class="nav-item"><a href="manage-students.php" class="nav-link text-white"><i class="fas fa-chalkboard-teacher"></i>  Manage Staff</a></li>
        <li class="nav-item"><a href="admin-message.php" class="nav-link text-white"><i class="fas fa-envelope"></i>  Messages</a></li>
        <li class="nav-item"><a href="admin-manage-messages.php" class="nav-link text-white"><i class="fa-solid fa-gear"></i>  Settings</a></li>
        <li class="nav-item"><a href="login.php" class="nav-link text-white"> <i class="fas fa-sign-out-alt"></i> Logout</a></li>
    </ul>
</div>

<div class="container p-4 text-center" style="width: 100%;">
    <h2>Welcome, Admin</h2>
    <p>Use the sidebar to manage students,staff and view messages.</p>
 </div>
</div>




<style>
    .sidebar {
        background: #2c3e50;
        color: #fff;
        padding: 20px;
    }

    .sidebar h4{
        text-align: center;
        margin-bottom: 30px;
    }

    .sidebar ul{
        list-style: none;
        padding: 0;
       
    }

    .sidebar ul li {
        /* text-align: center; */
        margin-bottom: 20px;
        font-size: 16px;
       
    }

    .sidebar ul li a {
        color: #fff;
        text-decoration: none;
        display: block;
        align-items: center;
    }

    .sidebar ul li a:hover {
        background: #34495e;
        padding: 10px;
        border-radius: 4px;
    }

    @media (max-width: 768px) {
    .sidebar {
        width: 100% !important;
        height: auto !important;
        position: relative !important;
        padding: 15px !important;
        text-align: center;
    }

    .sidebar ul {
        flex-direction: column;
        align-items: center;
    }

    .sidebar ul li {
        margin-bottom: 15px;
    }

    .main-content {
        margin-left: 0 !important;
        margin-top: 20px;
    }
}
   
</style>


