<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/admin/registers/natureOperationTypes/index';

    export default {
        created() {
            this.$store.registerModule("admin/registers/natureOperationTypes", state);
        },
        destroyed() {
            this.$store.unregisterModule("admin/registers/natureOperationTypes");
        }
    }
</script>

<style scoped>

</style>