const state = {
    order: {
        number: 0,
        status: 'Aberto',
        emission: '',
        expiration: '',
        warehouse_id: null,
        payment_mean_id: null,
        entity_id: null,
        entity_address_id: null,
        tax_parametrization_id: null,
        price_table_id: null,
        payment_rule_id: null,
        discount_mean: 1,
        discount_location: 1,
        discount_percent: 0,
        discount_amount: 0,
        discount_type: 1,
        tax_message: '',
        customer_message: '',
        comments: ''
    },
    orderLogistics: {
        freight_mode_id: null,
        shipping_company_id: null,
        redispatch_company_id: null,
        freight_amount: 0,
        insurance_amount: 0,
        vehicle_type: 'R',
        vehicle_plate: ''
    },
    orderLogisticsVolumes: [],
    orderInstallments: [],
    orderComissions: []
};

export default state;