<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div id="app" class="p-3">
        <div class="row">
            <div class="col-6">
                <v-card :url="url" :ajax-url="ajaxUrl"></v-card>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.11"></script>
    <script src="/js/vue/v-card.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.2/axios.min.js"></script>
    <script>

        new Vue({
            el: '#app',
            data: {
                url: 'https://www.value-press.com/pressrelease/245407', // 該当URL
                ajaxUrl: '/api/card/generate'
            }
        });

    </script>
</body>
</html>