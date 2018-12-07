const state = {
    loading: true,
    drawer: false,
    companyDialog: false,
    companyId: null,
    subsidiaryId: null,
    companyName: 'Crescer',
    subsidiaryName: 'Crescer Alimentos Ltda',
    companyDialogData: {
        companies: [
            { value: 1, text: 'Crescer'},
            { value: 3, text: 'Piemonte'}
        ],
        subsidiaries: [
            { value: 1, text: 'Crescer Alimentos Ltda', companyId: 1},
            { value: 3, text: 'Piemonte Distribuidora Ltda - SC', companyId: 3},
            { value: 4, text: 'Piemonte Distribuidora Ltda - SP', companyId: 3}
        ],
        companyId: null,
        subsidiaryId: null
    },
    menu: [
        {
            icon: 'home',
            title: 'Home',
            route: 'home',
            nested: false,
        },
        {
            icon: 'shopping_cart',
            title: 'Faturamento',
            nested: true,
            children: [
                {
                    icon: 'shopping_cart',
                    title: 'Movimentos',
                    children: [
                        {title: 'Pedidos', route: 'salesOrders'},
                    ]

                },
            ]
        }
    ],
    session: {
        user: {
            id: null,
            name: 'Usuário Demonstração',
            position: 'Analista',
            image: require('../../../assets/user.png')
        }
    },
    notifications: [
        {
            title: 'Nova Separação Pendente',
            avatar: 'notification_important',
            message: 'Pedido 5051 tem itens a separar',
            to: 'logisticsOrderSeparation',
            subject: 1
        },
        {
            title: 'Nova Separação Pendente',
            avatar: 'notification_important',
            message: 'Pedido 5052 tem itens a separar',
            to: 'logisticsOrderSeparation',
            subject: 2
        },
        {
            title: 'Nova Separação Pendente',
            avatar: 'notification_important',
            message: 'Pedido 5053 tem itens a separar',
            to: 'logisticsOrderSeparation',
            subject: 3
        }
    ]

};

export default state;