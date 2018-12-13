<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/movements/stockTransfer/index';

    export default {
        created() {
            this.$store.registerModule("stocks/movements/stockTransfer", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/movements/stockTransfer");
        }
    }
</script>

<style scoped>

</style>