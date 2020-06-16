</div>
        <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
        <script>
        new Vue({
        el: '#app',
        data () {
            return {
            info: {},
            display: true,
            }
        },
        mounted () {
            axios
            .get('https://public-api.tracker.gg/v2/apex/standard/profile/origin/brandish-sama',
            {
        headers: {
            "TRN-Api-Key": '26762c75-515c-41a4-a655-f1adb4dab739'
        }
        })
        .then(response => {this.info = response.data.data ; this.display = true})
        }
        })
        </script>
    </body>
</html>
