<?php

    include "inc/header.php"

?>
    <div class="stats" v-for="segment in info.segments" v-if="segment.metadata.name === 'Wattson'">
            <p>Personnage : {{segment.metadata.name}}</p>
            <img :src="segment.metadata.imageUrl">
            <h2>Statistiques sur la légende : {{segment.metadata.name}}</h2>
            <h3>Nombre de victimes :</h3>
            <p>{{segment.stats.kills.displayValue}} {{segment.stats.kills.displayName}}</p>
            <h3>Boucliers d'alliés chargés :</h3>
            <p>{{segment.stats.friendlyShieldsCharged.displayValue}} {{segment.stats.friendlyShieldsCharged.displayName}}</p>
            <h3>Nombres de victoires saison 2 :</h3>
            <p>{{segment.stats.season2Wins.displayValue}} {{segment.stats.season2Wins.displayName}}</p> 
    </div>
<?php

include "inc/footer.php"

?>