<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/sales/movements/outgoingInvoices/index';

    export default {
        created() {
            this.$store.registerModule("sales/movements/outgoingInvoices", state);
        },
        destroyed() {
            this.$store.unregisterModule("sales/movements/outgoingInvoices");
        }
    }
</script>

<style scoped>

</style>