<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/receipts/receivables/index';

    export default {
        created() {
            this.$store.registerModule("financial/receipts/receivables", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/receipts/receivables");
        }
    }
</script>

<style scoped>

</style>