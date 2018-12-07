<template>
    <v-container class="pa-2">
        <v-layout row wrap>
            <v-flex xs2 class="pa-2">
                <v-text-field
                        label="Número"
                        v-model="number"
                        readonly
                >
                </v-text-field>
            </v-flex>
            <v-flex xs2 class="pa-2">
                <v-text-field
                        label="Status"
                        v-model="status"
                        readonly
                >
                </v-text-field>
            </v-flex>
            <v-flex xs2 class="pa-2">
                <date-field
                        label="Emissão"
                        v-model="emission"
                ></date-field>
            </v-flex>
            <v-flex xs2 class="pa-2">
                <date-field
                        label="Validade"
                        v-model="expiration"
                ></date-field>
            </v-flex>
            <v-flex xs2 class="pa-2">
                <v-checkbox
                        label="Parcelas Manuais?"
                        v-model="allowManualInstallments"
                ></v-checkbox>
            </v-flex>
        </v-layout>
        <v-layout row wrap>
            <v-flex xs6 class="pa-2">
                <ajax-combobox
                        v-model="warehouse_id"
                        label="Armazém"
                        endpoint="stock/registers/warehouses/enum"
                >
                </ajax-combobox>
            </v-flex>
            <v-flex xs2 class="pa-2">
                <ajax-combobox
                        v-model="payment_mean_id"
                        label="Forma de Pagamento"
                        endpoint="finance/registers/payment-means/enum"
                        no-ajax-search
                        initialize-list
                >
                </ajax-combobox>
            </v-flex>
        </v-layout>
        <v-layout row wrap>
            <v-flex xs8 class="pa-2">
                <ajax-combobox
                        v-model="entity_id"
                        label="Cliente"
                        endpoint="sales/registers/entities/enum"
                >
                </ajax-combobox>
            </v-flex>
            <v-flex xs4 class="pa-2">
                <ajax-combobox
                        v-model="entity_address_id"
                        label="Endereço de Entrega"
                        :endpoint="entityAddressesEndpoint"
                        :disabled="entityAddressesDisabled"
                >
                </ajax-combobox>
            </v-flex>
        </v-layout>
        <v-layout row wrap>
            <v-flex xs8 class="pa-2">
                <ajax-combobox
                        v-model="tax_parametrization_id"
                        label="Parametrização Fiscal"
                        endpoint="taxes/registers/tax-parametrizations/enum"
                >
                </ajax-combobox>
            </v-flex>
            <v-flex xs4 class="pa-2">
                <ajax-combobox
                        v-model="price_table_id"
                        label="Tabela de Preço"
                        endpoint="sales/registers/price-tables/enum"
                >
                </ajax-combobox>
            </v-flex>
        </v-layout>
        <v-layout row wrap>
            <v-flex xs12 class="pa-2">
                <ajax-combobox
                        v-model="payment_rule_id"
                        label="Condição de Pagamento"
                        endpoint="finance/registers/payment-rules/enum"
                >
                </ajax-combobox>
            </v-flex>
        </v-layout>
        <v-layout row wrap>
            <v-flex xs3 class="pa-2">
                <v-select
                        :items="discountMeanings"
                        label="Forma de Desconto"
                        v-model="discount_mean"
                >
                </v-select>
            </v-flex>
            <v-flex xs3 class="pa-2">
                <v-select
                        :items="discountLocations"
                        label="Informar Desconto"
                        v-model="discount_location"
                >
                </v-select>
            </v-flex>
            <v-flex xs3 class="pa-2">
                <currency-input
                        label="% Desconto"
                        v-if="discount_mean === 1"
                        v-model="discount_percent"
                        thousands-separator="."
                        decimal-separator=","
                        language-code="pt-BR"
                        prefix=""
                ></currency-input>
                <currency-input
                        label="Valor Desconto"
                        v-if="discount_mean === 2"
                        v-model="discount_amount"
                        thousands-separator="."
                        decimal-separator=","
                        language-code="pt-BR"
                        prefix=""
                ></currency-input>
            </v-flex>
            <v-flex xs3 class="pa-2">
                <v-select
                        :items="discountTypes"
                        label="Tipo Desconto"
                        v-model="discount_type"
                >
                </v-select>
            </v-flex>
        </v-layout>
    </v-container>
</template>

<script>

    import AjaxCombobox from '../../../../../../plugins/AjaxCombobox';
    import DateField from '../../../../../../plugins/DateField';
    import CurrencyInput from '../../../../../../plugins/CurrencyInput';
    import { createHelpers } from 'vuex-map-fields';

    const { mapFields } = createHelpers({
        getterType: 'sales/movements/orders/getField',
        mutationType: 'sales/movements/orders/updateField'
    });

    export default {
        components: {
            AjaxCombobox,
            DateField,
            CurrencyInput
        },
        data: () => ({
            allowManualInstallments: false,
            discountMeanings: [
                {value: 1, text: 'Alíquota'},
                {value: 2, text: 'Valor'}
            ],
            discountLocations: [
                {value: 1, text: 'Total'},
                {value: 2, text: 'Item'}
            ],
            discountTypes: [
                {value: 1, text: 'Condicional'},
                {value: 2, text: 'Incondicional'}
            ]
        }),
        computed: {
            entityAddressesEndpoint() {
                if (this.entity_id) {
                    return `sales/registers/entity-addresses/enum/${this.entity_id}`;
                } else {
                    return '';
                }
            },
            entityAddressesDisabled() {
                return this.entity_id === null;
            },
            ...mapFields([
                'order.number',
                'order.status',
                'order.emission',
                'order.expiration',
                'order.warehouse_id',
                'order.payment_mean_id',
                'order.entity_id',
                'order.entity_address_id',
                'order.tax_parametrization_id',
                'order.price_table_id',
                'order.payment_rule_id',
                'order.discount_mean',
                'order.discount_location',
                'order.discount_percent',
                'order.discount_amount',
                'order.discount_type'
            ])
        }
    }
</script>
