<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/movements/manualStockOuts/index';

    export default {
        created() {
            this.$store.registerModule("stocks/movements/manualStockOuts", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/movements/manualStockOuts");
        }
    }
</script>

<style scoped>

</style>