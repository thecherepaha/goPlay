<?php
    use App\Services\Page;

    if($_SESSION["user"]){
        \App\Services\Router::redirect('/profile');
    }
?>

<!doctype html>
<html lang="en">

<?php
    $page_title = "Login";
    require_once 'views/components/head.php';
?>
<body>
    <?php
        Page::part('navbar');
    ?>
    <div class="container mt-4">
        <h2>Sign In</h2>
        <form action="/auth/login" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>