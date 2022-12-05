const { createApp } = Vue;

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            disks: [],
        };
    },
    methods: {
        getApi() {
            axios.get(this.apiUrl).then((result) => {
                this.disks = result.data;
            });
        },
    },
    mounted() {
        this.getApi();
    },
}).mount('#app');
