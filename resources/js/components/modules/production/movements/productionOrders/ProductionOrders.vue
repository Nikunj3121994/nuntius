<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/production/movements/productionOrders/index';

    export default {
        created() {
            this.$store.registerModule("production/movements/productionOrders", state);
        },
        destroyed() {
            this.$store.unregisterModule("production/movements/productionOrders");
        }
    }
</script>

<style scoped>

</style>