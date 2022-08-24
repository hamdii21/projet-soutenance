<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
  </head>
  <body>
         <?php include './php/navbar.php'?>

        <header class="acceuil-bg-image d-block mx-lg-auto img-fluid">
              <div class="container-fluid color-cover-cendre h-100">
                  <div class="row h-100 align-items-center">
                      <div class="col-12 text-center">
                          <div class="text-white display-4 fw-bold mb-5">ACHÈTEZ VOS TICKETS DE BUS DÉPUIS 
                        <br> VOTRE CONFORT VIA NOTRE PLATE-FORME</div>
                      </div>
                  </div>
              </div>
        </header>
        <div class="main">
              <div class="container intro-content mt-5">
                <div class="row">
                  <div class="col-md-6 align-self-center">
                  <img class = 'image-un d-block mx-lg-auto img-fluid'src="./img/femme.webp" alt="">
                  </div><!-- /.col-md-6 -->
                  <div class="col-md-6 ml-auto mt-3">
                    <h2 class="mb-4">ACHAT DE TICKET DE BUS EN LIGNE FACILE</h2>
                      <div class="card-body text-dark">
                        <form>
                          <div class="form-group">
                            <input type="text" class="form-control shadow"  placeholder="Ville de départ">
                          </div>
                          <div class="form-group mt-3  shadow">
                            <input type="text" class="form-control"  placeholder="Ville d'arrivée">
                          </div>
                          <div class="form-group mt-3 shadow">
                            <input type="date" class="form-control" >
                          </div>
                        <div class="text-center">
                        <button type="submit" class="btn btn-success btn-block btn-lg cherchez mt-3">Rerchez</button>
                        </div>
                        </form>
                    </div>
                  </div><!-- /.col-md-6 -->
                </div>
              </div>
          
          
              <div class="container-fluid bg-color-cover h-50 mt-5 py-5">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 text-center">
                            <h3 class=" display-7 fw-bold mb-2">Une plate-forme de réservation des tickets intelligente et éfficace </h3>
                            <div class= "text-center" >Grâce à l’intelligence artificielle intégrée et au système de correspondance basé sur de nombreuses données,  est le  </div>
                            <div class="text-center">spécialiste qui aide les utilisateurs à trouver rapidement les bus correspondants</div>
                        </div>
                    </div>
              </div>
              <div class='container pt-5 '>
                  <div class="header  text-center">
                        <h5 class="title display-7 fw-bold lh-1 mb-3 mt-3">Planifiez votre déplacement en seulement 4 étapes. </h5>
                   </div>
                  <div class="row pb-3">
                    <div class="col-md-3 mt-3">
                         <div class="card shadow etape">
                              <div class="card-body p-0">
                                      <img class="profile text-center" src="./img/Bus Width.png" alt="">
                                      <h4 class="text-center mt-3">1.</h4>
                                      <p class="text-dark  text-center">
                                      Vérifiez les horaires et les prix des tickets de bus qui vous convient
                                      </p>
                              </div>
                          </div>
                    </div>
                     <div class="col-md-3 mt-3">
                     <div class="card  shadow etape">
                              <div class="card-body  p-0">
                                     <img class="profile text-center" src="./img/info.png" alt="">
                                      <h4 class="text-center mt-3">2.</h4>
                                      <p class="text-dark  text-center">
                                      Renseignez vos coordonnées des voyageurs et du payeur
                                      </p>
                               </div>
                      </div>
                     </div>
                      <div class="col-md-3 mt-3">
                          <div class="card shadow etape">
                              <div class="card-body  p-0">
                                     <img class="profile text-center" src="./img/money.png" alt="">
                                      <h4 class="text-center mt-3">3.</h4>
                                      <p class="text-dark  text-center">
                                          Vérifiez les informations remplit dans le formulaire et payez
                                      </p>
                              </div>
                          </div>
                      </div>
                     <div class="col-md-3 mt-3">
                     <div class="card shadow etape">
                              <div class="card-body p-0">
                                     <img class="profile text-center" src="./img/money.png" alt="">
                                      <h4 class="text-center mt-3">3.</h4>
                                      <p class="text-dark  text-center">
                                          Vérifiez les informations remplit dans le formulaire et payez
                                      </p>
                              </div>
                      </div>
                     </div>
                  </div>
              </div>
              <div class="container-fluid bg-color-cover-bleu h-50 mt-5 py-5">
                    <div class="row h-100 align-items-center">
                        <div class="col-12 text-center">
                            <h3 class=" display-7 fw-bold mb-2 text-white">Vous recherchez le meilleur prix associé à une qualité de service élevée ? </h3>
                            <div class= "text-center text-white" >Trouver un service de haute qualité au meilleur prix, c’est la raison pour laquelle notre </div>
                            <div class="text-center text-white">plate-forme est incomparable.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container intro-content mt-5">
                <div class="row">
                    <div class="col-md-6 col-ms-3 align-self-center">
                      <img class = 'image-deux d-block mx-lg-auto img-fluid'src="./img/bus4.jpeg" alt="">
                      <div class="text-center">
                            <button type="submit" class="btn btn-ligth btn-block btn-lg bouton mt-3">J’ai bésoin d’un bus </button>
                      </div>
                    </div><!-- /.col-md-6 -->
                    <div class="col-md-6 col-ms-3 ml-auto mt-3">
                          <img class = 'image-deux d-block mx-lg-auto img-fluid'src="./img/imge-actu-1.jpeg" alt="">
                          <div class="text-center">
                             <button type="submit" class="btn btn-ligth btn-block btn-lg bouton mt-3">J’ai des bus </button>
                          </div>
                    </div>
                </div><!-- /.col-md-6 -->
            </div>
       
            <?php include './php/footer.php'?>

       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>