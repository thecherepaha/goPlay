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
                <a href="/login" class="nav-item nav-link active"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                <a href="/register" class="nav-item nav-link active"><span class="glyphicon glyphicon-user"></span> Register</a>
                <?php
                    }else{
                ?>
                <a href="/profile" class="nav-item nav-link active"><i class="bi bi-person-circle"></i> Profile</a>
                <form action="/auth/logout" method="post">
                    <button type="submit" class="btn btn-danger"><i class="bi bi-backspace"></i> Logout</button>
                </form>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
</nav>