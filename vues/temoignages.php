<div class="contenutemoignages">
    <div class="bannieretemoignages">
        <div class="couleur_banniere textebanniere">
            <p> Sur cette page, vous pouvez lire des témoignages d'autres victimes de harcèlement. Ils
            peuvent aussi vous aider à identifier le type de harcèlement dont vous avez été victime.</p>
        </div>
    </div>
    <div class="temoignage">
        <div class="partiegauche">

            <?php
            if (!isset($_SESSION['id'])){
                echo '<p>Merci de vous inscrire ou de vous identifier pour pouvoir poster un témoignage</p>';
            }else{
                echo '<p>Souhaitez-vous témoigner ?</p>';
                echo '<a href="index.php?action=poster">';
                echo '<div class="bouton rediger">';
                echo '<p>Rédiger maintenant</p>';
                echo '</div></a>';
            }
            ?>
        </div>
        <div class="partiedroite">
            <div class="filtres">
                <div class="filtreviolet filter-button active" data-filter="tous"><p>Tous</p><div class="selecteur"></div></div>
                <div class="filtreviolet filter-button" data-filter="Scolaire"><p>Harcèlement scolaire</p><div class="selecteur"></div></div>
                <div class="filtreviolet filter-button" data-filter="Professionnel"><p>Harcèlement professionnel</p><div class="selecteur"></div></div>
                <div class="filtreviolet filter-button" data-filter="Cyber"><p>Cyber-harcèlement</p><div class="selecteur"></div></div>
                <div class="filtreviolet filter-button" data-filter="Sexuel"><p>Harcèlement sexuel</p><div class="selecteur"></div></div>
            </div>
            <div class="listeposts">
                <?php
                $sql = "SELECT *, DATE_FORMAT(dateEcrit, '%d/%m/%Y') AS dateEcritFormate FROM ecrit ORDER BY id DESC";
                $query = $pdo -> prepare($sql);
                $query->execute();
                $count = $query->rowCount();
                if($count == 0){
                    echo 'Aucun témoignage n\'a été trouvé...';
                }else{
                    while($line = $query->fetch()){
                        $id=$line['id'];
                        $contenu=$line['contenu'];
                        $categorie = $line['categorie'];
                        $dateEcrit = $line['dateEcritFormate'];
                        if (isset($_SESSION['admin']) && $_SESSION['admin']=="1" && $line['visible']==0){
                            echo '<div class="post filter '.$categorie.'"><div class="illustrationpost"></div><div class="contenupost">';
                            echo "<form method='POST' action='index.php?action=acceptertemoignage'><input name='id' value='$id' type='hidden'>";
                            echo "<div class='titrefiltre'>
                            <select name='categorie'>
                             <option selected value='Scolaire'>Scolaire</option>
                             <option value='Professionnel'>Professionnel</option>
                             <option value='Cyber'>Cyber</option>
                             <option value='Sexuel'>Sexuel</option>
                            </select></div>";
                            echo "<div class='datepublication'>Publié le $dateEcrit</div>";
                            echo '<div class="apercu">"'.substr($contenu, 0, 25).' ..."</div>';
                            echo '<a href="index.php?action=temoignage&id='.$line['id'].'"><div class="continuerlecture">continuer la lecture...</div></a>';
                            echo '<input type="submit" value="Accepter"></form>';
                            echo '<form method="POST" action="index.php?action=supprimertemoignage">';
                            echo "<input name='id' value='$id' type='hidden'>";
                            echo '<input type="submit" value="Supprimer"></form>';
                            echo '</div></div>';
                        }else{
                            if($line['visible']=="1"){
                                echo '<div class="post filter '.$categorie.'"><div class="illustrationpost"></div><div class="contenupost">';
                                echo "<div class='titrefiltre'>$categorie</div>";
                                echo "<div class='datepublication'>Publié le $dateEcrit</div>";
                                echo '<div class="apercu">"'.substr($contenu, 0, 25).' ..."</div>';
                                echo '<a href="index.php?action=temoignage&id='.$line['id'].'"><div class="continuerlecture">continuer la lecture...</div></a>';
                                if($_SESSION['admin'] == "1"){
                                    echo '<form method="POST" action="index.php?action=supprimertemoignage">';
                                    echo "<input name='id' value='$id' type='hidden'>";
                                    echo '<input type="submit" value="Supprimer"></form>';
                                }
                                echo '</div></div>';
                            }

                        }


                    }
                }

                ?>
            </div>
        </div>
    </div>
</div>

