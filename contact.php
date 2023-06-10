<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/png" href="/img/logo/icone-gite-des-echudes.jpg"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- CSS only -->
    <head>
        <script src="tarteaucitron/tarteaucitron.js"></script> 

        <script type="text/javascript">
        tarteaucitron.init({
    	  "privacyUrl": "", /* Privacy policy url */

    	  "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
    	  "cookieName": "tarteaucitron", /* Cookie name */
    
    	  "orientation": "middle", /* Banner position (top - bottom) */
       
          "groupServices": false, /* Group services by category */
                           
    	  "showAlertSmall": false, /* Show the small banner on bottom right */
    	  "cookieslist": false, /* Show the cookie list */
                           
          "closePopup": false, /* Show a close X on the banner */

          "showIcon": true, /* Show cookie icon to manage cookies */
          //"iconSrc": "", /* Optionnal: URL or base64 encoded image */
          "iconPosition": "BottomRight", /* BottomRight, BottomLeft, TopRight and TopLeft */

    	  "adblocker": false, /* Show a Warning if an adblocker is detected */
                           
          "DenyAllCta" : true, /* Show the deny all button */
          "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
          "highPrivacy": true, /* HIGHLY RECOMMANDED Disable auto consent */
                           
    	  "handleBrowserDNTRequest": false, /* If Do Not Track == 1, disallow all */

    	  "removeCredit": false, /* Remove credit link */
    	  "moreInfoLink": true, /* Show more info link */

          "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */
          "useExternalJs": false, /* If false, the tarteaucitron.js file will be loaded */

    	  //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for multisite */
                          
          "readmoreLink": "", /* Change the default readmore link */

          "mandatory": true, /* Show a message about mandatory cookies */
        });
        </script>
  </head>
  <body>
    <header>
      <div class="menuNav">
          <a title="Accueil" href="./index.html"><img class="menuNav--img" src="img/logo/gite-des-echudes.png" alt="logo du Gite des Echudes" ></a>
          <a href="index.html"><div class="menuNav--link menuNav--link_normal">Accueil</div></a>
          <a href="descriptif.html"><div class="menuNav--link menuNav--link_normal">Descriptif</div></a>
          <a href="situation.html"><div class="menuNav--link menuNav--link_normal">Situation</div></a>
          <a href="tarifs.html"><div class="menuNav--link menuNav--link_normal">Tarifs</div></a>
          <a href="a-visiter.html"><div class="menuNav--link menuNav--link_normal">A visiter</div></a>
          <a href="contact.php"><div class="menuNav--link menuNav--link_activ">Contact</div></a>
      </div>
    </header>

            <?php if(array_key_exists('errors', $_SESSION)): ?>
                <div class="alert alert-danger">
                    <?= implode('<br>', $_SESSION['errors']); ?>
            </div>
                <?php endif; ?>

            <?php if(array_key_exists('success', $_SESSION)): ?>
                <div class="alert alert-success bouton--alert">
                    Votre email a bien été envoyé
            </div>
            <?php endif; ?>

      <form id="basic-form" action="traitement_contact.php" method="POST">
        <div class="sectionContact">
          <div class="container">
            <div class="contact--box">
              <div class="row">
                <div class="col12 col-md-6 contact--box_formulaire">
                  <div class="row">
                    <div class="contact--box_text">
                      <div class="row">
                        <div class="col12 col-md-6">
                          <label class="contact--box_label contact--box_labelwhite" for="name">Votre nom : </label>
                          <input name="name" type="text" id="name" placeholder="Votre nom" class="form-control" value="<?= isset($_SESSION['inputs']['name']) ? $_SESSION['inputs']['name'] : ''; ?>">
                        </div>
                        <div class="col12 col-md-6">
                          <label class="contact--box_label contact--box_labelwhite" for="forname">Votre Prénom : </label>
                          <input name="forname" type="text" id="forname" placeholder="Votre prénom" class="form-control" value="<?= isset($_SESSION['inputs']['forname']) ? $_SESSION['inputs']['forname'] : ''; ?>">
                        </div>
                      </div>
                        <div class="col12 col-md-12">
                          <label class="contact--box_label contact--box_labelwhite" for="email">Votre email : </label>
                          <input type="email" id="email" name="email" placeholder="Saisir votre email" pattern = (\w\.?)+@[\w\.-]+\.\w{2,} required class="form-control" value="<?= isset($_SESSION['inputs']['email']) ? $_SESSION['inputs']['email'] : ''; ?>">
                        </div>
                        <div class="col12 col-md-12">
                          <label class="contact--box_label contact--box_labelwhite" for="subject">Objet de votre demande : </label>
                          <input type="text" id="subject" name="subject" placeholder="Saisir un objet" required class="form-control" value="<?= isset($_SESSION['inputs']['subject']) ? $_SESSION['inputs']['subject'] : ''; ?>">
                        </div>
                        <div class="col12 col-md-12">
                          <label class="contact--box_label contact--box_labelwhite" for="message">Votre commentaire : </label>
                          <textarea name="message" rows="10" cols="30" id="message" placeholder="Saisir votre demande" class="form-control" <?= isset($_SESSION['inputs']['message']) ? $_SESSION['inputs']['message'] : ''; ?>></textarea><br>
                          <input type="submit" name="formulaire" value="Envoyer" required class="btn btn-warning">
                        </div>
                    </div>           
                  </div>
                </div>
                <div class="col12 col-md-6 contact--box_image">
                  <img src="img/contact.png">
                </div>
              </div>
            </div>
          </div>
        </div>
      </form>
      <footer>
            <div class="information">
                <div class="information--obligatory">
                    <a href="./mentions-legales.html">Mentions légales </a>|
                    <a href="./polithique-de-confidentialite.html">Politique de confidentialité</a>
                </div>
                <div class="information--conception">
                    <div class="information--conception_image">
                        <a href="https://www.Prochainweb.com" target="_blank"><img src="img/Prochainweb.png"></a>
                    </div>
                    <div class="information--conception_text">
                        <p>Création de site web et services informatiques à domicile.</p>
                    </div>
                </div>
            </div>
        </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>
<?php
unset($_SESSION['inputs']);
unset($_SESSION['success']);
unset($_SESSION['errors']);
?>

 
