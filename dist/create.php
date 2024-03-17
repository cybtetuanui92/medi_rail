<?php
    require_once '../dist/components/header.php';
?>
<div class="mb-4 mb-xl-0 d-flex justify-content-center">
    <div class="fs-3 fw-bold text-dark ">AJOUTER PRODUIT</div>
</div>
<!-- Formulaire Devis et Contact (submit du formulaire vers form.php = fichier de traitement form)-->
<aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5" id='formulaire'>
    <form action="traitCreate.php" method="post" enctype="multipart/form-data">
        <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
            <div class="mb-4 mb-xl-0">
                <div class="fs-3 fw-bold text-white">OPTION ADMIN : </div>
                <div class="text-white-50">Pour insérer un nouveau produit ou service.</div>
            </div>
            <div class="ms-xl-4">
                <div class="input-group mb-2">
                    <input class="form-control" type="text" name="image" placeholder="Url image" aria-label="Url image" />
                </div>
                <div class="input-group mb-2">
                    <input class="form-control" type="text" name="name" placeholder="Article" aria-label="Article" />
                </div>
                <div class="input-group mb-2">
                    <input class="form-control" type="text" name="price" placeholder="Price" aria-label="Price" />
                </div>
                <div class="input-group mb-2">
                    <textarea class="form-control" name="info" rows="3" placeholder="Description" aria-label="Description"></textarea>
                </div>
                <div class="input-group mb-2">
                    <button class="btn btn-outline-light" type="submit">Créer un produit/service</button>
                </div>
            </div>
        </div>
    </form>
</aside>