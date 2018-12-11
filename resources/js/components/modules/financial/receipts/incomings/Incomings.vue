<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/receipts/incomings/index';

    export default {
        created() {
            this.$store.registerModule("financial/receipts/incomings", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/receipts/incomings");
        }
    }
</script>

<style scoped>

</style>