<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/menu.css">
<link rel="stylesheet" href="https://spirit-tv.github.io/panel-admin.io/style.css">
<link href="https://spirit-tv.github.io/panel-admin.io/boostrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<script type="text/javascript">
$(function() {
  $('#sidebarCollapse').on('click', function() {
    $('#sidebar, #content').toggleClass('active');
  });
});

</script>
</head>
<body>
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
      <div class="media d-flex align-items-center"><img src="https://image.noelshack.com/fichiers/2020/24/2/1591703070-logo.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
          <h4 class="m-0">Nom de L'admin</h4>
          <p class="font-weight-light text-muted mb-0">Role</p>
        </div>
      </div>
    </div>
  
    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Main</p>
  
    <ul class="nav flex-column bg-white mb-0">
      <li class="nav-item">
        <a href="/Dashboard" class="nav-link text-dark font-italic bg-light">
                  <i class="fa fa-th-large mr-3 eole-text fa-fw"></i>
                  Home
              </a>
      </li>
      <li class="nav-item">
        <a href="/Dashboard/Article" class="nav-link text-dark font-italic">
                  <i class="fa fa-address-card mr-3 eole-text fa-fw"></i>
                  Article
              </a>
      </li>
      <li class="nav-item">
        <a href="/Dashboard/Signalement" class="nav-link text-dark font-italic">
                  <i class="fa fa-flag mr-3 eole-text fa-fw"></i>
                  Signale
              </a>
      </li>
      <li class="nav-item">
        <a href="/Dashboard/User" class="nav-link text-dark font-italic">
                  <i class="fa fa-user mr-3 eole-text fa-fw"></i>
                  User
              </a>
      </li>
    </ul>
  </div>
  
  <div class="page-content p-5" id="content">
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
  
    <h1>Home panel admin</h1>
          <hr>
          <h2>Dernier articles</h2>
        <div class="row">
        <?php foreach ($archives as $archive) { ?>
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Date de l'article</div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $archive->getTitle();?></h5>
                  <p class="card-text"><?php echo $archive->getContent();?></p>
                </div>
              </div>
             
            </div>
          <?php } ?>
      <hr>
      <h2>Dernier Signalement</h2>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <tr class="table-header">
                      <th class="cell">ID</th>
                        <th class="cell">Name</th>
                        <th class="cell">Username</th>
                        <th class="cell">Email</th>
                    </tr>
                    <tr  class="active">
                        <td>1</td>
                        <td>Smith</td>
                        <td>Smith Mark</td>
                        <td>mark@gmail.com</td>

                    </tr>
                    <tr class="success">
                        <td>2</td>
                        <td>Smith Mark</td>
                        <td>Smith</td>
                        <td>marksmith@gmail.com</td>
                    </tr>
                    <tr  class="active">
                        <td>3</td>
                        <td>Willson</td>
                        <td>Will</td>
                        <td>will34@gmail.com</td>
                    </tr>
                    <tr class="danger">
                        <td>4</td>
                        <td>Jacob</td>
                        <td>Jacob Thornton</td>
                        <td>Jacob@gmail.com</td>
                    </tr>
                    <tr  class="active">
                        <td>5</td>
                        <td>Larry</td>
                        <td>Larry  Bird</td>
                        <td>BirdLarry@gmail.com</td>
                    </tr>
                </table>
            </div>
          </div>
      <hr>
      <h2>Dernier User crée</h2>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                
                    <tr class="table-header">
                        <th class="cell">ID</th>
                        <th class="cell">Name</th>
                        <th class="cell">Mail</th>
                        <th class="cell">Date</th>
                    </tr>
                    
                    <?php foreach ($utilisateurs as $utilisateur) { ?>
                    <tr  class="active">
                        <td>1</td>
                        <td><?php echo $utilisateur->getName();?></td>
                        <td><?php echo $utilisateur->getMail();?></td>
                        <td><?php echo $utilisateur->getDate();?></td>

                    </tr>
                    <?php } ?>
                </table>
            </div>
          </div>
      <hr>


</body>
</html>