<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/sales/reports/comissionsQuery/index';

    export default {
        created() {
            this.$store.registerModule("sales/reports/comissionsQuery", state);
        },
        destroyed() {
            this.$store.unregisterModule("sales/reports/comissionsQuery");
        }
    }
</script>

<style scoped>

</style>