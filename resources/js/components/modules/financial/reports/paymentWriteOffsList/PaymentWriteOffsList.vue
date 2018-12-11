<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/reports/paymentWriteOffsList/index';

    export default {
        created() {
            this.$store.registerModule("financial/reports/paymentWriteOffsList", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/reports/paymentWriteOffsList");
        }
    }
</script>

<style scoped>

</style>