<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/sales/registers/natureOperations/index';

    export default {
        created() {
            this.$store.registerModule("sales/registers/natureOperations", state);
        },
        destroyed() {
            this.$store.unregisterModule("sales/registers/natureOperations");
        }
    }
</script>

<style scoped>

</style>