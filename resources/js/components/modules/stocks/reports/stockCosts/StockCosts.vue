<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/reports/stockCosts/index';

    export default {
        created() {
            this.$store.registerModule("stocks/reports/stockCosts", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/reports/stockCosts");
        }
    }
</script>

<style scoped>

</style>