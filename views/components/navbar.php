<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">
            <img src="../assets/images/logo4.svg" height="50" alt="">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="/" class="nav-item nav-link active">Home</a>

            </div>

            <div class="navbar-nav ms-auto">
                <?php
                    if(!$_SESSION["user"]){
                ?>
                <a href="/login" class="nav-item nav-link active">Login</a>
                <a href="/register" class="nav-item nav-link active">Register</a>
                <?php
                    }elseif($_SESSION["user"]["group"] *1!==2){
                ?>
                <a href="/admin" class="nav-item nav-link active">Admin</a>
                <a href="/profile" class="nav-item nav-link active">Profile</a>
                <form action="/auth/logout" method="post">
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
                <?php
                    }else{
                ?>
                <a href="/profile" class="nav-item nav-link active">Profile</a>
                <form action="/auth/logout" method="post">
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
                <?php
                    }
                ?>

            </div>
        </div>
    </div>
</nav>