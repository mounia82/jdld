<!--                    TITRES ACCUEIL -->


<h1 class="h1mimi"> J'AURAIS DU LUI DIRE . . .</h1>

<h2 class="h2mimi">"ETRE UN AS DE LA REPARTIE, N'A JAMAIS ETE AUSSI SIMPLE "</h2>

</div>

<div class="apresmenu">

</div>


<!--                      FLECHE ANIMEE -->

<a href="#apropos" title="Vous voulez savoir comment cela marche? Cliquez-ici !">
    <span class="arrow">
        <span></span>
        <span></span>
        <span></span>
    </span>
</a>



<?php


//  CODE POUR AFFICHER LA REPLIQUE

if (isset($_GET["categ"]) && isset($_GET["emotion"])) {
    echo " $table3  ";
}


?>
<!--                        PARTIE A PROPOS -->
<div class="toutlesite">

    <div class="sidebaricons">
        <a href="https://www.facebook.com/"> <i class="yes bi bi-facebook mb-3" style="color: rgb(253, 253, 252); padding:10px;"></i></a>
        <a href="https://www.instagram.com/"> <i class="bi bi-instagram pb-3" style="color: rgb(253, 253, 252); padding:10px;"></i></a>
        <a href="https://www.linkedin.com/"> <i class="bi bi-linkedin pb-3" stbyle="color: rgb(253, 253, 252);padding:10px; "></i></a>
    </div>
    <div class="apropos" id="apropos">
        <h2 class="aproposTexte">
            A propos
        </h2>


    </div>


    <!--  AFFICHES FILMS -->

    <div class="containerpq">
        <div class="h1Divpq" id="generateur">
            <h3 class="titre1pq">Avec qui avez-vous eu un différend? </h3>
            <!-- <a class="apq" href="?section=questionsuivante">question suivante </a> -->

            <div class="imageDivpq">

                <div><a href="?section=questionsuivante&categ=amis"><img class="imagepq" src="public/images/images1page/final/hangover2.jpg" alt=""></a></div>
                <div><img class="imagepq" src="public/images/images1page/final/Untitled-1.jpg" alt=""></div>
                <div><img class="imagepq" src="public/images/images1page/final/tuche22.jpg" alt=""></div>
                <div><img class="imagepq" src="public/images/images1page/final/work.jpg" alt=""></div>
                <div><img class="imagepq" src="public/images/images1page/final/autres.jpg" alt=""></div>
            </div>

        </div>

    </div>
    <!-- //////////////////////////////:test//////////////////////// -->
    <!-- <h2>Hey</h2>
    <table>
        <tr>
            <th>Id</th>
            <th>Nom</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
      
    </table> -->



    <!--  ICONS -->





    <!-- SOURIS LUMIERE -->


    <div class="light">
    </div>


    <!-- <script type="text/javascript">
        var pos = document.documentElement;
        pos.addEventListener('mousemove', e => {
            pos.style.setProperty('--x', e.clientX + 'px')
            pos.style.setProperty('--y', e.clientY + 'px')

        })
    </script> -->

















</div>