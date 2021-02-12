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
      
      <div style="margin-top: 5%; margin-left: 10%; margin-right: 10%">
      <form>
        <div class="form-row">
          <div class="col-7">
            <input type="text" class="form-control" placeholder="Title">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Data">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="ID">
          </div>
        </div>
      </form>

      <div class="form-group">
        <label for="exampleFormControlTextarea1"></label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description"></textarea>
      </div>
    </form>

      </div>
    
</body>
</html><?php /**PATH D:\Kampus\Visual Studio Projects\BahasoTest\resources\views/delete.blade.php ENDPATH**/ ?>