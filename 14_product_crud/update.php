<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$id = $_GET['id'] ?? null;

if(!$id){
    header('Location:index.php');
      exit;
}

$statement = $pdo->prepare('SELECT * FROM products WHERE id = :id');
$statement -> bindValue(':id',$id);
$statement-> execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);

// echo'<pre>';
// var_dump($product);
// echo'</pre>';


// echo'<pre>';
// var_dump($_FILES);
// echo'</pre>';


//echo $_SERVER['REQUEST_METHOD']. '<br>';

$errors = [];

$title = $product['title'];
$price =$product['price'];
$description = $product['description'];

if($_SERVER['REQUEST_METHOD']==='POST'){

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST['price'];



if(!$title){
  $errors[] = 'title is required';
}

if(!$price){
  $errors[] = 'price is required';

}

if(!is_dir('images')){
  mkdir('images');
}

if(empty($errors)){   //if errors is empty then make the insertion

    if(empty($errors)){
      $image = $_FILES['image']?? null;
      $imagePath = $product['image'];  //if image is not updated image will be product image  

     

      if($image&& $image['tmp_name']){

        if($product['image']){
            unlink($product['image']);  //if the product has an image remove the image
        }
        $imagePath = 'images/'.randomString(8).'/'.$image['name'];

        mkdir(dirname($imagePath)); //will return the image path
        // echo'<pre>';
        // var_dump($imagePath);
        // echo'</pre>';
        // exit;
        
        
        move_uploaded_file($image['tmp_name'], $imagePath);
      }
    }

   

$statement = $pdo->prepare("UPDATE products SET title = :title, image = :image, 
                        description=:description, price=:price WHERE id=:id" );

              


$statement -> bindValue(':title',$title);
$statement -> bindValue(':image',$imagePath);
$statement -> bindValue(':description',$description);
$statement -> bindValue(':price',$price);
$statement -> bindValue(':id',$id);


$statement->execute();

header('Location:index.php');
}
}

function randomString($n){
  $characters = '0123456789abcdegfhijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
$str = '';
  for($i=0;$i<$n;$i++){
  $index=rand(0, strlen($characters)-1);
  $str .= $characters[$index]; 
}
return $str;
}

?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel = "stylesheet" href = "app.css">
    <title>Hello, world!</title>
  </head>
  <body>
  
    <p>
       <a href="index.php" class = "btn btn-secondary"> Go to products </a>
    </p>
  
    <h1>Update Product <?php echo $product['title']?></h1>

<?php if (!empty($errors)): ?> <!--if errors is not empty-->
  <div class = "alert alert-danger">
    <?php foreach($errors as $error): ?> <!--iterate over errors-->
        <div><?php echo $error ?> </div>  <!--print error message-->
    <?php  endforeach; ?>
  </div>
<?php endif; ?>


<form action = "" method = "post" enctype = "multipart/form-data">

<?php if($product['image']):  ?> <!--if product image exists then show image -->
    <img src = "<?php echo $product['image']?>" class = "updated-image">
<?php endif; ?>


  <div class="form-group">
    <label>image</label>
    <br>
    <input type="file" name = "image">
    
  </div>

  <div class="form-group">
    <label>title</label>
    <input type="text" name = "title" class="form-control" value = "<?php echo $title ?>" > </input>
    
  </div>

  <div class="form-group">
    <label>description</label>
    <textarea name = "description" class="form-control"  value = "<?php echo $description ?>" > </textarea>
    
  </div>

<div class="form-group">
    <label>price</label>
    <input type="number" name = "price" step = 0.01 class="form-control"  value = "<?php echo $price ?>" >
</div>


<button type="submit" class="btn btn-primary">Submit</button>

</form>
    
  </body>
</html>
