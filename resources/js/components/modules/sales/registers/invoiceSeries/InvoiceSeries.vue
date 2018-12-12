<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/sales/registers/invoiceSeries/index';

    export default {
        created() {
            this.$store.registerModule("sales/registers/invoiceSeries", state);
        },
        destroyed() {
            this.$store.unregisterModule("sales/registers/invoiceSeries");
        }
    }
</script>

<style scoped>

</style>