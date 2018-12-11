<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>

    import state from '../../../../../store/modules/sales/movements/orders/index';

    export default {
        created() {
            this.$store.registerModule("sales/movements/orders", state);
        },
        destroyed() {
            this.$store.unregisterModule("sales/movements/orders");
        }
    }
</script>