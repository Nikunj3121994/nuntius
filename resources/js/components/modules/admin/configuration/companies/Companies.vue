<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/admin/configuration/companies/index';

    export default {
        created() {
            this.$store.registerModule("admin/configuration/companies", state);
        },
        destroyed() {
            this.$store.unregisterModule("admin/configuration/companies");
        }
    }
</script>

<style scoped>

</style>