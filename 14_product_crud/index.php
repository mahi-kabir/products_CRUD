<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$search = $_GET['search'] ?? ''; //find "search" if not found then return empty string

if($search){
  $statement = $pdo->prepare('SELECT * FROM products WHERE title LIKE :title ORDER BY create_date DESC');
  $statement ->bindValue(':title',"%$search");
}

else{
  $statement = $pdo->prepare('SELECT * FROM products ORDER BY create_date DESC');
}

$statement->execute();
$products = $statement-> fetchAll(PDO::FETCH_ASSOC);



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">
    <title>products crud</title>
</head>


<body>

<h1>Products CRUD</h1>
<p>
<a href = "create.php" class="btn btn-success">Success</a>
</p>
<br>

<form action="">
  <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Search for products" name = "search">
    <div class = "input-group-append">
    <button class="btn btn-outline-secondary" type="submit">Search</button>
  </div>
</div>

</form>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Create Date</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    
 <?php foreach ($products as $i => $product): ?>
        <tr>
            <th scope="row"><?php echo $i+1?></th>
            <td>
                <img src="<?php echo $product['image'] ?>" class = "images">
            </td>
            <td><?php echo $product['title']?></td>
            <td><?php echo $product['description']?></td>
            <td><?php echo $product['price']?></td>
            <td><?php echo $product['create_date']?></td>
            <td>
            <a href = "update.php?id=<?php echo $product['id'] ?>" class="btn btn-success">Edit</a>

            <form method="post" action="delete.php">
            <input type="hidden" name="id" value="<?php echo $product['id']?>">
            <button type="submit"class="btn btn-danger">Delete</a>
            </form>
            </td>
      </tr>
 <?php endforeach;  ?>
    
  </tbody>
</table>
</body>
</html>