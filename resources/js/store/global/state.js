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
            {value: 1, text: 'Crescer'},
            {value: 3, text: 'Piemonte'}
        ],
        subsidiaries: [
            {value: 1, text: 'Crescer Alimentos Ltda', companyId: 1},
            {value: 3, text: 'Piemonte Distribuidora Ltda - SC', companyId: 3},
            {value: 4, text: 'Piemonte Distribuidora Ltda - SP', companyId: 3}
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
            icon: 'settings',
            title: 'Configurador',
            nested: true,
            children: [
                {
                    title: 'Configurações',
                    children: [
                        {title: 'Empresas', route: 'companies'},
                        {title: 'Filiais', route: 'subsidiaries'},
                        {title: 'Usuários', route: 'users'},
                        {title: 'Regras de Acesso', route: 'roles'},
                        {title: 'Permissões de Acesso', route: 'permissions'}
                    ]

                },
                {
                    title: 'Parametrizações',
                    children: [
                        {title: 'Parâmetros por Filiais', route: 'subsidiaryParameters'},
                        {title: 'Eventos de Rotinas', route: 'events'}
                    ]

                },
                {
                    title: 'Cadastros',
                    children: [
                        {title: 'Tipos de Naturezas da Operação', route: 'natureOperationTypes'}
                    ]

                }
            ]
        },
        {
            icon: 'attach_money',
            title: 'Financeiro',
            nested: true,
            children: [
                {
                    title: 'Cadastros',
                    children: [
                        {title: 'Unidades de Negócios', route: 'businessUnits'},
                        {title: 'Naturezas Financeiras', route: 'financialNatures'},
                        {title: 'Centros de Custos', route: 'costCenters'},
                        {title: 'Formas de Pagamentos', route: 'paymentMeans'},
                        {title: 'Condições de Pagamentos', route: 'paymentRules'},
                        {title: 'Contas Bancárias', route: 'bankAccounts'},
                        {title: 'Tipos de Tìtulos', route: 'billTypes'},
                        {title: 'Tipos de Baixas', route: 'deedTypes'},
                        {title: 'Tipos de Tarifas', route: 'feeTypes'},
                        {title: 'Motivos de Devolução de Cheques', route: 'bankCheckReturnReasons'}
                    ]

                },
                {
                    title: 'Contas a Receber',
                    children: [
                        {title: 'Lançamentos a Receber', route: 'receiptPosts'},
                        {title: 'Títulos a Receber', route: 'receivables'},
                        {title: 'Débitos FIDC', route: 'fidcDebts'},
                        {title: 'Borderô a Receber', route: 'receiptLists'},
                        {title: 'Cheques', route: 'bankChecks'},
                        {title: 'Adiantamentos a Receber', route: 'incomings'},
                        {title: 'Lançamentos Financeiros', route: 'financialPostsReceipts'}
                    ]

                },
                {
                    title: 'Contas a Pagar',
                    children: [
                        {title: 'Lançamentos a Pagar', route: 'paymentPosts'},
                        {title: 'Títulos a Pagar', route: 'payments'},
                        {title: 'Adiantamentos a Pagar', route: 'advancePayments'},
                        {title: 'Lançamentos Financeiros', route: 'financialPostsPayments'},
                        {title: 'Tarifas', route: 'fees'}
                    ]

                },
                {
                    title: 'Movimentos',
                    children: [
                        {title: 'Tranferências Bancárias', route: 'bankTransfer'},
                        {title: 'Compensações a Receber', route: 'receiptsCompensations'},
                        {title: 'Compensações a Pagar', route: 'payableCompensations'}
                    ]

                },
                {
                    title: 'Relatórios',
                    children: [
                        {title: 'Extrato Bancário', route: 'bankStatementReport'},
                        {title: 'Contas a Receber', route: 'receiptsReport'},
                        {title: 'Contas a Pagar', route: 'paymentsReport'},
                        {title: 'Lista de Contas a Pagar', route: 'paymentsListReport'},
                        {title: 'Lista de Baixas a Pagar', route: 'paymentWriteOffListReport'},
                        {title: 'Lista de Contas a Receber', route: 'receiptsListReport'},
                        {title: 'Movimento Financeiro Detalhado', route: 'financialMovementsDetailedReport'},
                        {title: 'Movimento Despesas Sintético', route: 'summaryDebtsReport'},
                    ]

                },
            ]
        },
        {
            icon: 'shopping_cart',
            title: 'Faturamento',
            nested: true,
            children: [
                {
                    title: 'Cadastros',
                    children: [
                        {title: 'Grupos de Vendas', route: 'salesGroups'},
                        {title: 'Parametrizações Fiscais', route: 'taxParametrizations'},
                        {title: 'Naturezas da Operação', route: 'natureOperations'},
                        {title: 'Séries de Nota Fiscal', route: 'invoiceSeries'},
                        {title: 'Tabelas de Preços', route: 'priceTables'},
                        {title: 'Variáveis de Markup', route: 'markupVariables'},
                        {title: 'De/Para CFOP', route: 'fromToCfop'}
                    ]

                },
                {
                    title: 'Movimentos',
                    children: [
                        {title: 'Pedidos de Venda', route: 'salesOrders'},
                        {title: 'Ordens de Faturamento', route: 'billingOrders'},
                        {title: 'Notas de Saída', route: 'outgoingInvoices'}
                    ]

                },
                {
                    title: 'Comissões',
                    children: [
                        {title: 'Apuração de Comissões', route: 'comissionsCalculation'}
                    ]

                },
                {
                    title: 'Relatórios',
                    children: [
                        {title: 'Consulta de Comissões', route: 'comssionsQueryReport'},
                        {title: 'Resumo de Vendas', route: 'salesSummaryReport'},
                        {title: 'Comissões por Vendedor', route: 'sellersComissionsReport'}
                    ]
                },
            ]
        },
        {
            icon: 'store',
            title: 'Compras',
            nested: true,
            children: [
                {
                    title: 'Cadastros',
                    children: [
                        {title: 'Tipos de Despesas de Importação', route: 'importChargeType'},
                        {title: 'Produtos X Fornecedores', route: 'productsVendors'},
                    ]
                },
                {
                    title: 'Movimentos',
                    children: [
                        {title: 'Notas de Entrada', route: 'incomingInvoicesType'},
                    ]
                },
                {
                    title: 'Importação',
                    children: [
                        {title: 'Processos de Importação', route: 'importProcess'},
                    ]
                }
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