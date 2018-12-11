<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/receipts/financialPostsReceitps/index';

    export default {
        created() {
            this.$store.registerModule("financial/receipts/financialPostsReceitps", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/receipts/financialPostsReceitps");
        }
    }
</script>

<style scoped>

</style>