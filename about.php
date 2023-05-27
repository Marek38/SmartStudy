<?php
$title = 'Služby';
include "./component/header.php";
?>
<body class="overflow-x-hidden">
<?php
include "./component/navbar.php";
?>

<div class='container'>
<div class="spacer"></div>
  <h2 class='text-primary-emphasis fs-1 fw-bold center'>Spoznajte nás</h2>
    <div class='row mt-5'>
            <div class='col-6'>
                <img src="image\about_primary.png" class="img-fluid " alt="..."> 
            </div>
            <div class='col-5'>
              <div class="spacer"></div>
                <h2 class='text-primary-emphasis fs-1 fw-bold text-center'>Váš úspech je pre nás motiváciou</h2>
                <article class='text-secondary-emphasis fs-4 text-center'>Naši absolventi sú úspešní ľudia plní elánu so zápalom do práce. Tak neváhaj a staň sa aj ty jedným z našich študentov.</article>
            </div>

    </div>
</div>

<div class="big-spacer"></div>

<div class="container"> 
    <h2 class="center text-primary-emphasis fs-1 fw-bold mb-5 ">Náš tím</h2>
    <div class="row">
        <div class="col-3">
            <img class="img-fluid rounded-circle" src="image\zam1.png" alt="">
            <h3 class="fs-5 text-primary-emphasis center fw-bold mt-5">Juraj Bosý</h3>
            <p class="fs-5 text-primary-emphasis center text-center">WEB Developer <br> EXCEL Expert</p>
        </div>

        <div class="col-3">
            <img class="img-fluid rounded-circle" src="image\zam2.png" alt="">
            <h3 class="fs-5 text-primary-emphasis center fw-bold mt-5">Adam Belko</h3>
            <p class="fs-5 text-primary-emphasis center text-center">Full stack developer</p>
        </div>

        <div class="col-3">
            <img class="img-fluid rounded-circle" src="image\zam3.png" alt="">
            <h3 class="fs-5 text-primary-emphasis center fw-bold mt-5">Tomáš Zajac</h3>
            <p class="fs-5 text-primary-emphasis center text-center">WORD Expert <br> POWERPOINT Expert</p>
        </div>

        <div class="col-3">
            <img class="img-fluid rounded-circle" src="image\zam4.png" alt="">
            <h3 class="fs-5 text-primary-emphasis center fw-bold mt-5">Ronnie Rybárik</h3>
            <p class="fs-5 text-primary-emphasis center text-center">WEB Developer <br> WORD Expert</p>
        </div>
    </div>
</div>
<div class="big-spacer"></div>
<div class=" text-center ">
  <div class="section-blue card-body pb-5 pt-5 ">
    <div class="small-spacer"></div>
    <h5 class="card-title text-white fs-1 lh-lg fw-bold">Chceš sa stať našim expertom?</h5>
    <p class="card-text text-white fs-5 lh-lg">Zadajte svoj e-mail pre naviazanie súkromnej, vzájomnej komunikácie</p>
    <div class="row center">
    <div class="mb-3 col-3 ">
      <label for="formGroupExampleInput" class="form-label "></label>
      <input type="text" class="form-control border-white bg-white section-blue border border-top-0 border-end-0 border-start-0 " id="formGroupExampleInput" placeholder="E-mail *">
    </div> 
    </div>
    <a href="contact.php"><button type="button" class="btn mb-5 mt-5 button-white rounded-pill">Odoslať</button></a>
  </div>

<?php
include "./component/footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>