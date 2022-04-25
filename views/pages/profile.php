<?php
    use App\Services\Page;
    session_start();
    if(!$_SESSION["user"]){
        \App\Services\Router::redirect('/login');
    } 
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
    <div class="container mt-3">
        <h4>This is profile page!</h4>
        <table class="table table-bordered">
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
                    <th scope="row"><?php $_SESSION["user"]["id"] ?></th>
                    <td><?php $_SESSION["user"]["email"] ?></td>
                    <td><?php $_SESSION["user"]["fullname"] ?></td>
                    <td><img src="<?php $_SESSION["user"][""] ?>" height = "100 " alt=""></td>
                </tr>
            </tbody>
        </table>
    </div>


</body>

</html>