<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/registers/businessUnits/index';

    export default {
        created() {
            this.$store.registerModule("financial/registers/businessUnits", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/registers/businessUnits");
        }
    }
</script>

<style scoped>

</style>