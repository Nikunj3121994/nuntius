<template>
    <div>
        <div v-show="isRoute">
            <v-card>
                <v-card-title primary-title>
                    <div class="headline">Bem vindo ao módulo de Faturamento</div>
                </v-card-title>
            </v-card>
        </div>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        data: () => ({
            routeName: 'sales'
        }),
        computed: {
            isRoute() {
                return this.$route.name === this.routeName;
            }
        }
    }
</script>

<style scoped>

</style>