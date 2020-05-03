<div class="contenutemoignages">
    <div class="bannieretemoignages">
        <div class="couleur_banniere textebanniere">
            <p> Ressources</p>
        </div>
    </div>
    <h2 class="titreressource">Affiches promotionnelles de la campagne</h2>
    <div class="conteneuraffiches">
        <img class="affiche" src="./img/visuels/affiche1.jpg" onclick="ouvrirmodale(this.src);">
        <img class="affiche" src="./img/visuels/affiche2.jpg" onclick="ouvrirmodale(this.src);">
        <img class="affiche" src="./img/visuels/affiche3.jpg" onclick="ouvrirmodale(this.src);">
        <img class="affiche" src="./img/visuels/affiche4.jpg" onclick="ouvrirmodale(this.src);">
        <img class="affiche" src="./img/visuels/affiche5.jpg" onclick="ouvrirmodale(this.src);">
        <img class="affiche" src="./img/visuels/affiche6.jpg" onclick="ouvrirmodale(this.src);">
        <img class="affiche" src="./img/visuels/affiche7.jpg" onclick="ouvrirmodale(this.src);">
    </div>
    <div id="fenetremodale" class="modal" onclick="fermerfenetre();">
        <img src="#" id="imagemodale" alt="Apercu de la photo choisie">
    </div>
    <h2 class="titreressource">Flyer de la campagne</h2>
    <div class="conteneurflyer">
        <img class="flyer" src="./img/visuels/recto.jpg" onclick="ouvrirmodale(this.src);">
        <img class="flyer" src="./img/visuels/verso.jpg" onclick="ouvrirmodale(this.src);">
    </div>
    <h2 class="titreressource">Vidéos de la campagne</h2>
    <div class="conteneurvideos">
        <iframe class="videoyt" src="https://www.youtube.com/embed/eEfKzPVbFU0" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
        <iframe class="videoyt" src="https://www.youtube.com/embed/KHgWd7_Ys7A" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
        <iframe class="videoyt" src="https://www.youtube.com/embed/HjYQxis8KgU" frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
        </iframe>
    </div>
    <h2 class="titreressource">Presse</h2>
    <div class="conteneurpresse">
        <img class="affiche presse" src="./docs/communique.jpg" onclick="ouvrirmodale(this.src);">
        <div class="dossier_presse">
            <p>Le dossier de presse est téléchargeable <a class="lien lienpresse" href="./docs/dossier_de_presse.pdf" target="_blank">ici</a>.</p>
            <embed src=./docs/dossier_de_presse.pdf width="100%" type='application/pdf'/>
        </div>
    </div>
    <script src="js/script.js"></script>
</div>

