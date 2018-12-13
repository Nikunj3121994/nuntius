<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/logistics/movements/separation/index';

    export default {
        created() {
            this.$store.registerModule("logistics/movements/separation", state);
        },
        destroyed() {
            this.$store.unregisterModule("logistics/movements/separation");
        }
    }
</script>
<style scoped>

</style>