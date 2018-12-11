<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/bills/financialPostsPayments/index';

    export default {
        created() {
            this.$store.registerModule("financial/bills/financialPostsPayments", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/bills/financialPostsPayments");
        }
    }
</script>

<style scoped>

</style>