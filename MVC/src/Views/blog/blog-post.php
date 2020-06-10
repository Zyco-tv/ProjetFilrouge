<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Article</title>

  <!-- Bootstrap core CSS -->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->  
  <link rel="stylesheet" href="https://spirit-tv.github.io/panel-admin.io/boostrap.min.css">
<link rel="stylesheet" href="https://spirit-tv.github.io/panel-admin.io/style.css">

</head>

<style>
.card{
  margin-left:0px;
  width: 100%;
}
</style>

<body>

  <!-- Navigation -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark eole fixed-top">
    <div class="container">
      <a class="navbar-brand" href="/article">Éole</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link" href="/article/create">Créer un article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/login">Deconnexion</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3"> 
      <small>
        <a href="#"><?php echo $article['title'] ?></a>
      </small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item">
        <a href="blog-home.php">Blog</a>
      </li>
      <li class="breadcrumb-item active">Article </li>
    </ol>

    <div class="row">

      <!-- Post Content Column -->
      <div class="col-lg-8">

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="<?php echo $article['img'] ?>" alt="">

        <hr>

        <!-- Date/Time -->
        <p>créé le : <?php echo $article['created_at'] ?></p>

        <hr>

        <!-- Post Content -->
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam totam deleniti dolores voluptate, sapiente recusandae, atque nobis sit placeat molestiae earum aut tempore et dolorum in aperiam quia ea similique.
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, id? Itaque rerumuijikjjuj!ujujujhj,j, nhj,jjjjuuuvoluptatem iure doloremque accusantium quis eaque eum, earum porro voluptate eos incidunt? Deserunt qui obcaecati asperiores labore non!
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt iusto cum mollitia. Unde, nostrum. Ullam excepturi laudantium molestias dolore dolorem voluptas est recusandae. Assumenda, excepturi fuga! Optio earum ex inventore?
        </p>

        <hr>

        <!-- Comments Form -->

        <form action="/article/comment/<?= $article ["id_article"]?>" method="post">
        <div class="card my-4">
          <h5 class="card-header">Mettre un commentaire:</h5>
          <div class="card-body">
            <form>
              <div class="form-group">
                <textarea class="form-control" rows="3" name="text"></textarea>
              </div>
              <button type="submit" name="submit" class="btn txt eole">Envoyer</button>
            </form>
          </div>
        </div>
        </form>

        <!-- Single Comment -->
        <?php foreach ($articles as $article) { ?>
        <div class="media mb-4">
          <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
          <div class="media-body">
            <h5 class="mt-0">Pseudo</h5>
            <?php echo $article->getText();?>
            </div>
        </div>
        <?php } ?>

        <!-- Comment with nested comments -->
      

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Catégories</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">Developpement</a>
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

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
