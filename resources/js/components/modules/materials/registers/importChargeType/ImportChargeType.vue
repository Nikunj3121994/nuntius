<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/materials/registers/importChargeType/index';

    export default {
        created() {
            this.$store.registerModule("materials/registers/importChargeType", state);
        },
        destroyed() {
            this.$store.unregisterModule("materials/registers/importChargeType");
        }
    }
</script>

<style scoped>

</style>