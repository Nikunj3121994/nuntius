<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/admin/configuration/permissions/index';

    export default {
        created() {
            this.$store.registerModule("admin/configuration/permissions", state);
        },
        destroyed() {
            this.$store.unregisterModule("admin/configuration/permissions");
        }
    }
</script>

<style scoped>

</style>