<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Portfolio Joseph Cloux</title>

    <link type="text/css" rel="stylesheet" href="css/reset.css"/>
    <link type="text/css" rel="stylesheet" href="bootstrap-4.3.1/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="css/responsive.css">
    <link type="text/css" rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Archivo+Black&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>
<body>

    <!-- Call Header.php -->
    <?php include 'parts/header.php'; ?>

    <section id="about-me">
        <div class="white-space" style="height: 300px; width: 100%;"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-5 slide-top">
                    <h2 class="text-blue">Qui suis-je ?</h2>
                    <p class="description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. 
                        Natus totam voluptatibus animi aspernatur ducimus quas obcaecati mollitia quibusdam 
                        temporibus culpa dolore molestias blanditiis consequuntur sunt nisi.
                    </p>
                    <p class="description">Aperiam neque id, illum laudantium autem vero quae debitis tempora modi. Ipsa
                        molestias enim in rem et incidunt beatae fugit, ab quam optio atque maiores 
                        facere est quidem, veritatis commodi.
                    </p>
                    <a class="only-link" href="#">Voir mon Cv</a>
                </div>
                <div class="col-md-6">
                    <img id="photo-id" src="assets/img/PhotoTaff.jpg" alt="Photo de joseph cloux">
                    <div class="card-blue offset-top slide-in">
                        <img class="marg-bot" src="assets/Icons/baseline-face-white-18/2x/baseline_face_white_18dp.png" alt="Un logo">
                        <h3 class="marg-bot">Personality</h3>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor 
                            incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="white-space" style="height: 300px; width: 100%;"></div>
    <section id="competences">
        <div class="container">
            <div class="col-md-5">
                <h2 class="text-blue">Competences</h2>
                <p class="description big-marg-bot">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. 
                        Natus totam voluptatibus animi aspernatur ducimus quas obcaecati 
                </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="head-card pink progress-color"></div>
                    <div class="card text-center">
                        <i class="material-icons marg-bot">desktop_windows</i>
                        <h4 class="text-blue marg-bot">Development</h4>
                        <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse 
                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="head-card orange progress-color"></div>
                    <div class="card text-center">
                        <i class="material-icons marg-bot">crop_original</i>
                        <h4 class="text-blue marg-bot">Graphics</h4>
                        <p class="description">Lorem ipsum  dolumù sal dolor sit amet, consectetur 
                            adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="head-card green progress-color"></div>
                    <div class="card text-center">
                        <i class="material-icons marg-bot">control_point</i>
                        <h4 class="text-blue marg-bot">And more</h4>
                        <p class="description">Lorem ipsum  dolumù sal dolor sit amet, consectetur adipiscing 
                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                            Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects">
        <div class="white-space" style="height: 200px; width: 100%;"></div>
        <div class="container">
            <div class="col-md-5">
                <h2 class="text-blue">Projects</h2>
                <p class="description fat-marg-bot">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem possimus distinctio ex. 
                    Natus totam voluptatibus animi aspernatur ducimus quas obcaecati 
                </p>
            </div>
            <div class="row">
                <!-- Colonne de gauche -->
                <div class="col-md-6 left text-center">
                    <div class="card-project fat-marg-bot">
                        <h4 class="text-blue medium-marg-bot">Blog MyTraiteur</h4>
                        <img class="medium-marg-bot" src="assets/img/blog-mytraiteur.jpg" alt="Capture d'écran">
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse 
                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                        </p>
                        <button class="btn btn-blue">Read more</button>
                    </div>
                    <div class="card-project">
                        <h4 class="text-blue medium-marg-bot">Maquettage du Portfolio sous Photoshop</h4>
                        <img class="medium-marg-bot" src="assets/img/mockup-portfolio.jpg" alt="Capture d'écran">
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse 
                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                        </p>
                        <button class="btn btn-blue">Read more</button>
                    </div>
                </div>
                <!--- Colonne de droite -->
                <div class="col-md-6 right text-center">
                    <div class="card-project">
                        <h4 class="text-blue medium-marg-bot">Site touristique sur l'île d'Oléron</h4>
                        <img class="medium-marg-bot" src="assets/img/oleron-screen.png" alt="Capture d'écran">
                        <p class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod 
                            tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse 
                            ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. 
                        </p>
                        <button class="btn btn-blue">Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="white-space" style="height: 200px; width: 100%;"></div>
    <section id="contact">
        <div class="row">
            <div class="footer-draw offset-md-4 col-md-8 fat-pad-bot">
                <div class="container">
                    <h2 class="text-white big-marg-bot">Contact me</h2>
                    <div class="row">
                        <div class="col-md-7">
                            <div class="row">
                                <!-- Call contact-form.php -->
                                <?php include 'parts/contact-form.php'; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <p class="text-white">Or you can contact me directly by email if you follow :</p>
                            <a target="_blank" href="mailto:joseph.clx@gmail.com" type="mail">Contact by email</a>
                            <p class="medium-marg-top text-white">Location</p>
                            <p class="text-white">France,<br>
                                Bordeaux (33300)
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call Footer.php -->
    <?php include 'parts/footer.php'; ?>

    <!-- Script Link -->
    <script src="js/waypoints/lib/noframework.waypoints.min.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.4.1.slim.js"
        integrity="sha256-BTlTdQO9/fascB1drekrDVkaKd9PkwBymMlHOiG+qLI="
        crossorigin="anonymous"></script>
    <script src="bootstrap-4.3.1/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>