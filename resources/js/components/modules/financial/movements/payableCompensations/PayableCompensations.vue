<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/movements/payableCompensations/index';

    export default {
        created() {
            this.$store.registerModule("financial/movements/payableCompensations", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/movements/payableCompensations");
        }
    }
</script>

<style scoped>

</style>