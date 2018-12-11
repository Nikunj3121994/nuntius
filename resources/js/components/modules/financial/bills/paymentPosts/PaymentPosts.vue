<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/bills/paymentPosts/index';

    export default {
        created() {
            this.$store.registerModule("financial/bills/paymentPosts", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/bills/paymentPosts");
        }
    }
</script>

<style scoped>

</style>