<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/registers/banks/index';

    export default {
        created() {
            this.$store.registerModule("financial/registers/banks", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/registers/banks");
        }
    }
</script>

<style scoped>

</style>