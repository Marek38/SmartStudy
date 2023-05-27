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
        <img class="img-fluid" src="./image/office.webp" alt="">
    </div>
    <div class="col-5 ms-5">
        <h2 class="text-primary-emphasis fs-1 fw-bold mb-5">Informatika inak I.</h2>
        <h3 class="fs-4 fw-bold">APLIKÁCIA WORD</h3>
        <div class="">
            <ul class="">
            <li class="">popis základných funkcií programu</li>
            <li class="">výučba na praktických príkladoch z praxe </li>
            </ul>
        </div>
        <h3 class="fs-4 fw-bold">APLIKÁCIA POWERPOINT</h3>
        <div class="">
            <ul class="">
            <li class="">popis základných funkcií programu</li>
            <li class="">výučba na praktických príkladoch z praxe</li>
            </ul>
        </div>
        <h3 class="fs-4 fw-bold">APLIKÁCIA EXCEL</h3>
        <div class="">
            <ul class="">
            <li class="">popis základných funkcií programu</li>
            <li class="">výučba na praktických príkladoch z praxe </li>
            </ul>
        </div>
        <h3 class='mt-5 text-primary-emphasis fw-bold'>75,00€</h3>
        
        <form action="add_one.php" method="POST">
            <input type="hidden" name="img" value="./image/inak1.webp">
            <input type="hidden" name="card_text" value="Informatika inak I.">
            <input type="hidden" name="price" value="75">
            <button type="submit" class="btn mt-3 button-blue rounded-pill">Do košíka</button>
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