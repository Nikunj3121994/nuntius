<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/production/registers/productionOrderFinalizationTypes/index';

    export default {
        created() {
            this.$store.registerModule("production/registers/productionOrderFinalizationTypes", state);
        },
        destroyed() {
            this.$store.unregisterModule("production/registers/productionOrderFinalizationTypes");
        }
    }
</script>

<style scoped>

</style>