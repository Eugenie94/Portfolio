<!DOCTYPE html>
<html lang="fr">

                    <!-- DEBUT HEAD -->

<?php require 'head.php'; ?>

                    <!-- FIN HEAD -->
<body>


                    <!-- DEBUT HEADER -->

<?php require 'header.php'; ?>

                    <!-- FIN HEADER -->



                    <!-- DEBUT CONTENU -->


  <div id="particles-js">

    <div class="parent1-texte">
      <div class="parent-texte d-flex flex-column">
        <span class="titre tx">Eugénie KHAYAT</span>
        <span class="sous-titre tx">Stage Développeuse Web FullStack</span>
        <span class="phrase-qualite tx">La qualité, mon métier.</span>
      </div>
    </div>
      <!-- <span class="titre" data-in-effect="fadeInDown" data-out-effect="fadeOutDown">Eugénie KHAYAT</span>
      <span class="sous-titre titre"> Développeuse Web FullStack</span>
      <span class="phrase-qualite titre">La qualité, mon métier</span> -->
<!--        A PARTIR DE LA C EST MON ANCIENNE VERSION AVEC LES MEDIA QUERIES QUI SE TROUVE DANS MEDIA QUERIES.CSS
   <div class="row">
    <div class="col-lg-12">
      <span class="titre">Eugénie KHAYAT</span>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <span class="sous-titre titre">Développeuse Web FullStack</span>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      <span class="phrase-qualite titre">La qualité, mon métier</span>
    </div>
  </div> -->

  <!-- <div class="d-flex flex-column">
    <div class="p-2">
      <span class="titre">Eugénie KHAYAT</span>
    </div>
    <div class="p-2">
      <span class="sous-titre titre">Développeuse Web FullStack</span>
    </div>
    <div class="p-2">
      <span class="phrase-qualite titre">La qualité, mon métier</span>
    </div>
  </div> -->
                  

  </div>



                    <!-- FIN CONTENU -->


                    <!-- DEBUT FOOTER-->

<?php require 'footer.php'; ?>

                    <!-- FIN FOOTER -->


                    <!-- DEBUT POP UP JS QUE JE N UTILISERAI PAS -->

  
 <button type="button" id="btn-click" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" style="display: none;">Large modal</button>

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="card">  
          <div class="card-body">
            <h5 class="card-title">Portfolio en cours de construction!&nbsp;&nbsp;&nbsp;<i class="far fa-smile-wink"></i></h5>
          </div>
        </div>
      </div>
    </div>
  </div>   


                    <!-- FIN POP UP JS -->


                    <!-- DEBUT SCRIPT JS BOOTSTRAP --> 
                    
<?php require 'script.php'; ?>

                    <!-- FIN SCRIPT JS BOOTSTRAP -->


</body>

</html>