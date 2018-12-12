<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/sales/reports/sellersComissions/index';

    export default {
        created() {
            this.$store.registerModule("sales/reports/sellersComissions", state);
        },
        destroyed() {
            this.$store.unregisterModule("sales/reports/sellersComissions");
        }
    }
</script>

<style scoped>

</style>