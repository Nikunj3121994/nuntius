<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/sales/registers/priceTables/index';

    export default {
        created() {
            this.$store.registerModule("sales/registers/priceTables", state);
        },
        destroyed() {
            this.$store.unregisterModule("sales/registers/priceTables");
        }
    }
</script>

<style scoped>

</style>