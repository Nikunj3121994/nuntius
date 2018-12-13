<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/movements/stockReservations/index';

    export default {
        created() {
            this.$store.registerModule("stocks/movements/stockReservations", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/movements/stockReservations");
        }
    }
</script>

<style scoped>

</style>