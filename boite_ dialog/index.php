<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- recommander -->
    <link href="css/bootstrap.min.css" rel="stylesheet"> 
    <script src="js/jquery-1.11.3.min.js"></script> 
    <script src="js/bootstrap.min.js"></script>


    <title>Boite dialogue</title>

</head>
<body>
<br>
<br>
<br>

<form    method="get">

<input type="text" name="me" required="">
<div> 
  <button  data-toggle="modal" href="#infos" name="submit" class="btn btn-success">OUVRIR</button>
 </div>

    
  
<!--------------------------------- boite dialogue ----------------------------->  

<div class="modal fade" id="infos"> 
<!-- c'est l'extention du type de boite de dialog -->
 <div class="modal-dialog ">    

 <!-- contenu du modal  -->
 <div class="modal-content">  

 <!-- l'entete -->
 <div class="modal-header">  

<button type="button" class="close" data-dismiss="modal">x</button> 

<h4 class="modal-title">Plus d'informations</h4>    
  </div>  


<!-- le corps du modal -->
<div class="modal-body">   
    
Le Tigre (Panthera tigris) est un mammifère carnivore de la famille des félidés...    


<!-- bouton de confirmation -->
<button class="btn btn-info"  name="oui"  >confirmer</button> 

</div>


<!-- le pied de notre boite de dialogue -->

 <div class="modal-footer"> 
  <button class="btn btn-info"  name="didier"  data-dismiss="modal">Fermer</button>
  
  <br>
  

</div>



</div>  
 </div> 


</div>


</form>

<br>
<br>

    
    
<!-- exemple 
 -->

<?php


// if(isset($_GET['oui'])){ 
// $text=$_GET['me']; 
// echo "je retour ".$text; 
// }

?>


</body>
</html>