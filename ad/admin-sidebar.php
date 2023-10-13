<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo ($page === 'dash.php' || $page === 'detail-pre.php' || $page === 'detail-ent.php') ? '' : 'collapsed'; ?>" href="dash.php">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link <?php echo ($page === 'reglage.php') ? '' : 'collapsed'; ?>" href="reglage.php">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link collapsed" href="../index.php">
                <i class="bi bi-person"></i>
                <span>Revenir sur le site</span>
            </a>
        </li>
        
    </ul>

</aside>