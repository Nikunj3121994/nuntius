<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/reports/productBalance/index';

    export default {
        created() {
            this.$store.registerModule("stocks/reports/productBalance", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/reports/productBalance");
        }
    }
</script>

<style scoped>

</style>