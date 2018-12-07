import Orders from '../../../../components/modules/sales/movements/orders/Orders'
import OrdersForm from '../../../../components/modules/sales/movements/orders/OrdersForm'
import OrdersIndex from '../../../../components/modules/sales/movements/orders/OrdersIndex'
import Movements from "../../../../components/modules/sales/movements/Movements";

export default {
    path: 'movements',
    name: 'movements',
    component: Movements,
    children: [
        {
            path: 'orders',
            component: Orders,
            children: [
                {path: '', component: OrdersIndex, name: 'salesOrders'},
                {path: 'test', component: OrdersForm, name: 'test'},
                {path: 'create', component: OrdersForm, name: 'salesOrdersCreate'},
                {path: 'edit/:id', component: OrdersForm, name: 'salesOrdersEdit'},
                {path: 'view/:id', component: OrdersForm, name: 'salesOrdersView'},
            ]
        },

    ]
}



