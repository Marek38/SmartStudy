<?php
$title = 'Služby';
include "./component/header.php";
?>
<body>
<?php
include "./component/navbar.php";
?>
<div class="spacer"></div>
<div class="container">
<div class=" row">
    <div class="col-6">
        <img class="img-fluid" src="./image/html5.webp" alt="">
    </div>
    <div class="col-5 ms-5">
        <h2 class="text-primary-emphasis fs-1 fw-bold mb-5">Informatika inak II.</h2>
        <h3 class="fs-4 fw-bold">HTML</h3>
        <div class="">
            <ul class="">
            <li class="">oboznámenie zo základnou syntax</li>
            <li class="">oboznámenie s HTML 5 tags</li>
            <li>tvorba tabuliek, zoznamov</li>
            <li>výučba na praktických príkladoch z praxe</li>
            </ul>
        </div>
        <h3 class="fs-4 fw-bold">CSS</h3>
        <div class="">
            <ul class="">
            <li class="">oboznámenie zo základnou syntax</li>
            <li class="">výučba na praktických príkladoch z praxe</li>
            <li>Flexbox, Grid</li>
            <li>jednoduché využitie responzívnych jednotiek</li>
            </ul>
        </div>

        <h3 class='mt-5 text-primary-emphasis fw-bold'>120,00€</h3>
        <form action="add_two.php" method="POST">
            <input type="hidden" name="img" value="./image/inak2.webp">
            <input type="hidden" name="card_text" value="Informatika inak II.">
            <input type="hidden" name="price" value="120">
            <button type="submit" class="btn mt-3 button-blue text-white rounded-pill">Do košíka</button>
        </form>
    </div>
</div>
</div>

<div class="big-spacer"></div>
<?php
include "./component/footer.php";
?><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>