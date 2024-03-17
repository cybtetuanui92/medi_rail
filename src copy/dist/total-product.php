<?php
    require_once 'header.php';
    require_once 'config/data.php';
?>
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Produit / Service</h1>
                        <p class="lead fw-normal text-muted mb-0">MEDI'RAIL</p>
                    </div>
                    <div class="row gx-5">
                    <div class="row gx-5">
                        <!-- card 1 à générer automatiquement dynamiser en PHP-->
                        <?php

                            foreach ($articles as $article) {
                                $id = $article['id'];
                                $url = $article['image'];
                                $name = $article['name'];
                                $info = $article['info'];
                                $price = $article['price'];

                                echo "<div class='col-lg-4 mb-5'>
                                        <div class='card h-100 shadow border-0'>
                                            <img class='card-img-top' src='{$url}' alt='produit medirail' />
                                            <div class='card-body p-4'>
                                                <div class='badge bg-primary bg-gradient rounded-pill mb-2'>Nouveauté</div>
                                                <h5 class='card-title mb-3'>{$name}</h5></a>
                                                <p class='card-text mb-0'>{$info}</p>
                                                <div class='m-2 text-success'>
                                                    <div class='fw-bold'>Prix : {$price} euros</div>
                                                </div>
                                            </div>
                                            <div class='d-grid m-1'><a class='btn btn-outline-primary m-5' href='detail.php?id={$id}'>Détails...</a></div>
                                        </div>
                                    </div>";
                            }

                        ?>
                    </div>
                </div>
            </section>
        </main>
<?php
    require_once 'footer.php';
?>
