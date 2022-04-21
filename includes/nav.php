     <!-- Sidebar -->
     <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    
    <div class="sidebar-brand-text mx-3">
        <?php
        session_start();
        echo $_SESSION['User'];
        ?>
    </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="index.php">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Interface
</div>

</li>

<!-- Nav Item - Utilities Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="products.php">
        <i class="fab fa-product-hunt"></i>
        <span>Products</span>
    </a>

</li>

<!-- Nav Item - Products Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="records.php">
        <i class="fab fa-product-hunt"></i>
        <span>Price Records</span>
    </a>

</li>

<!-- Nav Item - Charts -->
<li class="nav-item">
    <a class="nav-link" href="indexchart.php">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
</li>
<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>


</ul>
<!-- End of Sidebar -->