<?php
$title = 'Služby';
include "./../component/header.php";
?>
<?php
include "./../component/navbar.php";
?>

<?php
$host = "mariadb105.r5.websupport.sk";
$dbname = "hz024702db";
$username = "hz024700";
$password = "Dhynydor1";

$dsn = 'mysql:host=' .$host. ';dbname='.$dbname;
$con = new PDO($dsn, $username, $password);
$con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$con->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);

if(isset($_GET['id'])){
    $id = $_GET['id'];
} else {
  echo "nejde mi to";
}

$stmt = $con->query("SELECT * FROM languages WHERE lang_name = '$id';");
$pokus = $con ->query("SELECT * FROM cards WHERE card_name = '$id';");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
$row2 = $pokus->fetch(PDO::FETCH_ASSOC);

// Dynamic card data from the database
$cardTitle = $row['title'];
$cardText = $row['text'];
$imageUrl = $row['img'];
$buttonText = $row['text_button'];
$buttonUrl = $row['button_link'];
?>

<?php foreach($languages as $cards): ?>
  <div class="card">
    <img src="<?php echo $cards->img; ?>" class="card-img-top" alt="Card Image">
    <div class="card-body">
      <h5 class="card-title"><?php echo $cards->title; ?></h5>
      <p class="card-text"><?php echo $cards->text; ?></p>
      <a href="<?php echo $cards->button_link; ?>" class="btn btn-primary"><?php echo $cards->text_button; ?></a>
    </div>
  </div>
<?php endforeach; ?>




    </main>



    <?php include("./../component/footer_shop.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <script>
        const btns = document.getElementsByClassName("<?php echo $sidebar_btn; ?>");

        for(i = 0; i < btns.length; i++){
          btns[i].addEventListener('click',function(){
            this.classList.toggle('<?php echo $active; ?>');
          });
        }

    </script>

</body>
</html>
