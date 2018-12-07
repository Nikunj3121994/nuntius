<template>
    <v-card>
        <v-toolbar dark color="primary">
            <v-btn icon dark @click="backToIndex">
                <v-icon>close</v-icon>
            </v-btn>
            <v-toolbar-title>Pedido</v-toolbar-title>
            <v-spacer></v-spacer>
            <v-toolbar-items>
                <v-btn dark flat @click="saveOrder">Gravar</v-btn>
            </v-toolbar-items>
        </v-toolbar>
        <order-header
                v-model="order"
        ></order-header>
    </v-card>
</template>

<script>

    import OrderHeader from './form-components/OrderHeader'

    export default {
        components: {
            OrderHeader
        },
        methods: {
            saveOrder() {
                console.log('save');
                this.backToIndex();
            },
            backToIndex() {
                this.$router.push({name: 'salesOrders'});
            }
        },
        data: () => ({
            order: {}
        })
    }
</script>