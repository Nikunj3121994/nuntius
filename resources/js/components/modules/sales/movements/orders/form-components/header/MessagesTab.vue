<template>
    <v-container class="pa-2">
        <v-layout row wrap>
            <v-flex xs12 class="pa-2">
                <v-text-field
                        label="Mensagem Fiscal"
                        v-model="tax_message"
                ></v-text-field>
            </v-flex>
            <v-flex xs12 class="pa-2">
                <v-text-field
                        label="Mensagem Cliente"
                        v-model="customer_message"
                ></v-text-field>
            </v-flex>
            <v-flex xs12 class="pa-2">
                <v-textarea
                        label="Observações"
                        v-model="comments"
                ></v-textarea>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>

    import { createHelpers } from 'vuex-map-fields';

    const { mapFields } = createHelpers({
        getterType: 'sales/movements/orders/getField',
        mutationType: 'sales/movements/orders/updateField'
    });

    export default {
        computed: {
            ...mapFields([
                'order.tax_message',
                'order.customer_message',
                'order.comments',
            ])
        }
    }
</script>

<style scoped>

</style>