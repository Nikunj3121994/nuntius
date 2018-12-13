<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/movements/productTransfer/index';

    export default {
        created() {
            this.$store.registerModule("stocks/movements/productTransfer", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/movements/productTransfer");
        }
    }
</script>

<style scoped>

</style>