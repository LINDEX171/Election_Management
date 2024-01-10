

<!DOCTYPE html>
<html lang="en">
<html lang="en" class="no-js" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ma Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome (pour les icônes) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
  <!-- Styles personnalisés -->
  <style>
    body {
      padding: 20px;
      color: white; /* Changement de la couleur du texte en blanc */
      background-color: black; /* Changement de la couleur de fond en noir */
    }

    #videoContainer {
      text-align: center;
      color: black; /* Changement de la couleur du texte dans la section vidéo en noir */
    }

    .space {
      margin-bottom: 20px;
    }

    h4 {
      color: white; /* Changement de la couleur du texte dans les balises h4 en blanc */
    }

    p {
      color: black; /* Changement de la couleur du texte dans les balises p en blanc */
    }

    button{
        text-align: center;


    }

  </style>

</head>
<body>




    @include('includes.navbar')











   <!-- ... (votre contenu actuel) ... -->

<div class="container space mb-3 d-flex justify-content-end">






    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
</div>



  <div class="container space">
    <h4><marquee> <span style="color: green;">★</span>
        <span style="color: yellow;">★</span>
        <span style="color: red;">★</span>Bienvenue {{ Auth::user()->name }} sur la page dédiée à l'élection présidentielle du 25 février ! <span style="color: green;">★</span>
        <span style="color: yellow;">★</span>
        <span style="color: red;">★</span></marquee></h4>

  </div>

  <br> </br>
  <section id="folio" class="">
  <div class="container space">
    <p>Nous sommes ravis de t'accueillir dans cet espace démocratique où tu pourras exercer ton droit de vote et jouer un rôle essentiel dans le choix du futur leader de notre pays. Nous te souhaitons un agréable parcours sur notre plateforme, en espérant que tu trouves toutes les informations nécessaires pour faire un choix éclairé lors de cette élection.
        Naviguez à travers notre site avec confiance, car nous avons pris des mesures pour garantir un processus de vote transparent, équitable et sécurisé. Si vous avez des questions ou des préoccupations, n'hésitez pas à consulter notre section d'aide ou à contacter notre équipe dédiée.

Nous croyons en la puissance de la participation citoyenne, et chaque vote compte. Merci de faire partie de ce processus démocratique, et nous vous encourageons à exprimer votre voix de manière éclairée et réfléchie. Bon vote !
    </p>



            <!-- portfolio
            ----------------------------------------------- -->



                <a href="/electeur" class="btn btn-primary">Voter</a>
                <div id="bricks" class="row bricks">
                    <div class="column lg-12 masonry">
                        <div class="bricks-wrapper">

                            <div class="grid-sizer"></div>

                            <article class="brick brick--double entry">

                                    <div class="entry__thumb">
                                        <img src="boots/images/folio/pros1.png" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat" style="color: black;">OUSMANE SONKO</div>
                                        <h4 class="entry__title" style="color: black;">YEEWI ASKAN WI</h4>
                                    </div>
                            </article> <!-- entry -->

                            <article class="brick brick--double entry">

                                    <div class="entry__thumb">
                                        <img src="boots/images/folio/thioneniang1.png" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat" style="color: black;">THIONE NIANG</div>
                                        <h4 class="entry__title" style="color: black;">JEUF JOTNA</h4>
                                    </div>
                            </article> <!-- entry -->

                            <article class="brick brick--double entry">

                                    <div class="entry__thumb">
                                        <img src="boots/images/folio/karimwade1.png" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat" style="color: black;">KARIM WADE</div>
                                        <h4 class="entry__title" style="color: black;">PDS</h4>
                                    </div>
                            </article> <!-- entry -->

                            <article class="brick brick--double entry">

                                    <div class="entry__thumb">
                                        <img src="boots/images/folio/papedjibrilfall1.png" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat" style="color: black;">PAPE DJIBRIL FALL</div>
                                        <h4 class="entry__title" style="color: black;">SERVITEUR</h4>
                                    </div>
                            </article> <!-- entry -->

                            <article class="brick brick--double entry">

                                    <div class="entry__thumb">
                                        <img src="boots/images/folio/amadouba2.png" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat" style="color: black;">AMADOU BA</div>
                                        <h4 class="entry__title" style="color: black;">Benoo bokou yakar</h4>
                                    </div>
                            </article> <!-- entry -->

                            <article class="brick brick--double entry">

                                <div class="entry__thumb">
                                    <img src="boots/images/folio/khalifasall1.png" alt="">
                                </div>
                                <div class="entry__info">
                                    <div class="entry__cat" style="color: black;">KHALIFA SALL</div>
                                    <h4 class="entry__title" style="color: black;">TAXAWU SENEGAL</h4>
                                </div>
                        </article> <!-- entry -->

                       <!--      <article class="brick entry">

                                    <div class="entry__thumb">
                                        <img src="boots/images/folio/woodcraft@2x.jpg" alt="">
                                    </div>
                                    <div class="entry__info">
                                        <div class="entry__cat">E-Commerce</div>
                                        <h4 class="entry__title">Woodcraft</h4>
                                    </div>
                            </article> entry -->

                        </div> <!-- end bricks-wrapper -->

                        <div class="row section-header light-on-dark" data-num="06">
                            <h3 class="column lg-12 section-header__pretitle text-pretitle">CANDIDATS</h3>
                            <div class="column lg-6 stack-on-1100 section-header__primary">
                                <h2 class="title text-display-1">
                                 <!--   Here are some of our favorite projects we have done lately. Feel free to check them out.-->
                                </h2>
                            </div>
                            <div class="column lg-6 stack-on-1100 section-header__secondary">
                                <p class="desc">
                                    Explorez les Candidats: Familiarisez-vous avec les profils des candidats en lice.

                                </p>
                            </div>
                        </div> <!-- end section-header -->
                    </div> <!-- end masonry -->
                </div> <!-- end bricks -->


                <!-- modal templates popup
                -------------------------------------------- -->
                <div id="" hidden>
                    <div class="boots/modal-popup">
                        <img src="boots/images/folio/gallery/g-turban.jpg" alt="">
                    </div>
                </div> <!-- end modal -->

                <div id="" hidden>
                    <div class="modal-popup">
                        <img src="boots/images/folio/gallery/g-tulips.jpg" alt="">
                    </div>
                </div> <!-- end modal -->

                <div id="" hidden>
                    <div class="modal-popup">
                        <img src="boots/images/folio/gallery/g-grayscale.jpg" alt="">

                    </div>
                </div> <!-- end modal -->

                <div id="" hidden>
                    <div class="modal-popup">
                        <img src="boots/images/folio/gallery/g-lamp.jpg" alt="">
                    </div>
                </div> <!-- end modal -->

                <div id="" hidden>
                    <div class="modal-popup">

                        <img src="/boots/images/folio/gallery/g-tropical.jpg" alt="">

                    </div>
                </div> <!-- end modal -->

                <div id="" hidden>
                    <div class="modal-popup">
                        <img src="/boots/images/folio/gallery/g-woodcraft.jpg" alt="">
                    </div>
                </div> <!-- end modal -->




            </section> <!-- end s-folio -->







    <div class="container space mb-3 d-flex justify-content-end">
  <!--    <button id="listerBtn" class="btn btn-success" ><a href={{ url('/candidat') }} class="btn btn-success">Ajouter candidat</a></button> -->
    </div>

  </div>













  <!-- Bootstrap JS et Popper.js (requis pour Bootstrap) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Votre script JavaScript -->
  <script>
    // Vous pouvez ajouter du code ici pour gérer les actions des boutons si nécessaire
  </script>

</body>
</html>


<!DOCTYPE html>

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>election</title>

    <script>
        document.documentElement.classList.remove('no-js');
        document.documentElement.classList.add('js');
    </script>

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="boots/css/vendor.css">
    <link rel="stylesheet" href="boots/css/styles.css">
    <link  href="boots/css/styles.css">
    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="boots/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="boots/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="boots/favicon-16x16.png">
    <link rel="manifest" href="boots/site.webmanifest">

</head>


<body id="top">


    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader"></div>
    </div>


    <!-- page wrap
    ================================================== -->
    <div id="page" class="s-pagewrap">




        <!-- # site-content
        ================================================== -->



            <!-- about
            ----------------------------------------------- -->







            <!-- testimonials
            ----------------------------------------------- -->


        </section>  <!-- end content -->





  <br> </br>
  <div class="container space" id="videoContainer">
    <video controls width="100%" height="auto">
      <source src="uploads/video.mp4" type="video/mp4">
      Votre navigateur ne prend pas en charge la balise vidéo.
    </video>
  </div>


        <!-- # site-footer
        ================================================== -->
        <footer id="footer" class="s-footer target-section">





                <div class="column lg-6 tab-12 s-footer__bottom-left">
                    <ul class="s-footer__social">
                        <li>
                            <a href="">
                                <svg xmlns="https://www.instagram.com/lindex_dg/" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M20,3H4C3.447,3,3,3.448,3,4v16c0,0.552,0.447,1,1,1h8.615v-6.96h-2.338v-2.725h2.338v-2c0-2.325,1.42-3.592,3.5-3.592 c0.699-0.002,1.399,0.034,2.095,0.107v2.42h-1.435c-1.128,0-1.348,0.538-1.348,1.325v1.735h2.697l-0.35,2.725h-2.348V21H20 c0.553,0,1-0.448,1-1V4C21,3.448,20.553,3,20,3z"></path></svg>
                                <span class="u-screen-reader-text">Facebook</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="https://www.instagram.com/lindex_dg/" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M19.633,7.997c0.013,0.175,0.013,0.349,0.013,0.523c0,5.325-4.053,11.461-11.46,11.461c-2.282,0-4.402-0.661-6.186-1.809 c0.324,0.037,0.636,0.05,0.973,0.05c1.883,0,3.616-0.636,5.001-1.721c-1.771-0.037-3.255-1.197-3.767-2.793 c0.249,0.037,0.499,0.062,0.761,0.062c0.361,0,0.724-0.05,1.061-0.137c-1.847-0.374-3.23-1.995-3.23-3.953v-0.05 c0.537,0.299,1.16,0.486,1.82,0.511C3.534,9.419,2.823,8.184,2.823,6.787c0-0.748,0.199-1.434,0.548-2.032 c1.983,2.443,4.964,4.04,8.306,4.215c-0.062-0.3-0.1-0.611-0.1-0.923c0-2.22,1.796-4.028,4.028-4.028 c1.16,0,2.207,0.486,2.943,1.272c0.91-0.175,1.782-0.512,2.556-0.973c-0.299,0.935-0.936,1.721-1.771,2.22 c0.811-0.088,1.597-0.312,2.319-0.624C21.104,6.712,20.419,7.423,19.633,7.997z"></path></svg>
                                <span class="u-screen-reader-text">Twitter</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="https://www.instagram.com/lindex_dg/" width="24" height="24" viewBox="0 0 24 24" style="fill:rgba(0, 0, 0, 1);transform:;-ms-filter:"><path d="M11.999,7.377c-2.554,0-4.623,2.07-4.623,4.623c0,2.554,2.069,4.624,4.623,4.624c2.552,0,4.623-2.07,4.623-4.624 C16.622,9.447,14.551,7.377,11.999,7.377L11.999,7.377z M11.999,15.004c-1.659,0-3.004-1.345-3.004-3.003 c0-1.659,1.345-3.003,3.004-3.003s3.002,1.344,3.002,3.003C15.001,13.659,13.658,15.004,11.999,15.004L11.999,15.004z"></path><circle cx="16.806" cy="7.207" r="1.078"></circle><path d="M20.533,6.111c-0.469-1.209-1.424-2.165-2.633-2.632c-0.699-0.263-1.438-0.404-2.186-0.42 c-0.963-0.042-1.268-0.054-3.71-0.054s-2.755,0-3.71,0.054C7.548,3.074,6.809,3.215,6.11,3.479C4.9,3.946,3.945,4.902,3.477,6.111 c-0.263,0.7-0.404,1.438-0.419,2.186c-0.043,0.962-0.056,1.267-0.056,3.71c0,2.442,0,2.753,0.056,3.71 c0.015,0.748,0.156,1.486,0.419,2.187c0.469,1.208,1.424,2.164,2.634,2.632c0.696,0.272,1.435,0.426,2.185,0.45 c0.963,0.042,1.268,0.055,3.71,0.055s2.755,0,3.71-0.055c0.747-0.015,1.486-0.157,2.186-0.419c1.209-0.469,2.164-1.424,2.633-2.633 c0.263-0.7,0.404-1.438,0.419-2.186c0.043-0.962,0.056-1.267,0.056-3.71s0-2.753-0.056-3.71C20.941,7.57,20.801,6.819,20.533,6.111z M19.315,15.643c-0.007,0.576-0.111,1.147-0.311,1.688c-0.305,0.787-0.926,1.409-1.712,1.711c-0.535,0.199-1.099,0.303-1.67,0.311 c-0.95,0.044-1.218,0.055-3.654,0.055c-2.438,0-2.687,0-3.655-0.055c-0.569-0.007-1.135-0.112-1.669-0.311 c-0.789-0.301-1.414-0.923-1.719-1.711c-0.196-0.534-0.302-1.099-0.311-1.669c-0.043-0.95-0.053-1.218-0.053-3.654 c0-2.437,0-2.686,0.053-3.655c0.007-0.576,0.111-1.146,0.311-1.687c0.305-0.789,0.93-1.41,1.719-1.712 c0.534-0.198,1.1-0.303,1.669-0.311c0.951-0.043,1.218-0.055,3.655-0.055c2.437,0,2.687,0,3.654,0.055 c0.571,0.007,1.135,0.112,1.67,0.311c0.786,0.303,1.407,0.925,1.712,1.712c0.196,0.534,0.302,1.099,0.311,1.669 c0.043,0.951,0.054,1.218,0.054,3.655c0,2.436,0,2.698-0.043,3.654H19.315z"></path></svg>
                                <span class="u-screen-reader-text">Instagram</span>
                            </a>
                        </li>
                        <li>
                            <a href="">
                                <svg xmlns="https://www.instagram.com/lindex_dg/" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20.66 6.98a9.932 9.932 0 0 0-3.641-3.64C15.486 2.447 13.813 2 12 2s-3.486.447-5.02 1.34c-1.533.893-2.747 2.107-3.64 3.64S2 10.187 2 12s.446 3.487 1.34 5.02a9.924 9.924 0 0 0 3.641 3.64C8.514 21.553 10.187 22 12 22s3.486-.447 5.02-1.34a9.932 9.932 0 0 0 3.641-3.64C21.554 15.487 22 13.813 22 12s-.446-3.487-1.34-5.02zM12 3.66c2 0 3.772.64 5.32 1.919-.92 1.174-2.286 2.14-4.1 2.9-1.002-1.813-2.088-3.327-3.261-4.54A7.715 7.715 0 0 1 12 3.66zM5.51 6.8a8.116 8.116 0 0 1 2.711-2.22c1.212 1.201 2.325 2.7 3.34 4.5-2 .6-4.114.9-6.341.9-.573 0-1.006-.013-1.3-.04A8.549 8.549 0 0 1 5.51 6.8zM3.66 12c0-.054.003-.12.01-.2.007-.08.01-.146.01-.2.254.014.641.02 1.161.02 2.666 0 5.146-.367 7.439-1.1.187.373.381.793.58 1.26-1.32.293-2.674 1.006-4.061 2.14S6.4 16.247 5.76 17.5c-1.4-1.587-2.1-3.42-2.1-5.5zM12 20.34c-1.894 0-3.594-.587-5.101-1.759.601-1.187 1.524-2.322 2.771-3.401 1.246-1.08 2.483-1.753 3.71-2.02a29.441 29.441 0 0 1 1.56 6.62 8.166 8.166 0 0 1-2.94.56zm7.08-3.96a8.351 8.351 0 0 1-2.58 2.621c-.24-2.08-.7-4.107-1.379-6.081.932-.066 1.765-.1 2.5-.1.799 0 1.686.034 2.659.1a8.098 8.098 0 0 1-1.2 3.46zm-1.24-5c-1.16 0-2.233.047-3.22.14a27.053 27.053 0 0 0-.68-1.62c2.066-.906 3.532-2.006 4.399-3.3 1.2 1.414 1.854 3.027 1.96 4.84-.812-.04-1.632-.06-2.459-.06z"></path></svg>
                                <span class="u-screen-reader-text">Dribbble</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="column lg-6 tab-12 s-footer__bottom-right">
                    <div class="ss-copyright">
                        <span>© lindex 2024</span>
                        <span>Design by <a href="https://ibrahimaportofolio.netlify.app/">LINDEX</a>
                    </div>
                </div>

            </div> <!-- s-footer__bottom -->


        </footer> <!-- end footer -->


    <!-- Java Script
    ================================================== -->
    <script src="boots/js/plugins.js"></script>
    <script src="boots/ js/main.js"></script>

</body>
</html>
