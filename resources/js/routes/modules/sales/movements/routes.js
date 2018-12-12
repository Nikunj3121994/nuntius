import Orders from '../../../../components/modules/sales/movements/orders/Orders'
import OrdersForm from '../../../../components/modules/sales/movements/orders/OrdersForm'
import OrdersIndex from '../../../../components/modules/sales/movements/orders/OrdersIndex'
import Movements from "../../../../components/modules/sales/movements/Movements";
import BillingOrders from "../../../../components/modules/sales/movements/billingOrders/BillingOrders";
import BillingOrdersIndex from "../../../../components/modules/sales/movements/billingOrders/BillingOrdersIndex";
import BillingOrdersForm from "../../../../components/modules/sales/movements/billingOrders/BillingOrdersForm";
import OutgoingInvoices from "../../../../components/modules/sales/movements/outgoingInvoices/OutgoingInvoices";
import OutgoingInvoicesIndex
    from "../../../../components/modules/sales/movements/outgoingInvoices/OutgoingInvoicesIndex";
import OutgoingInvoicesForm from "../../../../components/modules/sales/movements/outgoingInvoices/OutgoingInvoicesForm";

export default {
    path: 'movements',
    name: 'movements',
    component: Movements,
    children: [
        {
            path: 'billing-orders',
            component: BillingOrders,
            children: [
                {path: '', component: BillingOrdersIndex, name: 'billingOrders'},
                {path: 'create', component: BillingOrdersForm, name: 'billingOrdersCreate'},
                {path: 'edit/:id', component: BillingOrdersForm, name: 'billingOrdersEdit'},
                {path: 'view/:id', component: BillingOrdersForm, name: 'billingOrdersView'},
            ]
        },
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
        {
            path: 'outgoing-invoices',
            component: OutgoingInvoices,
            children: [
                {path: '', component: OutgoingInvoicesIndex, name: 'outgoingInvoices'},
                {path: 'create', component: OutgoingInvoicesForm, name: 'outgoingInvoicesCreate'},
                {path: 'edit/:id', component: OutgoingInvoicesForm, name: 'outgoingInvoicesEdit'},
                {path: 'view/:id', component: OutgoingInvoicesForm, name: 'outgoingInvoicesView'},
            ]
        },

    ]
}



