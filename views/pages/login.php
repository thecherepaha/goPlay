<?php
    use App\Services\Page;
?>

<!doctype html>
<html lang="en">

<?php
    Page::part('head');
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
            <!-- <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div> -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>