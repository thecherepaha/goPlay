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
    <h2>This is profile page!</h2>

</body>

</html>