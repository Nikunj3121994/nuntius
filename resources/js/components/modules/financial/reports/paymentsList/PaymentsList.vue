<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/reports/paymentsList/index';

    export default {
        created() {
            this.$store.registerModule("financial/reports/paymentsList", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/reports/paymentsList");
        }
    }
</script>

<style scoped>

</style>