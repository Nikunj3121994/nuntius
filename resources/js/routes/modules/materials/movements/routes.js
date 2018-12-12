import Movements from "../../../../components/modules/materials/movements/Movements";
import IncomingInvoices from "../../../../components/modules/materials/movements/incomingInvoices/IncomingInvoices";
import IncomingInvoicesIndex
    from "../../../../components/modules/materials/movements/incomingInvoices/IncomingInvoicesIndex";
import IncomingInvoicesForm
    from "../../../../components/modules/materials/movements/incomingInvoices/IncomingInvoicesForm";

export default {
    path: 'movements',
    name: 'materialsMovements',
    component: Movements,
    children: [
        {
            path: 'incoming-invoices',
            component: IncomingInvoices,
            children: [
                {path: '', component: IncomingInvoicesIndex, name: 'incomingInvoicesType'},
                {path: 'create', component: IncomingInvoicesForm, name: 'incomingInvoicesTypeCreate'},
                {path: 'edit/:id', component: IncomingInvoicesForm, name: 'incomingInvoicesTypeEdit'},
                {path: 'view/:id', component: IncomingInvoicesForm, name: 'incomingInvoicesTypeView'},
            ]
        }
    ]
}



