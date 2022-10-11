<?php
$_specs = array(
    "Processeur" => "AMD Ryzen 7 4800H", 
    "Carte graphique" => '"17,3" (43,9 cm) - Mémoire vive (RAM) : 16 Go"',
    "Stockage" => "SSD 512 Go (en PCi-Express)",
    "Prix" => 1299.99
);
   $_produit = [
            "IMG" => "./asset/4711081597780_h_f_l_0.webp",
            "Nom" => "PC Gamer Asus A17-TUF706IE-HX030W",
            "Desc" => "Châssis plus compact et léger mais présente une autonomie plus importante.",
            "specs" => $_specs
    ];
    // print "<p>";
    // print_r($_produit);
    // print "</p>";
    $_button = '<button tabindex="0"  aria-label="shopping">
    <span class="material-symbols-outlined">
        shopping_cart
    </span> 
     <div>
        Ajouter au panier
     </div>
    </button>';

print '<img src="'.$_produit["IMG"].'" alt="imagepc">
    <figcaption>
        <h2>'.$_produit["Nom"].'</h2>
                    <p>'.$_produit["Desc"].'</p>
                    <ul>
    ';
foreach($_specs as $_key => $_value){
    print '<li><h3>'.$_key.'</h3> : '.$_value.'</li>';
    }
                    
print '</ul>'.$_button.'</figcaption>';

?>
   