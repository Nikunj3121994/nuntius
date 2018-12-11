<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/admin/configuration/roles/index';

    export default {
        created() {
            this.$store.registerModule("admin/configuration/roles", state);
        },
        destroyed() {
            this.$store.unregisterModule("admin/configuration/roles");
        }
    }
</script>

<style scoped>

</style>