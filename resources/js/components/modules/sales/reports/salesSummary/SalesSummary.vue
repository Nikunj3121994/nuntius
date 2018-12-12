<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/sales/reports/salesSummary/index';

    export default {
        created() {
            this.$store.registerModule("sales/reports/salesSummary", state);
        },
        destroyed() {
            this.$store.unregisterModule("sales/reports/salesSummary");
        }
    }
</script>

<style scoped>

</style>