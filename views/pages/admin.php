<?php
    use App\Services\Page;

    if($_SESSION["user"] && $_SESSION["user"]["group"]*1 !== 2){
        \App\Services\Router::redirect('/profile');
    }
?>

<!doctype html>
<html lang="en">

<?php
    $page_title = 'Admin';
    require_once 'views/components/head.php';
?>

<body>
    <?php
        Page::part('navbar');
    ?>

    <div class="container mt-3">
        <h4>Add Post Form</h4>
        <form action="/auth/article" method="post">
            <div class="mb-3">
                <label for="article_header" class="form-label">Article Name</label>
                <input type="text" name="article_header" class="form-control" id="article_header">
            </div>
            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" id = "category" name="category">
                <option selected>Open this select menu</option>
                <option value="Volleyball">Volleyball</option>
                <option value="Football">Football</option>
                <option value="Basketball">Basketball</option>
            </select>
            <div class="mb-3">
                <label for="article_content" class="form-label">Article Content</label>
                <textarea type="text" name="article_content" class="form-control" id="article_content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


</body>

</html>