<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/sales/registers/markupVariables/index';

    export default {
        created() {
            this.$store.registerModule("sales/registers/markupVariables", state);
        },
        destroyed() {
            this.$store.unregisterModule("sales/registers/markupVariables");
        }
    }
</script>

<style scoped>

</style>