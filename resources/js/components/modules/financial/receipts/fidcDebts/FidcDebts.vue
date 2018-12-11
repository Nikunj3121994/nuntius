<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/receipts/fidcDebts/index';

    export default {
        created() {
            this.$store.registerModule("financial/receipts/fidcDebts", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/receipts/fidcDebts");
        }
    }
</script>

<style scoped>

</style>