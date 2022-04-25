<?php
    use App\Services\Page;

    if($_SESSION["user"] && $_SESSION["user"]["group"]*1 !== 2){
        \App\Services\Router::redirect('/profile');
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
    <h2>This is admin page!</h2>

</body>

</html>