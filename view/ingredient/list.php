
<?php

foreach ($tab_i as $ingredient) {
    $prix = $ingredient->getPrixUnitaire();
    $nom = $ingredient->getNomIngredient();
    $unite = $ingredient->getUnite();
    $allergene = $ingredient->getAllergene();
    $id = rawurlencode($ingredient->getIdIngredient());
   // if(in_array($ingredient, ModelIngredient::selectAll())){

//echo '<div class = "produit">' . '<a href= "index.php?action=read&idpierre=' . rawurlencode($p->getIdPierre()) .'"><img src="' . $link . '"alt="id1" height=150px width=150px/><br><strong>' . $p->getNom() . " : " . $p->getPrix() . 'euros</strong></a></div>';

        echo '<div class="ingredient">
            <a href= "index.php?action=read&idpierre=' . $id . '"><strong>' . $nom . " : " . $prix . "€/ ". $unite . "</strong></a>"
        . '
        </div>';
    
//}
}
?>






<?= Session::is_admin() ? '<br><a class="addP" href="index.php?action=create" class="ajout"> Ajouter un nouveau produit </a>' : "" ?>




