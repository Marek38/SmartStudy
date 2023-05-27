<?php
$title = 'Služby';
include "./component/header.php";
?>
<body class="overflow-x-hidden">
<?php
include "./component/navbar.php";
?>
<div class="container">
  <h2 class="fs-1 text-primary-emphasis center fw-bold mt-5">Ako si vybrať kurz?</h2>
  <p class="fs-5 center text-center">Treba si uvedomiť že náš každý úžasný kurz je cielený pre určitú skupinu ľudí, ktorý by sa v našich kurzoch mali sami nájsť. Ak sa tak ale nestane treba si položiť zopár základných otázok: Čo je to počítač? Na čo nám slúži? Čo je to pracovná plocha? Na čo sa používa email? Ak ste mali väčšie problémy odpovedať na niektorú z týchto otázok, tak vám odporúčame kurz s názvom Informatika inak Základ. Ak ste ale na tieto otázky odpovedali bez problémov tak sa skúste tieto: Čo je to Microsoft office? Načo používame Word, Excel a Powerpoint? Dokážem v týchto programoch naplno pracovať? Ak ste mali väčšie problémy odpovedať na niektorú z týchto otázok, tak vám odporúčame kurz s názvom Informatika inak I. Ak ste ale aj na tieto otázky odpovedali bez problémov tak vám v prvom rade gratulujeme ale skúste ešte tieto: Kto je to developer? Ako a kde sa tvorí webová stránka? Dokážem na počkanie vytvoriť web stránku? Ak ste mali väčšie problémy odpovedať na niektorú z týchto otázok, tak vám odporúčame kurz s názvom Informatika inak II.</p>
  <div class="spacer"></div>
  <h2 class="fs-1 text-primary-emphasis center  fw-bold mt-5">Naša ponuka</h2>
  <div class="spacer"></div>
  <div class="row">
    <a class="col-4 text-decoration-none course" href="course_basic.php">
      <img class="img-fluid" src="image\windows.webp" alt="">
      <h3 class="text-black center fw-bold fs-5">Informatika inak Základ</h3>
      <p class='text-secondary center fs-5 '>45,00 €</p>
    </a>
    <a class="col-4 text-decoration-none course" href="course_one.php">
      <img class="img-fluid" src="image\office.webp" alt="">
      <h3 class="text-black center fw-bold fs-5">Informatika inak I.</h3>
      <p class='text-secondary center fs-5 '>75,00 €</p>
    </a>
    <a class="col-4 text-decoration-none course" href="course_two.php">
      <img class="img-fluid" src="image\html5.webp" alt="">
      <h3 class="text-black center fw-bold fs-5">Informatika inak II.</h3>
      <p class='text-secondary center fs-5 '>120,00 €</p>
    </a>
  </div>
  <div class="big-spacer"></div>
</div>


<?php
include "./component/footer.php";
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>