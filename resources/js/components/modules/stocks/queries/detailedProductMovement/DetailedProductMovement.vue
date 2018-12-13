<template>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
    import state from '../../../../../store/modules/stocks/queries/detailedProductMovement/index';

    export default {
        created() {
            this.$store.registerModule("stocks/queries/detailedProductMovement", state);
        },
        destroyed() {
            this.$store.unregisterModule("stocks/queries/detailedProductMovement");
        }
    }
</script>

<style scoped>

</style>