<?php
    require_once '../dist/components/header.php';
    require_once 'config/data.php';
?>

<!-- Section produit-->
<section class="bg-light py-5">
    <div class="container px-5 my-5">
        <div class="text-center mb-5">
            <h1 class="fw-bolder">DETAIL - CARACTERISTIQUE</h1>
            <p class="lead fw-normal text-muted mb-0">OPTION ADMIN : Cliquez sur AJOUTER pour insérer un nouveau
                produit/service</p>
            <div class="d-grid m-1"><a class="btn btn-outline-primary" href="create.php">Ajouter un produit/service</a>
            </div>
        </div>
        <div class="row gx-5 justify-content-center">
            <!-- SECTION card des services et produits-->
            <div class="col-lg-6 col-xl-4">
                <?php


                // url ID

                foreach ($articles as $article) {
                    $id = $article['id'];
                    $url_id =  $_GET['id'];



                    if ($url_id == $id) {
                        echo    "
                            <div class='card mb-5 mb-xl-0'>
                                <div class='card-body p-5'>
                                    <div class='mb-3'>
                                        <div class='position-relative mb-5'>
                                            <img class='img-fluid rounded-3 mb-3' src='{$article['image']}' alt='image alternative {$article['name']}' />
                                            <a class='h3 fw-bolder text-decoration-none link-dark stretched-link' href='#!'>{$article['name']}</a>
                                        </div>
                                    </div>
                                    <ul class='list-unstyled mb-4'>
                                        <li class='mb-2 text-muted'>
                                            {$article['info']}
                                        </li>
                                        <li class='text-success'>
                                            Prix : {$article['price']} euros
                                        </li>
                                    </ul>
                                    <div class='d-grid m-1'><a class='btn btn-outline-primary' href=formUpdate.php?id={$article["id"]}>Modifier</a></div>
                                    <div class='d-grid m-1'><a class='btn btn-outline-primary' href=delete.php?id={$article["id"]}>Supprimer</a></div>
                                </div>
                            </div>";
                    }
                }
                ?>
            </div>
        </div>
    </div>
</section>
</main>

<?php
    require_once '../dist/components/footer.php';
?>


<!-- $id = $article['id'];
$url = $article['image']; -->
<!-- $name = $article['name'];
$info = $article['info'];
$price = $article['price']; -->