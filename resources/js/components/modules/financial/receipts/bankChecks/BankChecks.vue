<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/receipts/bankChecks/index';

    export default {
        created() {
            this.$store.registerModule("financial/receipts/bankChecks", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/receipts/bankChecks");
        }
    }
</script>

<style scoped>

</style>