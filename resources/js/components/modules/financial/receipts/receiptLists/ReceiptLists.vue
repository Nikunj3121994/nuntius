<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/receipts/receiptLists/index';

    export default {
        created() {
            this.$store.registerModule("financial/receipts/receiptLists", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/receipts/receiptLists");
        }
    }
</script>

<style scoped>

</style>