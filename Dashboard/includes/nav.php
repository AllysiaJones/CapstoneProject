<nav id="dashboard_nav">
    <a id="exit_nav" onclick="exitNav()"><i class="fa fa-times"></i></a>
    <a>
        <h1 class="company_name">Our Company</h1>
    </a>
    <ul class="nav_list">
        <span>
            <li><a href="dashboard.php"><i class="fa fa-home nav_icon"></i><br>Home</a></li>
            <li><a href="inventory.php"><i class="fa fa-clipboard-list nav_icon"></i><br>Inventory</a></li>
            <li><a href=""><i class="fa fa-chart-line nav_icon"></i><br>Sales</a></li>
            <li><a href=""><i class="fa fa-cogs nav_icon"></i><br>Settings</a></li>
        </span>
        <li><a href="" id="seller_logout"><i class="fas fa-sign-out-alt nav_icon"></i><br>Logout of
                <div id="sellers_name">Seller Name</div></a></li>
    </ul>
</nav>
<nav id="closed_nav" class="hidden">
    <ul class="nav_list">
        <span>
            <li><a id="hamburger_menu" onclick="openNav()"><i class="fa fa-bars closed_nav_icon"></i></a></li>
            <li><a href="dashboard.php"><i class="fa fa-home closed_nav_icon"></i></a></li>
            <li><a href="inventory.php"><i class="fa fa-clipboard-list closed_nav_icon"></i></li>
            <li><a href=""><i class="fa fa-chart-line closed_nav_icon"></i></a></li>
            <li><a href=""><i class="fa fa-cogs closed_nav_icon"></i></a></li>
        </span>
        <li><a href="" id="seller_logout"><i class="fas fa-sign-out-alt closed_nav_icon" id="logout_icon"></i></a></li>
    </ul>
</nav>

<script>
    function exitNav() {
        document.getElementById("dashboard_nav").classList.add("hidden");
        document.getElementById("dashboard_main").style.width = "93%";
        document.getElementById("closed_nav").classList.remove("hidden");
        sessionStorage.setItem("navStatus", "closed");
    }
    function openNav() {
        document.getElementById("dashboard_nav").classList.remove("hidden");
        document.getElementById("dashboard_main").style.width = "85%";
        document.getElementById("closed_nav").classList.add("hidden");
        sessionStorage.setItem("navStatus", "open");
    }

    // window.onload = function(){
    //     let navStatus = sessionStorage.getItem("navStatus");
    //     if(navStatus == "closed"){
    //         exitNav();
    //     }
    //     else if(navStatus == "open"){
    //         openNav();
    //     }
    // }
</script>