<!-- How to get data from database using procedural php -->

<!-- table html  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Position</th>
    </tr>
  </thead>
  <tbody>
<?php
        include('connection.php');

        if(mysqli_num_rows($result) > 0){
        //OUTPUT DATA OF EACH ROW
        while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <th scope="row"><?php echo $row["id"]?></th>
                <td><?php echo$row["id"]?></td>
                <td><?php echo$row["name"]?></td>
                <td><?php echo$row["position_player"]?></td>
            </tr>
            <?php
        }
        } else {
        echo "0 results";
        }
?>
   
  </tbody>
</table>
</body>
</html>