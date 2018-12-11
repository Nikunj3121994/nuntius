<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/receipts/receiptPosts/index';

    export default {
        created() {
            this.$store.registerModule("financial/receipts/receiptPosts", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/receipts/receiptPosts");
        }
    }
</script>

<style scoped>

</style>