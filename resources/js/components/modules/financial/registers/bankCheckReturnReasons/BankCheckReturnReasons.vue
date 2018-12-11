<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/registers/banckCheckReturnReasons/index';

    export default {
        created() {
            this.$store.registerModule("financial/registers/banckCheckReturnReasons", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/registers/banckCheckReturnReasons");
        }
    }
</script>

<style scoped>

</style>