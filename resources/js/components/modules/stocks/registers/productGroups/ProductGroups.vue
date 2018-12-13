<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/registers/productGroups/index';

    export default {
        created() {
            this.$store.registerModule("stocks/registers/productGroups", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/registers/productGroups");
        }
    }
</script>

<style scoped>

</style>