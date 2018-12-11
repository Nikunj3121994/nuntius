<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/admin/parametrizations/events/index';

    export default {
        created() {
            this.$store.registerModule("admin/parametrizations/events", state);
        },
        destroyed() {
            this.$store.unregisterModule("admin/parametrizations/events");
        }
    }
</script>

<style scoped>

</style>