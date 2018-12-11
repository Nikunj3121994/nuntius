<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/reports/financialMovementsDetailed/index';

    export default {
        created() {
            this.$store.registerModule("financial/reports/financialMovementsDetailed", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/reports/financialMovementsDetailed");
        }
    }
</script>

<style scoped>

</style>