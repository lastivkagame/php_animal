<?php 
if($_SERVER["REQUEST_METHOD"]=="POST")
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

?>

<?php include "head.php"; ?>

    <h1>ADD Animal</h1>
<form class="row g-3 needs-validation" novalidate method="post">
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
  <!-- <div class="col-md-4">
    <label for="validationCustomUsername" class="form-label">Username</label>
    <div class="input-group has-validation">
      <span class="input-group-text" id="inputGroupPrepend">@</span>
      <input type="text" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required>
      <div class="invalid-feedback">
        Please choose a username.
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">City</label>
    <input type="text" class="form-control" id="validationCustom03" required>
    <div class="invalid-feedback">
      Please provide a valid city.
    </div>
  </div> -->
  
  <div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
  </div>
</form>
</div>