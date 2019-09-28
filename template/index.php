<!-- Bootstrap core CSS -->

<?php

$cuadro_1  = array("https://source.unsplash.com/ZI6p3i9SbVU/500x350","Miembro 1","Puesto" );

$cuadro_2  = array("https://source.unsplash.com/sNut2MqSmds/500x350","Miembro 2","Puesto" );
$cuadro_3  = array("https://source.unsplash.com/TMgQMXoglsM/500x350","Miembro 3","Puesto" );
$cuadro_4  = array("https://source.unsplash.com/9UVmlIb0wJU/500x350","Miembro 4","Puesto" );
function cuadros($valor) {
    

    echo "<div class='col-xl-3 col-md-6 mb-4'>";
     echo "<div class='card border-0 shadow'>";
       
    
       echo '<img src='.$valor[0].' class="card-img-top" alt="...">';
     



       echo '<div class="card-body text-center">';
        echo ' <h5 class="card-title mb-0">'.$valor[1].'</h5>';
        echo  '<div class="card-text text-black-50">'.$valor[2].'</div>';
       echo "</div>";
      echo "</div>";
    echo "</div>";
}
?>


<link href="css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap core JavaScript -->
<script src="js/jquery.slim.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Header -->
<header class="bg-primary text-center py-5 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white">Meet the Team</h1>
  </div>
</header>

<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
    <?php
    
    /*echo "<div class='col-xl-3 col-md-6 mb-4'>";
     echo "<div class='card border-0 shadow'>";
       
    
       echo  "<img src=".$cuadro_1[0]." class='card-img-top' alt='...'>";
     



       echo '<div class="card-body text-center">';
        echo ' <h5 class="card-title mb-0">'.$cuadro_1[1].'</h5>';
        echo  '<div class="card-text text-black-50">'.$cuadro_1[2].'</div>';
       echo "</div>";
      echo "</div>";
    echo "</div>";
    ?>
    <!-- Team Member 2 -->
    <?php
    echo "<div class='col-xl-3 col-md-6 mb-4'>";
     echo "<div class='card border-0 shadow'>";
       
    
       echo  "<img src=".$cuadro_2[0]." class='card-img-top' alt='...'>";
     



       echo '<div class="card-body text-center">';
        echo ' <h5 class="card-title mb-0">'.$cuadro_2[1].'</h5>';
        echo  '<div class="card-text text-black-50">'.$cuadro_2[2].'</div>';
       echo "</div>";
      echo "</div>";
    echo "</div>";
    ?>
    <!-- Team Member 3 -->
    <?php
    echo "<div class='col-xl-3 col-md-6 mb-4'>";
     echo "<div class='card border-0 shadow'>";
       
    
       echo  "<img src=".$cuadro_3[0]." class='card-img-top' alt='...'>";
     



       echo '<div class="card-body text-center">';
        echo ' <h5 class="card-title mb-0">'.$cuadro_3[1].'</h5>';
        echo  '<div class="card-text text-black-50">'.$cuadro_3[2].'</div>';
       echo "</div>";
      echo "</div>";
    echo "</div>";
    ?>
    <!-- Team Member 4 -->
    <?php
    echo "<div class='col-xl-3 col-md-6 mb-4'>";
     echo "<div class='card border-0 shadow'>";
       
    
       echo  "<img src=".$cuadro_4[0]." class='card-img-top' alt='...'>";
     



       echo '<div class="card-body text-center">';
        echo ' <h5 class="card-title mb-0">'.$cuadro_4[1].'</h5>';
        echo  '<div class="card-text text-black-50">'.$cuadro_4[2].'</div>';
       echo "</div>";
      echo "</div>";
    echo "</div>";*/
    cuadros($cuadro_1);
    cuadros($cuadro_2);
    cuadros($cuadro_3);
    cuadros($cuadro_4);
    ?>
  </div>
  <!-- /.row -->

</div>
<!-- /.container -->