<?php 
$title = "Košík";
include './component/header.php';
include './component/connection.php';
include './component/function.php';
include './component/navbar.php';
?>
<div class="container">
    <div class="row">
        <div class="col-12">
        <h2 class="fs-1 text-primary-emphasis center fw-bold mt-5 mb-5">Nákupný košík</h2>
            <div class="card mt-5">
              
    

                        <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Produkt</th>
                            <th scope="col">Názov kurzu</th>
                            <th scope="col">Cena</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php include './component/connection.php';
                            $sql = 'SELECT * FROM cards';
                            $result = mysqli_query($con, $sql);

                            while($row = mysqli_fetch_assoc($result)){
                                ?>
                            <tr>
                                <td><img class="ms-1" width="8%" src="<?php echo $row['img']?>" alt=""></td>
                                <td class=''><?php echo $row['card_text']?></td>
                                <td><?php echo $row['price']?>,00€</td>
                                
                            </tr>

                            <?php } ?>

                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="spacer"></div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                        Prijímam zmluvné podmienky súvisiace zo spracovaním osobných údajov.
                        </label>
                </div>

            <button type="button" class="btn mt-3 button-blue rounded-pill"><a href="./shop_delete.php"class="text-decoration-none text-white">Nová objednávka</a></button>
            <button type="button" class="btn mt-3 button-blue rounded-pill"><a class="text-decoration-none text-white" href="./course.php">Ponuka Kurzov</a></button>
            <button type="button" class="btn mt-3 button-blue rounded-pill"><a class="text-decoration-none text-white" href="./basket.php">Objednať</a></button>
          </div>
            <div class="huge-spacer"></div>
<?php include './component/footer.php';?>
