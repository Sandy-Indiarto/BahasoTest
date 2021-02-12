<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Test Skill Bahaso</title>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <span class="navbar-brand mb-0 h1" style="margin-top: 5px; margin-left: 1%;"><h4>Navbar</h4></span>
        <form class="form-inline">
            <a href="{{ url('/article-edit') }}" class="btn btn-sm btn-secondary" type="button" style="margin-right: 10px">Edit Article</a>
            <a href="{{ url('/article-add') }}" class="btn btn-sm btn-secondary" type="button" style="margin-right: 10px">Add Article</a>
            <a href="{{ url('/article-delete') }}" class="btn btn-sm btn-secondary" type="button" style="margin-right: 25px">Delete Article</a>
          </form>
      </nav>

      <div class="container" style="margin-top: 2%">
        <div class="row">
            <a href="{{ url('/article-detail') }}" class="card-link">
          <div class="col"><div class="card mb-3">
            <img src="assets/img/1.jpg" class="card-img-top" alt="..." style="height: 300px">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Article ID 91190</small></p>
            </div>
          </div>
        </a>
        </div>
        <a href="{{ url('/article-detail') }}" class="card-link">
          <div class="col"><div class="card mb-3">
            <img src="assets/img/2.png" class="card-img-top" alt="..." style="height: 300px">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Article ID 91190</small></p>
            </div>
          </div>
        </a>
        </div>
          <div class="w-100"></div>
          <a href="{{ url('/article-detail') }}" class="card-link">
          <div class="col"><div class="card mb-3">
            <img src="assets/img/3.jpg" class="card-img-top" alt="..." style="height: 300px">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Article ID 91190</small></p>
            </div>
          </div>
        </a>
        </div>
        <a href="{{ url('/article-detail') }}" class="card-link">
          <div class="col"><div class="card mb-3">
            <img src="assets/img/4.jpg" class="card-img-top" alt="..." style="height: 300px">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text"><small class="text-muted">Article ID 91190</small></p>
            </div>
          </div>
        </a>
        </div>
        </div>
      </div>

      <nav aria-label="Page navigation example" style="margin-right: 15%; margin-top: 1%; margin-bottom: 5%">
        <ul class="pagination justify-content-end">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#">Next</a>
          </li>
        </ul>
      </nav>
</body>
</html>