<?php
$title = 'Služby';
include "./component/header.php";
?>
<body class="overflow-x-hidden">
<?php
include "./component/navbar.php";
?>

<div class="container">
  <h1 class='text-primary-emphasis fs-1 fw-bold center'>Kontaktujte nás</h1>
  <h2 class='text-primary-emphasis fs-3 fw-bold center mt-5'>Odoslať správu</h2>
  <form class="row center">
  <div class="col-6">
    <label for="inputEmail4" class="form-label"></label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="Meno *">
  </div>
<div class="row center">
  <div class="col-6">
  <label for="inputAddress" class="form-label"></label>
  <input type="text" class="form-control" id="inputAddress" placeholder="E-mail *">
  </div>
</div>
  
<div class="row center">
  <div class="col-6">
  <label for="inputAddress2" class="form-label"></label>
  <input type="text" class="form-control" id="inputAddress2" placeholder="Správa">
  </div>
</div>
  <div class="col-6">
    <div class="form-check">
      <div class="small-spacer"></div>
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">Súhlasím so spracovaním osobných údajov pre marketingové účely *</label>
      <div class="small-spacer"></div>
    </div>
  </div>
  <div class="row"></div>
  <div class="col-6">
  <div class="col-6"></div>
    <button type="submit" class="btn button-blue text-white rounded-pill">Odoslať</button>
  </div>
</form>
</div>
<div class="spacer"></div>

<div class="container">
  
  <h2 class='text-primary-emphasis fs-1 fw-bold center'>Ozvite sa nám</h2>
  
  <div class="row">
    <div class="col-4">
      <h2 class='text-primary-emphasis fs-2 fw-bold center'>Zavolajte</h2>
      <p class='text-secondary-emphasis fs-4 center'>+421 111 222 333</p>
    </div>
    <div class="col-4">
      <h2 class='text-primary-emphasis fs-2 fw-bold center'>Navštívte nás</h2>
      <p class='text-secondary-emphasis fs-4 center'>Hlavné námestie 5, Bratislava, 811 01</p>
    </div>
    <div class="col-4">
      <h2 class='text-primary-emphasis fs-2 fw-bold center'>Sociálne siete</h2>
      <p class='text-secondary-emphasis fs-4 center'>@facebookovástránka <br>
  @instagramovýúčet <br>
  @twitterúčet</p>
    </div>
  </div>
</div>
<div class="spacer"></div>
<div class="container">
  <div class="col-12">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.292361901093!2d17.10555897682067!3d48.14316855077125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476c8942da9a8a19%3A0x22fdaef834e8771e!2sHlavn%C3%A9%20n%C3%A1mestie%20356%2F5%2C%20811%2001%20Bratislava!5e0!3m2!1ssk!2ssk!4v1682863104198!5m2!1ssk!2ssk" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="spacer"></div>
</div>


<?php
include "./component/footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>