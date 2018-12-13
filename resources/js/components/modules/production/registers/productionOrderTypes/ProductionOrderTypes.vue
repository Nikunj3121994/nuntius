<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/production/registers/productionOrderTypes/index';

    export default {
        created() {
            this.$store.registerModule("production/registers/productionOrderTypes", state);
        },
        destroyed() {
            this.$store.unregisterModule("production/registers/productionOrderTypes");
        }
    }
</script>

<style scoped>

</style>