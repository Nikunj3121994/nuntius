<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/sales/registers/entities/index';

    export default {
        created() {
            this.$store.registerModule("sales/registers/entities", state);
        },
        destroyed() {
            this.$store.unregisterModule("sales/registers/entities");
        }
    }
</script>

<style scoped>

</style>