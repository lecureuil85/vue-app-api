<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    </head>
    <header></header>
    <body>
        <div id="app">
            {{ info }}
        </div>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
        new Vue({
        el: '#app',
        data () {
            return {
            info: null
            }
        },
        mounted () {
            axios
            .get('https://public-api.tracker.gg/v2/apex/standard/profile/origin/brandish-sama',
            {
        headers: {
            'TRN-API-KEY': '26762c75-515c-41a4-a655-f1adb4dab739'
        }
        })
        .then(response => (this.info = response))
        .catch(error => console.log(error))
        }
        })
        </script>
    </body>
</html>
