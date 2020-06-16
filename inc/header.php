<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css.css">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
    <body>
        <div id="app" v-if="display">
            <div >
                <h1 class="menu">Profil de : {{info.platformInfo.platformUserId}}</h1>            
            </div>
            <div class="menu"><a class="boutons" href="index.php">Loba</a><a class="boutons" href="wattson.php">Wattson</a><a class="boutons" href="revenant.php">Revenant</a><a class="boutons" href="pathfinder.php">Pathfinder</a><a class="boutons" href="caustic.php">Caustic</a></div>