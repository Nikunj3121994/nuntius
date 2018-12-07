<template>
    <v-dialog v-model="value" persistent content-class="centered-dialog">
        <v-container fill-height v-model="value">
            <v-layout column justify-center align-center>
                <v-progress-circular indeterminate :size="100" :width="12" :color="progressColor"></v-progress-circular>
                <h1 v-if="message != null">{{message}}</h1>
            </v-layout>
        </v-container>
    </v-dialog>
</template>

<script>
    export default {
        data: function () {
            return {}
        },
        props: {
            value: {type: Boolean, default: false},
            message: {type: String, default: null},
            progressColor: {type: String, default: 'blue'},
        },
    }
</script>

<style>
    .dialog.centered-dialog,
    .v-dialog.centered-dialog {
        background: #282c2dad;
        box-shadow: none;
        border-radius: 6px;
        width: auto;
        color: whitesmoke;
    }
</style>