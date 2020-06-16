<?php

    include "inc/header.php"

?>
    <div class="stats" v-for="segment in info.segments" v-if="segment.metadata.name === 'Pathfinder'">
            <p>Personnage : {{segment.metadata.name}}</p>
            <img :src="segment.metadata.imageUrl">   
            <h2>Statistiques sur la légende : {{segment.metadata.name}}</h2>
            <h3>Nombre de victimes en tant que leader :</h3>
            <p>{{segment.stats.carePackageKills.displayValue}} {{segment.stats.carePackageKills.displayName}}</p>
            <h3>Nombre d'utilisation de la tyrolienne par les alliés :</h3>
            <p>{{segment.stats.ziplineTimesUsedBySquad.displayValue}} {{segment.stats.ziplineTimesUsedBySquad.displayName}}</p>
            <h3>Nombre de victoires saison 2 :</h3>
            <p>{{segment.stats.season2Wins.displayValue}} {{segment.stats.season2Wins.displayName}}</p>
    </div>
<?php

include "inc/footer.php"

?>