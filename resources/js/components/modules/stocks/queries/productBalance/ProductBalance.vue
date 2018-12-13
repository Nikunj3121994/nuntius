<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/queries/productBalance/index';

    export default {
        created() {
            this.$store.registerModule("stocks/queries/productBalance", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/queries/productBalance");
        }
    }
</script>

<style scoped>

</style>