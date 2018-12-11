<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/materials/registers/productsVendors/index';

    export default {
        created() {
            this.$store.registerModule("materials/registers/productsVendors", state);
        },
        destroyed() {
            this.$store.unregisterModule("materials/registers/productsVendors");
        }
    }
</script>

<style scoped>

</style>