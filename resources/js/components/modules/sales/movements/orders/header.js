export default [
    {
        text: 'Número',
        align: 'left',
        sortable: true,
        value: 'numero',
        searchable: true
    },
    {
        text: 'Emissão',
        align: 'left',
        sortable: true,
        value: 'emissao',
        searchable: true,
        type: 'date'
    },
    {
        text: 'Validade',
        align: 'left',
        sortable: true,
        value: 'validade',
        searchable: true,
        type: 'date'
    },
    {
        text: 'Cliente',
        align: 'left',
        sortable: true,
        value: 'nome_fantasia',
        searchable: true
    },
    {
        text: 'Valor',
        align: 'left',
        sortable: true,
        value: 'pedido_total',
        searchable: true,
        type: 'number',
        decimal: 2
    },
    {
        text: 'Status',
        align: 'left',
        sortable: false,
        value: 'status',
        searchable: false
    },
    {
        text: 'Ações',
        align: 'left',
        sortable: false,
        value: 'action',
        searchable: false
    },
]