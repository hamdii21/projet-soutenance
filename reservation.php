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
       
              <div class="container">
                  <div class="row">
                  <div class="col-md-6 mx-auto">
                    <h3 class="text-center fw-bold mt-5 mb-4 ">Bienvenue sur la page de réservation</h3>
                    <div class="card w-90 shadow  ">
                        <div class="card-body">
                            <form action="inscription_postulant.php" method="post">
                                <div class="mb-3">
                                    <label for="InputName" class="form-label">Nom</label>
                                    <input type="text" name="nom" class="form-control" id="InputName" required="" placeholder="Veuillez entrer votre nom">
                                </div>
                                <div class="mb-3">
                                    <label for="InputFirstName" class="form-label">Numéro</label>
                                    <input type="text" name="prenom" class="form-control" id="InputFirstName" required="" placeholder="Veuillez entrer votre prénom">
                                </div>
                                <div class="mb-3">
                                    <label for="InputEmail" class="form-label">Trajet</label>
                                    <input type="email" name="email" class="form-control" id="InputEmail" required="" placeholder="Veuillez entrer votre mail">
                                </div>
                                <div class="mb-3">
                                    <label for="InputEmailConfirm" class="form-label">Date de réservation</label>
                                    <input type="email" name="confirmation" class="form-control" id="InputEmailConfirm" required="" placeholder="Veuillez entrer le numéro">
                                </div>
                                <div class="text-center">
                                   <a href="#form-inscription"><button class="btn btn-outline-success boutton  " type="submit">S'inscrire</button></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                  </div>
              </div>


            <?php include './php/footer.php'?>

       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>