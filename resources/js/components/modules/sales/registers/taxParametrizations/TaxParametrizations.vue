<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/sales/registers/taxParametrizations/index';

    export default {
        created() {
            this.$store.registerModule("sales/registers/taxParametrizations", state);
        },
        destroyed() {
            this.$store.unregisterModule("sales/registers/taxParametrizations");
        }
    }
</script>

<style scoped>

</style>