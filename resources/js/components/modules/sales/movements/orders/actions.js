export default [
    {
        name: 'salesOrdersCreate',
        title: 'Novo Pedido',
        router: true,
        row: false,
        new: true
    },
    {
        name: 'test',
        title: 'Teste',
        router: false,
        row: false,
        endpoint: '',
        method: 'POST',
        askBefore: true,
        askModal: {
            title: 'Teste',
            message: "Deseja mesmo executar teste?"
        }
    },
    {
        name: 'test',
        title: 'Teste',
        router: true,
        row: false,
        endpoint: ''
    },
    {
        name: 'salesOrdersEdit',
        title: 'Editar',
        router: true,
        row: true
    },
    {
        name: 'salesOrdersView',
        title: 'Visualizar',
        router: true,
        row: true
    },
    {
        name: 'salesOrdersDelete',
        title: 'Excluir',
        router: false,
        row: true,
        endpoint: '',
        method: 'DELETE',
        askBefore: true,
        askModal: {
            title: 'Exclusão de Pedido',
            message: "Deseja mesmo excluir este registro?"
        }
    }
]