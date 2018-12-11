<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/materials/imports/importProcess/index';

    export default {
        created() {
            this.$store.registerModule("materials/imports/importProcess", state);
        },
        destroyed() {
            this.$store.unregisterModule("materials/imports/importProcess");
        }
    }
</script>

<style scoped>

</style>