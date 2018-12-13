<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/registers/warehouses/index';

    export default {
        created() {
            this.$store.registerModule("stocks/registers/warehouses", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/registers/warehouses");
        }
    }
</script>

<style scoped>

</style>