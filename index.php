<?php

    include "inc/header.php"

?>

        <div class="stats" v-for="segment in info.segments" v-if="segment.metadata.name === 'Loba'">
            <p>Légende Principal : {{segment.metadata.name}}</p>
            <img :src="segment.metadata.imageUrl">
            <h2>Statistiques sur la légende : {{segment.metadata.name}}</h2>
            <h3>Nombre de victimes :</h3>
            <p>{{segment.stats.kills.displayValue}} {{segment.stats.kills.displayName}}</p>
            <h3>Mètres parcourus en téléportation :</h3>
            <p>{{segment.stats.tacticalMetersTeleported.displayValue}} {{segment.stats.tacticalMetersTeleported.displayName}}</p>
            <h3>Butin de l'utlime ramassé par les alliés :</h3>
            <p>{{segment.stats.ultimateLootTakenByAllies.displayValue}} {{segment.stats.ultimateLootTakenByAllies.displayName}}</p>
        </div>
            <!-- <pre>{{info}}</pre> -->
       
<?php

include "inc/footer.php"

?>