<h2> List of Animal</h2>


<table class='table'>
    <thead>
      <tr>
        <th scope='col'>ID</th>
        <th scope='col'>Name</th>
        <th scope='col'>Image</th>
      </tr>
    </thead>
    <tbody>

<?php
    $myPDO = new PDO('mysql:host=localhost;dbname=db_spu926', 'root', '');
   
    $result = $myPDO->query("SELECT id, name, image FROM animals");

    // echo "<table class='table'>
    // <thead>
    //   <tr>
    //     <th scope='col'>ID</th>
    //     <th scope='col'>Name</th>
    //     <th scope='col'>Image</th>
    //   </tr>
    // </thead>
    // <tbody>";

    foreach($result as $row){
      // print $row["id"] . "\t";
      // print $row['name'] . "\t";
      // print $row['image'] . "\t";
    

   echo " <tr>
   <th scope='row'>{$row["id"]}</th>
   <th scope='row'>{$row["name"]}</th>
   <th scope='row'><img style='width: 10%;' src='/img/{$row["image"]}' alt='' /></th>";
   
    }

  //   echo " </tr>
  //   </tbody>
  // </table>";
?>

</tr>
    </tbody>
  </table>

