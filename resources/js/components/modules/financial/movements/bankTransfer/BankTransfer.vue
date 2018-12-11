<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/movements/bankTransfer/index';

    export default {
        created() {
            this.$store.registerModule("financial/movements/bankTransfer", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/movements/bankTransfer");
        }
    }
</script>

<style scoped>

</style>