<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link <?php if ($URI[0] !== 'Overview') echo 'collapsed' ?>" href="index.php">
            <i class="bi bi-grid"></i>
            <span>Statistiques </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link <?php if ($URI[0] !== 'Team') echo 'collapsed' ?>" href="<?=asset('Team')?>">
            <i class="bi bi-grid"></i>
            <span>Team Management</span>
        </a>
    </li>   
    <li class="nav-item">
        <a class="nav-link <?php if ($URI[0] !== 'Match') echo 'collapsed' ?>" href="Match">
            <i class="bi bi-grid"></i>
            <span>Match & Champing</span>
        </a>
    </li>
    <li class="nav-item ">
        <a class="nav-link <?php if ($URI[0] !== 'User') echo 'collapsed' ?>" href="UserManager">
            <i class="bi bi-grid"></i>
            <span>Users management</span>
        </a>
    </li>
</ul>

</aside>