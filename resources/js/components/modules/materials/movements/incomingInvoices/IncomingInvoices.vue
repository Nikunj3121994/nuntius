<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/materials/movements/incomingInvoice/index';

    export default {
        created() {
            this.$store.registerModule("materials/movements/incomingInvoice", state);
        },
        destroyed() {
            this.$store.unregisterModule("materials/movements/incomingInvoice");
        }
    }
</script>

<style scoped>

</style>