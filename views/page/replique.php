
///////////////////TEST///////////////////////
<h2>Tous les thés</h2>
<table>
    <tr>
        <th>Id</th>
        <th>Nom</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    <?= $table; ?> 
    <?= $table2; ?>
</table>
<span id="replique"></span>
//////////////////////////////////////////////////////

<div id="container">
    <!-- *** PARTIE : TXT AUDIO QUOTE ****-->
    <div class="row">
        <div id="quotesab" class="col-12">&#x275d;</div>

        <div id="hastasab" class="col-12">Hasta la vista Baby</div>
        <div id="videsab" class="col-2"></div>
        <figure id="audioHastasab" class="col-5">
            <audio controls muted loop controls type="audio/wav" src="public/audio/hasta-la-vista-baby-(2).wav"></audio>
        </figure>

        <div id="arnoldsab" class="col-5">Arnold Schwarzenegger</div>
    </div>
    <!-- ###  Fin DIV ROW ###-->

    <!-- *** FIN PARTIE : TXT AUDIO QUOTE ****-->
</div>
<!--###  Fin DIV CONTAINER  ###-->


<div class="wrapper">
    <div class="col audioRealTitre">
        <p class="realTitreTerminatorsab">
            James Cameron « Terminator 2 : Judgment Day » (1991)
        </p>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-40" src="public/images/bF-terminator.png" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-40" src="public/images/bF-terminator.png" alt="Second slide">
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

</div>
</div>


<div class="row">
    <div class="col">
        <img class="coeursab" style="width: 40px; height:auto;" src="public/images/boutons/boutonCoeurBlanc.png" alt="">
    </div>
    <div class="row">
        <img class="bullesab" style="width: 40px; height:auto;" src="public/images/boutons/bulleCommentaire.png" alt="">
    </div>

</div>