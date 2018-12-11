<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/registers/bankAccounts/index';

    export default {
        created() {
            this.$store.registerModule("financial/registers/bankAccounts", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/registers/bankAccounts");
        }
    }
</script>

<style scoped>

</style>