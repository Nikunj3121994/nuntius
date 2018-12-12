<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/sales/comissions/comissionsCalculation/index';

    export default {
        created() {
            this.$store.registerModule("sales/comissions/comissionsCalculation", state);
        },
        destroyed() {
            this.$store.unregisterModule("sales/comissions/comissionsCalculation");
        }
    }
</script>

<style scoped>

</style>