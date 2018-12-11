<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/admin/parametrizations/subsidiaryParameters/index';

    export default {
        created() {
            this.$store.registerModule("admin/parametrizations/subsidiaryParameters", state);
        },
        destroyed() {
            this.$store.unregisterModule("admin/parametrizations/subsidiaryParameters");
        }
    }
</script>

<style scoped>

</style>