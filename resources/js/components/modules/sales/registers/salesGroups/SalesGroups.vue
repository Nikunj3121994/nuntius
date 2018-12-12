<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/sales/registers/salesGroups/index';

    export default {
        created() {
            this.$store.registerModule("sales/registers/salesGroups", state);
        },
        destroyed() {
            this.$store.unregisterModule("sales/registers/salesGroups");
        }
    }
</script>

<style scoped>

</style>