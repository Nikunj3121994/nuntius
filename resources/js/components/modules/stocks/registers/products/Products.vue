<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/registers/products/index';

    export default {
        created() {
            this.$store.registerModule("stocks/registers/products", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/registers/products");
        }
    }
</script>

<style scoped>

</style>