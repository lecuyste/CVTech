<div class="wrap101">
    <form method="get" action="search.php">
        <select name="search_select1" id="slim-select1" multiple>
            <?php
            foreach ($searchC as $searchCity) {
                echo '<option>'.$searchCity->getCity().'</option>';
            }?>
        </select>
        <select name="search_select2" id="slim-select2" multiple>

            <?php foreach ($searchK as $searchKeywords) {
                echo '<option>'.$searchKeywords->getKeywords().'</option>';
            }?>
        </select>
        <input id="search_submit" type="submit" name="submitted" value="Rechercher">

    </form>

</div>

