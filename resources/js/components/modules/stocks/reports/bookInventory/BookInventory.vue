<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/reports/bookInventory/index';

    export default {
        created() {
            this.$store.registerModule("stocks/reports/bookInventory", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/reports/bookInventory");
        }
    }
</script>

<style scoped>

</style>