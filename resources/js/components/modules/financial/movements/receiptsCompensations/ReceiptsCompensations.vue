<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/movements/receiptsCompensations/index';

    export default {
        created() {
            this.$store.registerModule("financial/movements/receiptsCompensations", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/movements/receiptsCompensations");
        }
    }
</script>

<style scoped>

</style>