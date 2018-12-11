<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/registers/paymentMeans/index';

    export default {
        created() {
            this.$store.registerModule("financial/registers/paymentMeans", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/registers/paymentMeans");
        }
    }
</script>

<style scoped>

</style>