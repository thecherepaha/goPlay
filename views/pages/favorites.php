<?php
    
    use App\Services\Page;

    if($_SESSION["user"]){
        $user_id = $_SESSION["user"]["favorites"];
        $articles = \R::find( 'articles', ' id = ? ', [$user_id]);
    }else{
        \App\Services\Router::redirect('/login');
    }

    
?>

<!doctype html>
<html lang="en">

<?php
    $page_title = 'Favorites';
    require_once 'views/components/head.php';
?>

<body>
    <?php
        Page::part('navbar');
    ?>
    <div class="container mt-3">
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <?php
                foreach($articles as $article){
                    ?>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-heading<?= $article->id ?>">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapse<?= $article->id ?>" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapse<?= $article->id ?>"
                        style="display:inline-block !important;">
                        <div style="float:left;"><strong><?= $article->article_header ?></strong></div>
                        <div style="float:right;">Author: <code><?= $article->article_author ?></code></div>
                    </button>
                </h2>
                <div id="panelsStayOpen-collapse<?= $article->id ?>" class="accordion-collapse collapse"
                    aria-labelledby="panelsStayOpen-heading<?= $article->id ?>">
                    <div class="accordion-body">
                        <em><?= $article->article_content ?></em>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
        </div>

    </div>


</body>

</html>