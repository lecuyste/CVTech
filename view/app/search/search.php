<section id="section1_recruteur" style="background: url('../public/asset/img/recruteur.jpg'); background-size:
cover;">

    <div class="background">
<h3 class="welcome">Bienvenue sur l'espace recruteurs,</h3>

<p class="consulting_cv">Consultez les CV des candidats facilement grâce à une interface personnalisée.</p>
        <div class="barre"></div>

<div class="wrap101">

    <h4 class="search">Rechercher un CV :</h4>
    <form method="get" action="search.php">
        <div class="city">
            <label for="ville">Où ?</label>
                <select name="search_select1" id="slim-select1" multiple>
                    <?php
                    foreach ($searchC as $searchCity) {
                        echo '<option>'.$searchCity->getCity().'</option>';
                    }?>
                </select>
        </div>
        <div class="where">
            <label for="keywords">Quoi ?</label>
                <select name="search_select2" id="slim-select2" multiple>

                    <?php foreach ($searchK as $searchKeywords) {
                        echo '<option>'.$searchKeywords->getKeywords().'</option>';
                    }?>
                </select>

        </div>
        <input id="search_submit" type="submit" name="submitted" value="Rechercher">

    </form>
</div>

    </div>
</section>