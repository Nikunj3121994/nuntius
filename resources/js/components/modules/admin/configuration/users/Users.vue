<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/admin/configuration/users/index';

    export default {
        created() {
            this.$store.registerModule("admin/configuration/users", state);
        },
        destroyed() {
            this.$store.unregisterModule("admin/configuration/users");
        }
    }
</script>

<style scoped>

</style>