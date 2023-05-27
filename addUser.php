<?php
$actualPage = 'Add user';
include './component/header.php';
include './component/navbar.php';
?>
    <div class="row justify-content-center">
        <div class="col-8 ">
            <div class="card mt-5">
                <div class="card-header">
                    <h3 class="">Add user
                        <a href="index.php" class="btn btn-dark float-end alin">Back</a></h3>
                                        </div>
                                        <div class="card-body">
                                        <form action="add.php" method="POST">
                                            <div class="mb-3">
                                                <label for="userName" class="form-label">Name<span>*</span></label>
                                                <input type="text" class="form-control bg-dark text-white shadow-dark blackOne" id="userName" name="userName">
                                            </div>
                                            <div class="mb-3">
                                                <label for="userAge" class="form-label">Age<span>*</span></label>
                                                <input type="number" class="form-control bg-dark text-white blackOne" id="userAge" name="userAge">
                                            </div>
                                            <div class="mb-3">
                                                <label for="userEmail" class="form-label">Email<span>*</span></label>
                                                <input type="email" class="form-control bg-dark text-white blackOne" id="userEmail" name="userEmail">
                                            </div>
                                            <div class="mb-3">
                                                <label for="userPhone" class="form-label">Phone<span>*</span></label>
                                                <input type="tel" class="form-control bg-dark text-white blackOne" id="userPhone" name="userPhone">
                                            </div>




                                            <div class="mb-3 row">
                                                <div class="col-4">
                                                    <label for="userGender" class="form-label">Gender<span>*</span></label>

                                                        <div class="form-check ">
                                                            <input class="form-check-input bg-dark border-dark blackOne" type="radio" name="userGender" id="userGender" value="male" checked>
                                                                <label class="form-check-label" for="userGender">
                                                                    Male
                                                                </label>
                                                        </div>

                                                        <div class="form-check">
                                                            <input class="form-check-input bg-dark border-dark blackOne" type="radio" name="userGender" id="userGender" value="female" >
                                                                <label class="form-check-label" for="userGender">
                                                                    Female
                                                                </label>
                                                        </div>
                                                </div>
                                                <div class="col-8">
                                                <label for="userPosition" class="form-label ">Work position<span>*</span></label>
                                                <select  class="form-select bg-dark text-white blackOne" name="userPosition"aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="Programmer">Programmer</option>
                                                    <option value="Machanic">Machanic</option>
                                                    <option value="Manager">Manager</option>
                                                </select>


                                                </div>

                     
                                            <div class="mb-3">
                                                <button type="submit" class="btn bg-dark text-light mt-5" name="userSave">Safe user</button>
                                            </div>
                                            
                                    
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="big-spacer"></div>
<?php include './component/footer.php';?>
