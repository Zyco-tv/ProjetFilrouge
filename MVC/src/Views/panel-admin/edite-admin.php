<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edite</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://spirit-tv.github.io/panel-admin.io/boostrap.min.css">
<link rel="stylesheet" href="https://spirit-tv.github.io/panel-admin.io/style.css">
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
    <!-- Vertical navbar -->
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
        <a href="/Dashboard" class="nav-link text-dark font-italic">
                  <i class="fa fa-th-large mr-3 eole-text fa-fw"></i>
                  Home
              </a>
      </li>
      <li class="nav-item">
        <a href="Article" class="nav-link text-dark font-italic">
                  <i class="fa fa-address-card mr-3 eole-text fa-fw"></i>
                  Article
              </a>
      </li>
      <li class="nav-item">
        <a href="Signalement" class="nav-link text-dark font-italic">
                  <i class="fa fa-flag mr-3 eole-text fa-fw"></i>
                  Signale
              </a>
      </li>
      <li class="nav-item">
        <a href="User" class="nav-link text-dark font-italic bg-light">
                  <i class="fa fa-user mr-3 eole-text fa-fw"></i>
                  User
              </a>
      </li>
    </ul>
  </div>
  <div class="page-content p-5" id="content">
    <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>

    <h1>Nom de l'utilisateur</h1>
          <hr>
        <div class="row">

          <div class="col-md-3">
          </div>
        
          <div class="col-md-9 personal-info">
            
            <h3>Info du compte</h3>
            <form class="form-horizontal" role="form"  action="/Dashboard/User/<?php echo $id_user;?>/edit/done" method="post">
              <div class="form-group">
                <label class="col-lg-3 control-label">Pseudo:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" value="<?php echo $profil->getName();?>" name="pseudo">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-3 control-label">Email:</label>
                <div class="col-lg-8">
                  <input class="form-control" type="text" value="<?php echo $profil->getMail();?>" name="mail">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label"></label>
                <div class="col-md-8">
                  <button type="submit">Enregister</button>
                  <span></span>
                  <input type="reset" href="/Dashboard/User" class="btn btn-default" value="Annuler">
                </div>
              </div>
            </form>
          </div>
      </div>
      <hr>
  
</body>
</html>