<template>
    <v-container class="pa-2">
        <v-layout row wrap>
            <v-flex xs4 class="pa-2">
                <ajax-combobox
                        v-model="freight_mode_id"
                        label="Modalidade de Frete"
                        endpoint="taxes/registers/freight-modes/enum"
                        no-ajax-search
                        initialize-list
                >
                </ajax-combobox>
            </v-flex>
            <v-flex xs4 class="pa-2">
                <ajax-combobox
                        v-model="shipping_company_id"
                        label="Transportadora"
                        endpoint="sales/registers/entities/enum"
                >
                </ajax-combobox>
            </v-flex>
            <v-flex xs4 class="pa-2">
                <ajax-combobox
                        v-model="redispatch_company_id"
                        label="Redespacho"
                        endpoint="sales/registers/entities/enum"
                >
                </ajax-combobox>
            </v-flex>
        </v-layout>
        <v-layout row wrap>
            <v-flex xs3 class="pa-2">
                <currency-input
                        label="Valor Frete"
                        v-model="freight_amount"
                        thousands-separator="."
                        decimal-separator=","
                        language-code="pt-BR"
                        prefix=""
                ></currency-input>
            </v-flex>
            <v-flex xs3 class="pa-2">
                <currency-input
                        label="Valor Seguro"
                        v-model="insurance_amount"
                        thousands-separator="."
                        decimal-separator=","
                        language-code="pt-BR"
                        prefix=""
                ></currency-input>
            </v-flex>
            <v-flex xs3 class="pa-2">
                <v-select
                        label="Tipo Veículo"
                        :items="vehicleTypes"
                        v-model="vehicle_type"
                ></v-select>
            </v-flex>
            <v-flex xs3 class="pa-2">
                <v-text-field
                        label="Placa Veículo"
                        v-model="vehicle_plate"
                ></v-text-field>
            </v-flex>
        </v-layout>
        <v-card>
            <v-toolbar flat color="white">
                <v-toolbar-title>Volumes</v-toolbar-title>
                <v-divider
                        class="mx-2"
                        inset
                        vertical
                ></v-divider>
                <v-spacer></v-spacer>
                <v-dialog v-model="dialog" persistent max-width="800px">
                    <v-btn slot="activator" color="primary" dark class="mb-2">Novo Volume</v-btn>
                    <v-card>
                        <v-card-title>
                            <span class="headline">Volume</span>
                        </v-card-title>
                        <v-card-text>
                            <v-container grid-list-md>
                                <v-layout row wrap>
                                    <v-flex xs12 sm6 md4>
                                        <v-text-field
                                                v-model="orderVolume.specie"
                                                label="Espécie"
                                        >
                                        </v-text-field>
                                    </v-flex>
                                </v-layout>
                                <v-layout row wrap>
                                    <v-flex xs12 sm6 md4>
                                        <currency-input
                                                thousands-separator="."
                                                decimal-separator=","
                                                language-code="pt-BR"
                                                prefix=""
                                                v-model="orderVolume.quantity"
                                                label="Quantidade"
                                        >
                                        </currency-input>
                                    </v-flex>
                                    <v-flex xs12 sm6 md4>
                                        <currency-input
                                                thousands-separator="."
                                                decimal-separator=","
                                                language-code="pt-BR"
                                                prefix=""
                                                v-model="orderVolume.net_weight"
                                                label="Peso Líquido"
                                        >
                                        </currency-input>
                                    </v-flex>
                                    <v-flex xs12 sm6 md4>
                                        <currency-input
                                                thousands-separator="."
                                                decimal-separator=","
                                                language-code="pt-BR"
                                                prefix=""
                                                v-model="orderVolume.gross_weight"
                                                label="Peso Bruto"
                                        >
                                        </currency-input>
                                    </v-flex>
                                </v-layout>
                                <v-layout row wrap>
                                    <v-flex xs12 sm6 md6>
                                        <v-text-field
                                                v-model="orderVolume.vendor"
                                                label="Marca"
                                        ></v-text-field>
                                    </v-flex>
                                    <v-flex xs12 sm6 md6>
                                        <v-text-field
                                                v-model="orderVolume.number"
                                                label="Numeração"
                                        ></v-text-field>
                                    </v-flex>
                                </v-layout>
                            </v-container>
                        </v-card-text>
                        <v-card-actions>
                            <v-spacer></v-spacer>
                            <v-btn color="blue darken-1" flat @click="close">Cancelar</v-btn>
                            <v-btn color="blue darken-1" flat @click="save">Gravar</v-btn>
                        </v-card-actions>
                    </v-card>
                </v-dialog>
            </v-toolbar>
            <v-layout row wrap>
                <v-flex xs12 class="pa-2">
                    <v-data-table
                            :headers="orderVolumesHeaders"
                            :items="orderVolumes"
                            hide-actions
                    >
                        <template slot="items" slot-scope="props">
                            <td>{{ props.item.specie }}</td>
                            <td class="text-xs-right">{{ formatMoney(props.item.quantity,2,',','.') }}</td>
                            <td class="text-xs-right">{{ formatMoney(props.item.net_weight,2,',','.') }}</td>
                            <td class="text-xs-right">{{ formatMoney(props.item.gross_weight,2,',','.') }}</td>
                            <td class="justify-center layout px-0">
                                <v-icon
                                        color="info"
                                        class="mr-2"
                                        @click="editItem(props.item)"
                                >
                                    edit
                                </v-icon>
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
        </v-card>
    </v-container>
</template>

<script>

    import AjaxCombobox from '../../../../../../plugins/AjaxCombobox';
    import CurrencyInput from '../../../../../../plugins/CurrencyInput';
    import formatMoney from '../../../../../../../plugins/formatMoney';
    import { createHelpers } from 'vuex-map-fields';

    const { mapFields } = createHelpers({
        getterType: 'sales/movements/orders/getField',
        mutationType: 'sales/movements/orders/updateField'
    });

    export default {
        components: {
            AjaxCombobox,
            CurrencyInput
        },
        data: () => ({
            vehicleTypes: [
                {value: 'R', text: 'Veículo/Reboque'},
                {value: 'B', text: 'Balsa'},
                {value: 'V', text: 'Vagão'}
            ],
            orderVolumesHeaders: [
                {text: 'Espécie', sortable: false, value: 'specie'},
                {text: 'Quantidade', sortable: false, value: 'quantity'},
                {text: 'Peso Líquido', sortable: false, value: 'net_weight'},
                {text: 'Peso Bruto', sortable: false, value: 'gross_weight'},
                {text: 'Ações', value: 'action', sortable: false}
            ],
            orderVolume: {
                id: null,
                specie: '',
                quantity: 0,
                net_weight: 0,
                gross_weight: 0,
                vendor: '',
                number: '',
                deleted: false
            },
            defaultItem: {
                id: null,
                specie: '',
                quantity: 0,
                net_weight: 0,
                gross_weight: 0,
                vendor: '',
                number: '',
                deleted: false
            },
            editedIndex: -1,
            dialog: false
        }),
        methods: {
            getOrderLogisticsVolumesItem() {
                return Object.assign({}, this.$store.getters['sales/movements/orders/getOrderLogisticsVolumesItem'](this.editedIndex));
            },
            updateOrderLogisticsVolumes() {
                this.$store.dispatch('sales/movements/orders/updateOrderLogisticsVolumes',{
                    data :this.orderVolume,
                    index: this.editedIndex
                });
            },
            editItem(item) {
                this.editedIndex = this.orderLogisticsVolumes.indexOf(item);
                this.orderVolume = Object.assign({}, this.getOrderLogisticsVolumesItem(this.editedIndex));
                this.dialog = true;
            },
            deleteItem(item) {
                this.editedIndex = this.orderLogisticsVolumes.indexOf(item);
                this.orderVolume = Object.assign({}, this.getOrderLogisticsVolumesItem());
                if (confirm('Você realmente deseja excluir este item?')) {
                    this.orderVolume.deleted = true;
                    this.updateOrderLogisticsVolumes();
                    this.resetOrderVolume();
                }
            },
            save() {
                this.updateOrderLogisticsVolumes();
                this.close();
            },
            close() {
                this.dialog = false;
                this.resetOrderVolume();
            },
            resetOrderVolume() {
                const vm = this;
                setTimeout(() => {
                    vm.orderVolume = Object.assign({}, vm.defaultItem);
                    vm.editedIndex = -1;
                }, 300)
            },
            formatMoney(amount, decimalCount = 2, decimal = ".", thousands = ","){
                return formatMoney(amount,decimalCount,decimal,thousands);
            }
        },
        computed: {
            orderVolumes() {
                return this.orderLogisticsVolumes.filter((i) => {
                    return i.deleted === false;
                })
            },
            ...mapFields([
                'orderLogistics.freight_mode_id',
                'orderLogistics.shipping_company_id',
                'orderLogistics.redispatch_company_id',
                'orderLogistics.freight_amount',
                'orderLogistics.insurance_amount',
                'orderLogistics.vehicle_type',
                'orderLogistics.vehicle_plate',
            ]),
            orderLogisticsVolumes() {
                return this.$store.getters['sales/movements/orders/getOrderLogisticsVolumes'];
            }
        }
    }
</script>

<style scoped>

</style>