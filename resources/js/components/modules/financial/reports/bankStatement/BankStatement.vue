<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/reports/bankStatement/index';

    export default {
        created() {
            this.$store.registerModule("financial/reports/bankStatement", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/reports/bankStatement");
        }
    }
</script>

<style scoped>

</style>