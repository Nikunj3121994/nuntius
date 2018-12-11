<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/reports/payments/index';

    export default {
        created() {
            this.$store.registerModule("financial/reports/payments", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/reports/payments");
        }
    }
</script>

<style scoped>

</style>