<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <a href="<?php echo e(url('/homepage')); ?>" style=" margin-left: 1%">
        <span class="navbar-brand mb-0 h1" style="margin-top: 5px; margin-left: 1%;"><h4>Navbar</h4></span>
        </a>
        <form class="form-inline">
            <a href="<?php echo e(url('/article-edit')); ?>" class="btn btn-sm btn-secondary" type="button" style="margin-right: 10px">Edit Article</a>
            <a href="<?php echo e(url('/article-add')); ?>" class="btn btn-sm btn-secondary" type="button" style="margin-right: 10px">Add Article</a>
            <a href="<?php echo e(url('/article-delete')); ?>" class="btn btn-sm btn-secondary" type="button" style="margin-right: 25px">Delete Article</a>
          </form>
      </nav>

    <div class="media" style="margin-top: 5%; margin-left: 10%; margin-right: 10%">
        <img src="assets/img/1.jpg" class="align-self-start mr-3" alt="..." style="width: 400px">
        <div class="media-body">
          <h5 class="mt-0">Top-aligned media</h5>
          <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
          <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
        </div>
      </div>
    
</body>
</html><?php /**PATH D:\Kampus\Visual Studio Projects\BahasoTest\resources\views/detail.blade.php ENDPATH**/ ?>