<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/registers/measurementUnits/index';

    export default {
        created() {
            this.$store.registerModule("stocks/registers/measurementUnits", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/registers/measurementUnits");
        }
    }
</script>

<style scoped>

</style>