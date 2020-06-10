<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Blog Home</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/modern-business.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">

</head>
<style>


.eole{
  background-color: #0b7358;
}

.txt{
  color: white;
}

</style>
<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark eole fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/">Éole</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded=" alse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/login">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.html"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/register">Inscription</a>
          </li>  
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Éole Blog
      
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">Blog</li>  
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">




<?php 
// require_once '../../../public/dump.php';
// var_dump($articles);
foreach ($articles as $article) { 
  // var_dump($article->id_article); die;
  ?>

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="<?php echo $article->getImg(); ?>" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title"><?php echo $article->getTitle(); ?></h2>
            <p class="card-text"><?php echo $article->getContent(); ?></p>
            <a href="/article/<?= $article->id_article?>" class="btn eole txt">Voir plus &rarr;</a>
          </div>
          <div class="card-footer text-muted">
          <p>ajouté le :<?php echo $article->getDate(); ?></p>
            <a href="#">Tom</a>
          </div>
        </div>

<?php } ?> 




        <!-- Blog Post -->


        <!-- Blog Post -->
        

        <!-- Pagination -->
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Avant</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Suivant &rarr;</a>
          </li>
        </ul>

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card mb-4">
          <h5 class="card-header">Recherche</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Recherche ...">
              <span class="input-group-btn">
                <button class="btn btn-secondary eole" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Catégories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Conception</a>
                  </li>
                  <li>
                    <a href="#">Developpement</a>
                  </li>
                  <li>
                    <a href="#">gestion de projet</a>
                  </li>
                </ul>
              </div>
              <!-- <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">JavaScript</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li>
                </ul>
              </div> -->
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Info !</h5>
          <div class="card-body">
            Voila les dernier articles qui on etait crée ;)
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Eole edenschool France  2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
