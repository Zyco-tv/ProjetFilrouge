<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Edite article</title>
  <link rel="stylesheet" href="../../css/edite.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">  
  <form id="contact" action="/article/edit" method="post">
    <h3>Edit Article</h3>
    <h4>Ici tu peux édite ton article</h4>
    <fieldset>
      <input placeholder="Titre" type="text" tabindex="1" value="<?php echo $article['title'] ?>" required autofocus>
    </fieldset>
    <fieldset>
      <textarea placeholder="ton article" tabindex="5" value="" required><?php echo $article['content'] ?></textarea>
    </fieldset>
    <fieldset>
      <input placeholder="liens d'une image" type="text" tabindex="1" name="img" value="<?php echo $article['img']?>" autofocus>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" value="" data-submit="...Sending">Envoyer</button>
    </fieldset>
  </form>
</div>
<!-- partial -->
  
</body>
</html>