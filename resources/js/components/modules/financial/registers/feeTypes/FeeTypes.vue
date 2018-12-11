<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/registers/feeTypes/index';

    export default {
        created() {
            this.$store.registerModule("financial/registers/feeTypes", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/registers/feeTypes");
        }
    }
</script>

<style scoped>

</style>