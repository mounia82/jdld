<div class="containerpq">
    <div class="h1Divpq">
        <h3 class="titre1pq">Quelle émotion avez-vous ressenti? </h3>
        <!-- <a class="apq" href="?section=accueil"> question précédente</a> -->
    </div>
    <div class="light">
    </div>
    
    <script type="text/javascript">
        var pos = document.documentElement;
        pos.addEventListener('mousemove', e =>{
            pos.style.setProperty('--x', e.clientX + 'px')
            pos.style.setProperty('--y', e.clientY + 'px')

        })
    </script>
    <!-- 
        Joie
        Tristesse -- 
        Surprise --
        Peur --
        Colère --
        Dégoût --
        Mépris  -->

    <div class="imageDivpq">

        <div><a href="<?= $_SERVER["PHP_SELF"] ?>?categ=<?= $_GET["categ"]?>&emotion=colere#replique"><img class="imagepq" src="public/images/images2page/killbill.jpg" alt=""></a></div>
        <div><img class="imagepq" src="public/images/images2page/oldboy.jpg" alt=""></div>
        <div><img class="imagepq" src="public/images/images2page/seven.jpg" alt=""></div>
        <div><img class="imagepq" src="public/images/images2page/joker.jpg" alt=""></div>
        <div><img class="imagepq" src="public/images/images2page/greenmile.jpg" alt=""></div>
        <div><img class="imagepq" src="public/images/images2page/intouchables.jpg" alt=""></div>
        <div><img class="imagepq" src="public/images/images2page/shining.jpg" alt=""></div>
    </div>

</div>
