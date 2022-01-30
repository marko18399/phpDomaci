<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Markov imenik</title>
</head>
<body style="background-image: url('img/pozadina1.png'); background-repeat: no-repeat; background-size: cover;">
<ul class="nav justify-content-center" style="text-align: center; color: white; font-family: Jost; ">
            <li class="nav-item">
                <a class="nav-link active" href="index.php" style="color: #691918;"><b>Početna</b></a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="upisiSe.php" style="color: #691918;"><b>Upiši se u imenik</b></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="imenik.php" style="color: #691918;"><b>Vidi kontakte</b></a>
            </li> 
        </ul>

        <div class="container align-items-center">
            <div class="col-md-12 mt-5">
                <h1 class="text-center" style="color: #35281E; font-family: Jost"><b>M-Imenik</b></h1>
            </div>
            <div class="col-md-12 mt-5">
                <p class="text-center" style="color: #35281E; font-size: 24px; font-family: Jost; background-color: #f9f1ee; padding:10px; box-shadow: rgba(6, 24, 44, 0.4) 0px 0px 0px 2px, rgba(6, 24, 44, 0.65) 0px 4px 6px -1px, rgba(255, 255, 255, 0.08) 0px 1px 0px inset;">
                    Dobro došli na stranicu Markovog imenika! Možete se upisati u imenik na stranici za upis ili možete pogledati imenik i upisane kontakte na strani za pregled imenika. 
                    <br> <br> Drago mi je da ste posetili moj Imenik!
                </p>
            </div>
            <div class="col-md-12 mt-5" align="center">
                <button type="submit" name="submit" class="btn btn-primary" onclick="location.href='upisiSe.php'" style="color: white; background-color: #691918; border-color: #691918;  font-family: Jost"><i class="fas fa-pen-nib" style="color:#F9F1EE"></i> Upiši se!</button>
                <button type="submit" name="submit" class="btn btn-primary" onclick="location.href='imenik.php'" style="color: white; background-color: #691918; border-color: #691918; font-family: Jost"><i class="fas fa-address-book" style="color:#F9F1EE"></i> Pogledaj imenik!</button>
            </div>
        </div>

        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/88673b6ba2.js" crossorigin="anonymous"></script>
</body>
</html>