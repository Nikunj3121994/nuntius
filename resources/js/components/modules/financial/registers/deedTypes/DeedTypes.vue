<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/registers/deedTypes/index';

    export default {
        created() {
            this.$store.registerModule("financial/registers/deedTypes", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/registers/deedTypes");
        }
    }
</script>

<style scoped>

</style>