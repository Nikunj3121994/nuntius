<template>
    <v-container class="pa-2">
        <v-layout row wrap>
            <v-toolbar flat color="white">
                <v-toolbar-title>Comissões</v-toolbar-title>
                <v-divider
                        class="mx-2"
                        inset
                        vertical
                ></v-divider>
                <v-spacer></v-spacer>
                <v-btn color="primary" dark class="mb-2" @click="newComission">Nova Comissão</v-btn>
            </v-toolbar>
        </v-layout>
        <v-layout row wrap>
            <v-flex xs12 class="pa-2">
                <v-data-table
                        :headers="headers"
                        :items="orderComissions"
                        hide-actions
                >
                    <template slot="items" slot-scope="props">
                        <td class="text-xs-right">
                            <ajax-combobox
                                    v-model="props.item.sales_group_seller_id "
                                    label="Representante"
                                    endpoint="sales/registers/sales-group-sellers/enum"
                                    @change="getSellerComissionPercent($event,props.item)"
                            >
                            </ajax-combobox>
                        </td>
                        <td>
                            <currency-input
                                    slot="input"
                                    v-model="props.item.percent"
                                    thousands-separator="."
                                    decimal-separator=","
                                    language-code="pt-BR"
                                    prefix=""
                                    single-line
                            ></currency-input>
                        </td>
                        <td>
                            <currency-input
                                    slot="input"
                                    v-model="props.item.amount"
                                    thousands-separator="."
                                    decimal-separator=","
                                    language-code="pt-BR"
                                    prefix=""
                                    single-line
                                    readonly
                            ></currency-input>
                        </td>
                        <td class="justify-center layout px-0">
                            <v-icon
                                    color="error"
                                    @click="deleteItem(props.item)"
                            >
                                delete
                            </v-icon>
                        </td>
                    </template>
                    <template slot="no-data">
                        <p class="text-xs-center">Sem dados</p>
                    </template>
                </v-data-table>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>

    import CurrencyInput from '../../../../../../plugins/CurrencyInput';
    import AjaxCombobox from '../../../../../../plugins/AjaxCombobox'

    export default {
        components: {
            CurrencyInput,
            AjaxCombobox
        },
        data: () => ({
            order: {
                order_comissions: []
            },
            orderComission: {
                id: null,
                sales_group_seller_id: 0,
                percent: 0,
                amount: 0,
                deleted: false
            },
            headers: [
                {text: "Vendedor", value: "sales_group_seller_id", sortable: false},
                {text: "Percentual", value: "percent", sortable: false},
                {text: "Valor", value: "amount", sortable: false},
                {text: 'Ações', value: 'action', sortable: false}
            ]
        }),
        methods: {
            newComission() {
                const comission = Object.assign({}, this.orderComission);
                this.order.order_comissions.push(comission);
            },
            deleteItem(item) {
                const index = this.order.order_comissions.indexOf(item);
                if (confirm('Você realmente deseja excluir este item?')) {
                    this.order.order_comissions[index].deleted = true;
                }
            },
            getSellerComissionPercent(id, item) {
                const index = this.order.order_comissions.indexOf(item);
                this.$http.get(`sales/registers/sales-group-sellers/comission-percent/${id}`)
                    .then(({data}) => {
                        this.order.order_comissions[index].percent = data.percent;
                    });
            }
        },
        watch: {
            order: {
                handler(val) {
                    this.$emit('input', val);
                },
                deep: true
            }
        },
        computed: {
            orderComissions() {
                return this.order.order_comissions.filter((item) => item.deleted === false);
            }
        }
    }
</script>

<style scoped>

</style>