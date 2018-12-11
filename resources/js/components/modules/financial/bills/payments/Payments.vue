<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/bills/payments/index';

    export default {
        created() {
            this.$store.registerModule("financial/bills/payments", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/bills/payments");
        }
    }
</script>

<style scoped>

</style>