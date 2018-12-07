<template>
    <v-card>
        <v-btn @click.stop="test">Click</v-btn>
    </v-card>
</template>

<script>
    export default {
        methods: {
            test(){
                this.$http.get('/test').then((payload) => {
                    console.log(payload);
                })
            }
        }
    }
</script>