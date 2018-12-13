<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/production/registers/productStructures/index';

    export default {
        created() {
            this.$store.registerModule("production/registers/productStructures", state);
        },
        destroyed() {
            this.$store.unregisterModule("production/registers/productStructures");
        }
    }
</script>

<style scoped>

</style>