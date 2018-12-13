<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/registers/productCategories/index';

    export default {
        created() {
            this.$store.registerModule("stocks/registers/productCategories", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/registers/productCategories");
        }
    }
</script>

<style scoped>

</style>