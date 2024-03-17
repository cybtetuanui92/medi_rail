 <?php
    require_once '../dist/components/header.php';
    require_once '../dist/config/data.php';

    foreach ($articles as $article) {
        $id = $article['id'];
        $name = $article['name'];
        $image = $article['image'];
        $info = $article['info'];
        $price = $article['price'];
        $url_id =  $_GET['id'];



        if ($url_id == $id) {
            echo    "

                <div class='mb-4 mb-xl-0 d-flex justify-content-center'>
                    <div class='fs-3 fw-bold text-dark '>Mettre à jour un produit</div>
                </div>
                <!-- Formulaire Devis et Contact (submit du formulaire vers form.php = fichier de traitement form)-->
                <aside class='bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5' id='formulaire'>
                    <form action='update.php' method='post' enctype='multipart/form-data'>
                        <div class='d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start'>
                            <div class='mb-4 mb-xl-0'>
                                <div class='fs-3 fw-bold text-white'>OPTION ADMIN : </div>
                                <div class='text-white-50'>Pour modifier un produit ou service.</div>
                            </div>
                            <div class='ms-xl-4'>
                                <div class='input-group mb-2'>
                                    <input type='number' name='id' value='{$url_id}' hidden>
               
                                </div>
                                <div class='input-group mb-2'>
                                    <input class='form-control' type='text' name='image' value='{$image}' aria-label='Url_image'/>
                                </div>
                                <div class='input-group mb-2'>
                                    <input class='form-control' type='text' name='name' value='{$name}' aria-label='Article'/>
                                </div>
                                <div class='input-group mb-2'>
                                    <input class='form-control' type='text' name='price' value='{$price}' aria-label='Price' />
                                </div>
                                <div class='input-group mb-2'>
                                    <textarea class='form-control' name='info' rows='3' aria-label='Description'>{$info}</textarea>
                                </div>
                                <div class='input-group mb-2'>
                                    <button class='btn btn-outline-light' type='submit'>Valider les modifications</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </aside>

            ";
        }
    }

    
?>