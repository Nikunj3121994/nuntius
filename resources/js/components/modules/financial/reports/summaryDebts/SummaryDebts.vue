<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/reports/summaryDebts/index';

    export default {
        created() {
            this.$store.registerModule("financial/reports/summaryDebts", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/reports/summaryDebts");
        }
    }
</script>

<style scoped>

</style>