const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            disks: [],
            diskTitle: '',
            diskAuthor: '',
            diskYear: '',
            diskPoster: '',
            diskGenre: '',
            toggleAddDisk: false,
        };
    },
    methods: {
        getApi() {
            axios.get(this.apiUrl).then((result) => {
                this.disks = result.data;
            });
        },

        addDisk() {
            if (this.diskTitle != '') {
                const data = {
                    diskTitle: this.diskTitle,
                    diskAuthor: this.diskAuthor,
                    diskYear: this.diskYear,
                    diskPoster: this.diskPoster,
                    diskGenre: this.diskGenre,
                };

                axios
                    .post(this.apiUrl, data, {
                        headers: { 'Content-Type': 'multipart/form-data' },
                    })
                    .then((result) => {
                        this.diskTitle = '';
                        this.diskAuthor = '';
                        this.diskYear = '';
                        this.diskPoster = '';
                        this.diskGenre = '';
                        this.disks = result.data;
                    });
            }
        },

        deleteDisk(index) {
            if (confirm("Confermi l'eliminazione?")) {
                const data = new FormData();
                data.append('deleteDisk', index);

                axios.post(this.apiUrl, data).then((result) => {
                    this.disks = result.data;
                });
            }
        },

        showAddDisk() {
            this.toggleAddDisk = !this.toggleAddDisk;
        },
    },
    mounted() {
        this.getApi();
    },
}).mount('#app');
