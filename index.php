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



  <!-- DEBUT SCRIPT JS JQUERY -->


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
  </script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
  </script>

  <!-- FIN SCRIPT JS JQUERY-->



  <!-- DEBUT SCRIPT PARTICULE -->


  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib -->
  <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>

  <!-- FIN SCRIPT PARTICULE -->



  <!-- DEBUT SCRIPT TEXTILATE -->


  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.min.js"></script>  -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.6.1/jquery.lettering.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/textillate/0.4.0/jquery.textillate.js"></script>


  <!-- FIN SCRIPT TEXTILATE-->

  <script src="portfolio.js"></script>

  


                    <!-- FIN SCRIPT JS BOOTSTRAP -->


</body>

</html>