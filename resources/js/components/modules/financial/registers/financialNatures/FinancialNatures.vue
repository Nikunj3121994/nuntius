<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/registers/financialNatures/index';

    export default {
        created() {
            this.$store.registerModule("financial/registers/financialNatures", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/registers/financialNatures");
        }
    }
</script>

<style scoped>

</style>