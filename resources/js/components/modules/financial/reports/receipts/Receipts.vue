<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/reports/receipts/index';

    export default {
        created() {
            this.$store.registerModule("financial/reports/receipts", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/reports/receipts");
        }
    }
</script>

<style scoped>

</style>