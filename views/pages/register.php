<?php
    use App\Services\Page;
?>

<!doctype html>
<html lang="en">

<?php
    $page_title = "Register";
    Page::part('head');
?>
<body>
    <?php
        Page::part('navbar');
    ?>
    <div class="container mt-4">
        <h2>Sign Up</h2>
        <form method="post" action="/auth/register" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username">
            </div>
            <div class="mb-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" id="fullname">
            </div>
            <div class="mb-3">
                <label for="Avatar" class="form-label">Avatar</label>
                <input type="file" class="form-control" id="Avatar">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
            </div>
            <div class="mb-3">
                <label for="pass_confirm" class="form-label">Password Confirmation</label>
                <input type="password" class="form-control" id="pass_confirm">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>