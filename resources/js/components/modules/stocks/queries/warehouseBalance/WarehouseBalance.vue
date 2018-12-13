<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/queries/warehouseBalance/index';

    export default {
        created() {
            this.$store.registerModule("stocks/queries/warehouseBalance", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/queries/warehouseBalance");
        }
    }
</script>

<style scoped>

</style>