<?php

    include "inc/header.php"

?>
    <div class="stats" v-for="segment in info.segments" v-if="segment.metadata.name === 'Revenant'">
            <p>Personnage : {{segment.metadata.name}}</p>
            <img :src="segment.metadata.imageUrl">
            <h2>Statistiques sur la légende : {{segment.metadata.name}}</h2>
            <h3>Nombre de victimes :</h3>
            <p>{{segment.stats.kills.displayValue}} {{segment.stats.kills.displayName}}</p>
            <h3>Nombre de victoires saison 4 :</h3>
            <p>{{segment.stats.season4Wins.displayValue}} {{segment.stats.season4Wins.displayName}}</p>
    </div>
<?php

include "inc/footer.php"

?>