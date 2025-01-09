<ul class="mt-4">
    <li class="nav mb-2 ">
        <a href="/dashboard"
            class="nav-link cus_sidebar_nav_link <?php echo (isset($active_sidebar) && $active_sidebar == 'dashboard') ? 'cus_sidebar_active' : '' ?> ">
            Dashboard </a>
    </li>
    <li class="nav mb-2 ">
        <a href="/settings"
            class="nav-link cus_sidebar_nav_link <?php echo (isset($active_sidebar) && $active_sidebar == 'settings') ? 'cus_sidebar_active' : '' ?> ">
            Settings </a>
    </li>
    <li class="nav mb-2 ">
        <a href="/logout"
            class="nav-link cus_sidebar_nav_link cus_sidebar_logout_nav_link ">
            Logout </a>
    </li>


    <!-- <li class="nav mb-2 ">
        <a href="/logout"
            class="nav-link cus_sidebar_nav_link <?php echo (isset($active_sidebar) && $active_sidebar == 'logout') ? 'cus_sidebar_active' : '' ?> ">
            Logout </a>
    </li> -->
</ul>

<hr>

<div class="admin_user_login_info_section">
    <div class="container">
        <div class="admin_user_login_info">
            <div class="admin_user_name">
                <?php echo (isset($_SESSION['admin_user_name']) ? $_SESSION['admin_user_name'] : '' ) ?>
               
            </div>
        </div>
    </div>
</div>