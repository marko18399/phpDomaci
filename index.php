<!-- <?php

    // require "./includes/database.php";

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Markov imenik</title>
    <!-- CSS only -->
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="alert alert alert-primary" role="alert">
  <h4 class="text-primary text-center"><b><i>MARKOV IMENIK</i></b></h4>
  <p>Dobrodosli na stranicu Markovog imenika! Mozete se upisati u imenik, pogledati kontakte, svaki kontakt pojedinacno, mozete promeniti i obrisati kontakte. Takodje mozete i pretraziti kontakte u celom imeniku!<br> <b>Uzivajte!!!</b></p>
</div>
<!-- add/edit form modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Dodaj/Promeni kontakt</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form id="addform" method="POST" enctype="multipart/form-data">
      <div class="modal-body">
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Ime:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <input type="text" class="form-control" id="firstname" name="firstname" required="required">
            </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Prezime:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" id="lastname" name="lastname" required="required">
          </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Telefon:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone" aria-hidden="true"></i></span>
            </div>
            <input type="phone" class="form-control" id="phone" name="phone" required="required" maxLength="10" minLength="10">
          </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Mesto:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" id="place" name="place" required="required">
          </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Rodjendan:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-birthday-cake" aria-hidden="true"></i></span>
            </div>
            <input type="date" class="form-control" id="birth" name="birht" required="required">
          </div>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Fakultet:</label>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fa fa-university" aria-hidden="true"></i></span>
            </div>
            <input type="text" class="form-control" id="faculty" name="faculty" required="required">
          </div>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Izadji</button>
        <button type="submit" class="btn btn-success" id="addButton">Potvrdi</button>
        <input type="hidden" name="action" value="adduser">
        <input type="hidden" name="userid" id="userid" value="adduser">
      </div>
      </form>
    </div>
  </div>
</div>
<!-- add/edit form modal end -->
<!-- profile modal start -->
<div class="modal fade" id="userViewModal" tabindex="-1" role="dialog" aria-labelledby="userViewModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Kontakt</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="container" id="profile"> 
        <div class="row">
            <div class="col-sm-6 col-md-8">
                <h4 class="text-primary">Marko Savicevic</h4>
                <p class="text-secondary">
                <i class="fa fa-phone" aria-hidden="true"></i> 0603537889
                <br>
                <i class="fa fa-map-marker" aria-hidden="true"></i> Beograd
                <br>
                <i class="fa fa-birthday-cake" aria-hidden="true"></i> 18.3.1999.
                <br>
                <i class="fa fa-university" aria-hidden="true"></i> FON
                <br>
                </p>
                <!-- Split button -->
            </div>
        </div>

    </div>   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Izadji</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!-- profile modal end -->

<div class="row mb-3">
<div class="col-3">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModal">Unesi kontakt</button>
</div>
<div class="col-9">
<div class="input-group input-group-lg">
<div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon2"><i class="fa fa-search" aria-hidden="true"></i></span>
  </div>
  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg" placeholder="Pretrazi..." id="searchinput">
  
</div>
</div>
</div>
<!-- table -->
<table class="table"  id="userstable">
  <thead>
    <tr>
      <th scope="col">Ime</th>
      <th scope="col">Prezime</th>
      <th scope="col">Telefon</th>
      <th scope="col">Mesto</th>
      <th scope="col">Rodjendan</th>
      <th scope="col">Fakultet</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody><tr>
    <td class="align-middle">Marko</td>
    <td class="align-middle">Savicevic</td>
    <td class="align-middle">0603537889</td>
    <td class="align-middle">Beograd</td>
    <td class="align-middle">18.3.1999.</td>
    <td class="align-middle">Fakultet organizacionih nauka</td>
    <td class="align-middle">
    <a href="#" class="btn btn-success mr-3 profile" data-toggle="modal" data-target="#userViewModal" title="Prfile">Vidi</a>
    <a href="#" class="btn btn-warning mr-3 edituser" data-toggle="modal" data-target="#userModal" title="Edit">Promeni </a>
    <a href="#" class="btn btn-danger deleteuser" data-userid="14" title="Delete">Obrisi</a>
    </td>
    </tr><tr>
      <td class="align-middle">Marko</td>
      <td class="align-middle">Savicevic</td>
      <td class="align-middle">0603537889</td>
      <td class="align-middle">Beograd</td>
      <td class="align-middle">18.3.1999.</td>
      <td class="align-middle">Fakultet organizacionih nauka</td>
      <td class="align-middle">
      <a href="#" class="btn btn-success mr-3 profile" data-toggle="modal" data-target="#userViewModal" title="Prfile">Vidi</a>
      <a href="#" class="btn btn-warning mr-3 edituser" data-toggle="modal" data-target="#userModal" title="Edit">Promeni </a>
      <a href="#" class="btn btn-danger deleteuser" data-userid="14" title="Delete">Obrisi</a>
      </td>
    </tr><tr id="row-9">
      <td class="align-middle">Marko</td>
      <td class="align-middle">Savicevic</td>
      <td class="align-middle">0603537889</td>
      <td class="align-middle">Beograd</td>
      <td class="align-middle">18.3.1999.</td>
      <td class="align-middle">Fakultet organizacionih nauka</td>
      <td class="align-middle">
      <a href="#" class="btn btn-success mr-3 profile" data-toggle="modal" data-target="#userViewModal" title="Prfile">Vidi</a>
      <a href="#" class="btn btn-warning mr-3 edituser" data-toggle="modal" data-target="#userModal" title="Edit">Promeni </a>
      <a href="#" class="btn btn-danger deleteuser" data-userid="14" title="Delete">Obrisi</a>
      </td>
    </tr><tr>
      <td class="align-middle">Marko</td>
      <td class="align-middle">Savicevic</td>
      <td class="align-middle">0603537889</td>
      <td class="align-middle">Beograd</td>
      <td class="align-middle">18.3.1999.</td>
      <td class="align-middle">Fakultet organizacionih nauka</td>
      <td class="align-middle">
      <a href="#" class="btn btn-success mr-3 profile" data-toggle="modal" data-target="#userViewModal" title="Prfile">Vidi</a>
      <a href="#" class="btn btn-warning mr-3 edituser" data-toggle="modal" data-target="#userModal" title="Edit">Promeni </a>
      <a href="#" class="btn btn-danger deleteuser" data-userid="14" title="Delete">Obrisi</a>
      </td>
    </tr></tbody>
</table><!-- table -->
<nav id="pagination">
    <ul class="pagination justify-content-center">
        <li class="page-item disabled"><a class="page-link" href="#" >Prethodna</a></li>
        <li class="page-item active"><a class="page-link" href="#" >1</a></li>
        <li class="page-item"><a class="page-link" href="#" >2</a></li>
        <li class="page-item"><a class="page-link" href="#" >3</a></li>
        <li class="page-item"><a class="page-link" href="#" >Sledeca</a></li>
    </ul>
</nav>
<input type="hidden" name="currentpage" id="currentpage" value="1">
</div>
<div>

<!-- JS, Popper.js, and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</div>
<div id="overlay" style="display:none;">
    <div class="spinner-border text-danger" style="width: 3rem; height: 3rem;"></div>
    <br/>
    Ucitava se...
</div>
</body>
<script>
    $(document).ready(function(){
       // $('#overlay').fadeIn().delay(2000).fadeOut();
    });
</script>
</html>