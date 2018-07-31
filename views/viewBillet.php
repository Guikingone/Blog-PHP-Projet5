<?php $this->titre = "Mon Blog - " . $billet->getTitle(); ?>



<div class="container">
      <div class="alert alert-primary" role="alert">
        <div class="row">
          <div class="col-lg-12 col-md-10 mx-auto">
            <div class="post-preview">
            <h2 class="post-title">
            <?= $billet->getTitle() ?>
            </h2>
            <h3 class="post-subtitle">
            <?= $billet->getSubtitle() ?>
            </h3>
            <p><?= $billet->getContent() ?></p>
            <p class="post-meta">
            <?php echo 'Article de '.$billet->getAuthor().' le '.$billet->getCreation_date().' -- Modifié le '.$billet->getCreation_date() ?>
            </p>
            <p><small><a href="index.php?action=List">Retour à la liste d'articles</a></small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
<hr />

<div class="container">
   <div class="row">
     <div class="col-lg-12 col-md-10 mx-auto">
       <h2 class="title_center">Ecrire un commentaire</h2>
       <form action="index.php?action=commenter" method="post">
         <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label for="pseudo">Auteur</label>
             <input type="text" class="form-control" name="auteur" placeholder="Votre pseudo" id="pseudo" required data-validation-required-message="SVP Entrez votre pseudo.">
             <p class="help-block text-danger"></p>
           </div>
         </div>
         <div class="control-group">
           <div class="form-group floating-label-form-group controls">
             <label for="message">Commentaire</label>
             <textarea rows="5" class="form-control" name="contenu" placeholder="Message" id="message" required data-validation-required-message="SVP Entrez votre commentaire."></textarea>
             <p class="help-block text-danger"></p>
           </div>
         </div>
         <br>
         <div class="form-group">
            <input type="hidden" name="id" value="<?= $billet->getId() ?>" />
           <button type="submit" name="Commenter" class="btn btn-primary" id="sendMessageButton">Envoyer</button>
           <button type="reset" class="btn btn-danger" id="sendMessageButton">Effacer</button>
         </div>
       </form>

<div class="container">
   <div class="row">
     <div class="col-lg-12 col-md-10 mx-auto">
       <h2 class="title_center">Les commentaire</h2>
       <?php foreach($commentaires as $commentaire) : ?>
          <p><strong><?=$commentaire->getPseudo()  ?></strong> le <?= $commentaire->getCreation_date()  ?></p>
            <p><?=$commentaire->getContent()  ?></p>
            <hr>
              <?php endforeach; ?>
        </div>
      </div>
</div>

