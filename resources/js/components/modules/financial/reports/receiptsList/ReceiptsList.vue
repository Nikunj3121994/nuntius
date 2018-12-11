<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/reports/receiptsList/index';

    export default {
        created() {
            this.$store.registerModule("financial/reports/receiptsList", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/reports/receiptsList");
        }
    }
</script>

<style scoped>

</style>