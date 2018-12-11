<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/registers/billTypes/index';

    export default {
        created() {
            this.$store.registerModule("financial/registers/billTypes", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/registers/billTypes");
        }
    }
</script>

<style scoped>

</style>