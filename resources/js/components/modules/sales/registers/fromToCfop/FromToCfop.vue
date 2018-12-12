<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/sales/registers/fromToCfop/index';

    export default {
        created() {
            this.$store.registerModule("sales/registers/fromToCfop", state);
        },
        destroyed() {
            this.$store.unregisterModule("sales/registers/fromToCfop");
        }
    }
</script>

<style scoped>

</style>