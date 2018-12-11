<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/financial/bills/fees/index';

    export default {
        created() {
            this.$store.registerModule("financial/bills/fees", state);
        },
        destroyed() {
            this.$store.unregisterModule("financial/bills/fees");
        }
    }
</script>

<style scoped>

</style>