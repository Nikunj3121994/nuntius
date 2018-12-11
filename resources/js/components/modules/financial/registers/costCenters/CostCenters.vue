<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/registers/costCenters/index';

    export default {
        created() {
            this.$store.registerModule("financial/registers/costCenters", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/registers/costCenters");
        }
    }
</script>

<style scoped>

</style>