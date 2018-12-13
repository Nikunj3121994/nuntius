<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/registers/productBatches/index';

    export default {
        created() {
            this.$store.registerModule("stocks/registers/productBatches", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/registers/productBatches");
        }
    }
</script>

<style scoped>

</style>