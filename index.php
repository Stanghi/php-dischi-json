<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Dischi JSON</title>

    <!-- CDN Axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- CDN Vue.js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- CDN Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div id="app">
        <header>
            <div class="container">
                <img src="https://storage.googleapis.com/pr-newsroom-wp/1/2018/11/Spotify_Logo_CMYK_Green.png" alt="logo">
                <button @click="showAddDisk()" class="btn" type="button">
                    <p v-if="toggleAddDisk">CLOSE</p>
                    <p v-else>ADD DISK</p>
                </button>
            </div>
        </header>
        <main>
            <div class="container">
                <div v-show="toggleAddDisk" class="new-disk">
                    <input @keyup.enter="addDisk()" v-model.trim="diskTitle" type="text" placeholder="Inserisci il titolo di un nuovo disco">
                    <input v-if="diskTitle" @keyup.enter="addDisk()" v-model.trim="diskAuthor" type="text" placeholder="Inserisci autore">
                    <input v-if="diskAuthor" @keyup.enter="addDisk()" v-model.trim="diskYear" type="text" placeholder="Inserisci anno di uscita">
                    <input v-if="diskYear" @keyup.enter="addDisk()" v-model.trim="diskPoster" type="text" placeholder="Inserisci URL copertina">
                    <input v-if="diskPoster" @keyup.enter="addDisk()" v-model.trim="diskGenre" type="text" placeholder="Inserisci genere">
                    <button v-if="diskTitle" @click="addDisk()" class="btn" type="button">ADD</button>
                </div>
                <div v-for="(disk, index) in disks" :key="index" @click.stop="showDescription()" @click="getDescription(index)" class="card">
                    <i @click.stop="deleteDisk(index)" class="fa-solid fa-trash"></i>
                    <img :src="disk.poster" alt="disk.title">
                    <h3>{{disk.title}}</h3>
                    <p>{{disk.author}}</p>
                    <h4>{{disk.year}}</h4>
                </div>
            </div>
        </main>
    </div>
</body>

<script src="./main.js"></script>

</html>