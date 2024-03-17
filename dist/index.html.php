            <?php
                require_once '../dist/components/header.php';
            ?>
            <!-- Header-->
            <header class="header-bg-image py-5">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="display-5 fw-bolder text-dark-50 mb-2">MEDI'RAIL est au service des uns et des autres : 
                                </h1>
                                <p class="lead fw-normal text-white-50 mb-4">
                                    Transport, Rapatriement en France et Soin médical Express.
                                </p>
                                <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#health">Nos services pour vous soigner !</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="../src/assets/ukraineTrainHelp.jpg" alt="..." /></div>
                    </div>
                </div>
            </header>
            <!-- Section temoignage-->
            <div class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-10 col-xl-7">
                            <div class="text-center">
                                <div class="fs-4 mb-4 fst-italic">"Bonjour le monde, veuillez trouver les destinations férroviaires désservies ainsi que nos services médicaux !"</div>
                                <div class="d-flex align-items-center justify-content-center">
                                    <img class="rounded-circle me-3" src="../dist/assets/favicon.ico" alt="..." />
                                    <div class="fw-bold">
                                        Amine METCHOUB
                                        <span class="fw-bold text-primary mx-1">/</span>
                                        CEO, Pomodedouche
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Section destination DYNAMISER CRUD BDD PHP/JS/SQL-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="col-lg-4 mb-5 mb-lg-0"><h2 class="fw-bolder mb-0">On se déplace vers vous...</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-geo-fill"></i></div>
                                    <h2 class="h5">PARIS</h2>
                                    <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                                </div>
                                <div class="col mb-5 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-geo-fill"></i></i></div>
                                    <h2 class="h5">MARSEILLE</h2>
                                    <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                                </div>
                                <div class="col mb-5 mb-md-0 h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-geo-fill"></i></i></div>
                                    <h2 class="h5">NICE</h2>
                                    <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                                </div>
                                <div class="col h-100">
                                    <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-geo-fill"></i></div>
                                    <h2 class="h5">BARCELONE</h2>
                                    <p class="mb-0">Paragraph of text beneath the heading to explain the heading. Here is just a bit more text.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Section médical DYNAMISER CRUD BDD PHP/JS/SQL-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <!-- intro des cards santé -->
                    <div class="row gx-5 justify-content-center" id="health">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">... et on vous donne la santé.</h2>
                                <p class="lead fw-normal text-muted mb-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque fugit ratione dicta mollitia. Officiis ad.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Section CARD génération dynamique par du JavaScript -->
                    <div class="row gx-5" id="cardProduct">
                        <!-- card généré automatiquement par du JAVASCRIPT main.js-->
                        <!-- <div class="col-lg-4 mb-5">
                            <div class="card h-100 shadow border-0">
                                <img class="card-img-top" src="../src/assets/kitMiliMedUkraine.jpg" alt="Kit Militaire" />
                                <div class="card-body p-4">
                                    <div class="badge bg-primary bg-gradient rounded-pill mb-2">Nouveauté</div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#lienàremplacer"><h5 class="card-title mb-3">KIT POTION</h5></a>
                                    <p class="card-text mb-0">Kit médical de secours militaire.</p>
                                    <div class="m-2 text-success">
                                        <div class="fw-bold">Prix : 123 euros</div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <!-- Formulaire Devis et Contact-->
                    <aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5" id='formulaire'>
                        <form action="form-client.php" method="post" enctype="multipart/form-data">
                            <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                                <div class="mb-4 mb-xl-0">
                                    <div class="fs-3 fw-bold text-white">- Devis et Contact -</div>
                                    <div class="text-white-50">Pour bénéficier de nos services et pour s'informer.</div>
                                </div>
                                <div class="ms-xl-4">
                                    <div class="input-group mb-2">
                                        <input class="form-control" type="text" name="firstname" placeholder="Nom" aria-label="Nom" />
                                    </div>
                                    <div class="input-group mb-2">
                                        <input class="form-control" type="text" name="name" placeholder="Prénom" aria-label="Prénom" />
                                    </div>
                                    <div class="input-group mb-2">
                                        <input class="form-control" type="email" name="email" placeholder="Email" aria-label="Adresse Email" />
                                    </div>
                                    <div class="input-group mb-2">
                                        <select class="form-select" name="destination" aria-label="Destination">
                                            <option selected disabled>Services à destination de :</option>
                                            <option value="paris">PARIS</option>
                                            <option value="marseille">MARSEILLE</option>
                                            <option value="nice">NICE</option>
                                            <option value="barcelone">BARCELONE</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-2">
                                        <select class="form-select" name="article" aria-label="Produit ou Service">
                                            <option selected disabled>Produit/Service MEDI'RAIL</option>
                                            <option value="potion">KIT POTION</option>
                                            <option value="dysenterie">KIT DYSENTERIE</option>
                                            <option value="chirurgie">KIT CHIRURGIE</option>
                                            <option value="docteur">EQUIPE "TOUBIB"</option>
                                            <option value="docteur">CHIRURGIEN</option>
                                            <option value="docteur">PSYCHOLOGUE</option>
                                        </select>
                                    </div>
                                    <div class="input-group mb-2">
                                        <textarea class="form-control" name="message" rows="3" placeholder="Message" aria-label="Message"></textarea>
                                    </div>
                                    <div class="input-group mb-2">
                                        <button class="btn btn-outline-light" type="submit">SOUMETTRE</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </aside>
                </div>
            </section>
        </main>
<?php
    require_once '../dist/components/footer.php';
?>