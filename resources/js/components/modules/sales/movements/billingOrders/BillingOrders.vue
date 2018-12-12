<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/sales/movements/billingOrders/index';

    export default {
        created() {
            this.$store.registerModule("sales/movements/billingOrders", state);
        },
        destroyed() {
            this.$store.unregisterModule("sales/movements/billingOrders");
        }
    }
</script>

<style scoped>

</style>