<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi JSON</title>

    <!--CDN Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--CDN Vue.js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>

<body>
    <header>
        <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_Green.png" alt="logo">
    </header>
    <main>
        <div id="app">
            <div class="container">
                <div v-for="(disk, index) in disks" class="card">
                    <img :src="disk.poster" alt="disk.title">
                    <h3>{{disk.title}}</h3>
                    <p>{{disk.author}}</p>
                    <h4>{{disk.year}}</h4>
                </div>
            </div>
        </div>
    </main>
</body>

<script src="./main.js"></script>

</html>