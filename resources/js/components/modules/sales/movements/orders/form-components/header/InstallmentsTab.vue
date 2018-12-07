<template>
    <v-container class="pa-2">
        <v-layout row wrap>
            <v-toolbar flat color="white">
                <v-toolbar-title>Parcelas Manuais</v-toolbar-title>
                <v-divider
                        class="mx-2"
                        inset
                        vertical
                ></v-divider>
                <v-spacer></v-spacer>
                <v-btn color="primary" dark class="mb-2" @click="newInstallment">Nova Parcela</v-btn>
            </v-toolbar>
        </v-layout>
        <v-layout row wrap>
            <v-flex xs12 class="pa-2">
                <v-data-table
                        :headers="headers"
                        :items="orderInstallmentsList"
                        hide-actions
                >
                    <template slot="items" slot-scope="props">
                        <td class="text-xs-right">{{ props.item.installment_number }}</td>
                        <td>

                            <date-field
                                    slot="input"
                                    v-model="props.item.due_date"
                                    single-line
                                    no-icon
                            ></date-field>

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
    import DateField from '../../../../../../plugins/DateField';
    import CurrencyInput from '../../../../../../plugins/CurrencyInput';
    import formatMoney from '../../../../../../../plugins/formatMoney';
    import {formatDate, parseDate} from "../../../../../../../plugins/dateExtended";
    import { createHelpers } from 'vuex-map-fields';

    const { mapMultiRowFields } = createHelpers({
        getterType: 'sales/movements/orders/getField',
        mutationType: 'sales/movements/orders/updateField'
    });

    export default {
        components: {
            DateField,
            CurrencyInput
        },
        data: () => ({
            editedIndex: -1,
            orderInstallment: {
                id: null,
                installment_number: 0,
                due_date: new Date().toISOString().substr(0, 10),
                amount: 0,
                deleted: false
            },
            defaultItem: {
                id: null,
                installment_number: 0,
                due_date: new Date().toISOString().substr(0, 10),
                amount: 0,
                deleted: false
            },
            headers: [
                {text: "Parcela", value: "installment_number", sortable: false},
                {text: "Vencimento", value: "due_date", sortable: false},
                {text: "Valor", value: "amount", sortable: false},
                {text: 'Ações', value: 'action', sortable: false}
            ]
        }),
        methods: {
            getOrderInstallmentsItem() {
                return Object.assign({}, this.$store.getters['sales/movements/orders/getOrderInstallmentsItem'](this.editedIndex));
            },
            newInstallment() {
                this.orderInstallment.installment_number = this.orderInstallments.length + 1;
                const installment = Object.assign({},this.orderInstallment);
                this.$store.dispatch('sales/movements/orders/addOrderInstallment',installment);
            },
            updateOrderInstallments(){
                const installment = Object.assign({},this.orderInstallment);
                this.$store.dispatch('sales/movements/orders/updateOrderInstallments',{
                    data : installment,
                    index: this.editedIndex
                });
            },
            deleteItem(item) {
                this.editedIndex = this.orderInstallments.indexOf(item);
                this.orderInstallment = Object.assign({},this.getOrderInstallmentsItem(this.editedIndex));

                if (confirm('Você realmente deseja excluir este item?')) {
                    this.orderInstallment.deleted = true;
                    this.updateOrderInstallments();
                    this.resetOrderInstallment();
                }
            },
            resetOrderInstallment() {
                const vm = this;
                setTimeout(() => {
                    vm.orderInstallment = Object.assign({}, vm.defaultItem);
                    vm.editedIndex = -1;
                }, 300)
            },
            formatMoney(amount, decimalCount = 2, decimal = ".", thousands = ",") {
                return formatMoney(amount, decimalCount, decimal, thousands);
            },
            formatDate(date) {
                return formatDate(date);
            },
            parseDate(date) {
                return parseDate(date);
            }
        },
        computed: {
            orderInstallmentsList() {
                return this.orderInstallments.filter((i) => {
                    return i.deleted === false;
                })
            },
            ...mapMultiRowFields(['orderInstallments'])
        }
    }
</script>

<style scoped>

</style>