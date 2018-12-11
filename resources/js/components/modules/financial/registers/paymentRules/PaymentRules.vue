<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/registers/paymentRules/index';

    export default {
        created() {
            this.$store.registerModule("financial/registers/paymentRules", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/registers/paymentRules");
        }
    }
</script>

<style scoped>

</style>