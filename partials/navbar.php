<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div style="margin: auto;">
        <a href="../main/index.php"><img class="navbar-brand" src="../images/logo.PNG" alt='Comber Drug Store' height='60' /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php session_start(); ?>
            <?php if (isset($_SESSION) && (isset($_SESSION["id"]) || isset($_SESSION['email']))) : ?>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="../main/index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../main/product.php?products=products">Products</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="../main/product.php?products=arriving">Arriving Soon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../main/Aboutus.php">About us</a>
                    </li>
                </ul>
                <form action="../main/search.php" method="GET" class="form-inline my-2 my-lg-0">
                    <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search By Product" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit">Search</button>
                    </form>
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../images/<?php echo $_SESSION["image"] ?>" alt="profile picture" style="width: 40px; height: 40px; border-radius: 100%;">
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown1">
                            <a class="dropdown-item" href="../main/profile.php">My Profile</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="../auth/logout.php">Logout</a>
                        </div>
                    </div>
                
            <?php else : ?>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../auth/register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../auth/login.php">Login</a>
                    </li>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</nav>