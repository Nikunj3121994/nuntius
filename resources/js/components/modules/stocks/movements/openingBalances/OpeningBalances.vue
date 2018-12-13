<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/movements/openingBalances/index';

    export default {
        created() {
            this.$store.registerModule("stocks/movements/openingBalances", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/movements/openingBalances");
        }
    }
</script>

<style scoped>

</style>