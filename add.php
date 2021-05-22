<?php 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(name != "" && image!="")
    {
    echo "<h3>Save to DB</h3>";

    $name = $_POST['name'];
    $image = $_POST['image'];

    $myPDO = new PDO('mysql:host=localhost;dbname=db_spu926', 'root', '');
    $sql = "INSERT INTO animals (name, image) VALUES (?,?)";
    $myPDO->prepare($sql)->execute([$name, $image]);

    //echo $name.'    '.$image;

    header('Location: /');
    exit;
}
else{
    echo "<h1>Not good</h1>";
}

}

?>

<?php include "head.php"; ?>

    <h1>ADD Animal</h1>
<form class="row g-3 needs-validation" validate method="post">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Name</label>
    <input type="text" class="form-control" id="validationCustom01" name="name" required>
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  <div class="col-md-8">
    <label for="validationCustom02" class="form-label">Image</label>
    <input type="text" class="form-control" id="validationCustom02" required name="image">
    <div class="valid-feedback">
      Looks good!
    </div>
  </div>
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit" >Submit form</button>
  </div>
</form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="/js/app.js" ></script> 