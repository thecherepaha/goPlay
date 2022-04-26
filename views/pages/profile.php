<?php
    use App\Services\Page;

    if(!$_SESSION["user"]){
        \App\Services\Router::redirect('/login');
    } 
?>

<!doctype html>
<html lang="en">

<?php
    $page_title = "Profile";
    require_once 'views/components/head.php';
?>

<body>
    <?php
        Page::part('navbar');
    ?>
    <div class="container mt-3">
        <h4>Welcome, <?= $_SESSION["user"]["fullname"] ?>!</h4>
        <table class="table table-bordered table-responsive">
            <thead>
                <tr>
                    <th scope="col">user_id</th>
                    <th scope="col">email</th>
                    <th scope="col">fullname</th>
                    <th scope="col">avatar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row"><?= $_SESSION["user"]["id"] ?></th>
                    <td><?= $_SESSION["user"]["email"] ?></td>
                    <td><?= $_SESSION["user"]["fullname"] ?></td>
                    <td><img src="<?= $_SESSION["user"]["avatar"] ?>" height = "80" class="rounded-circle" alt=""></td>
                </tr>
            </tbody>
        </table>
    </div>


</body>

</html>