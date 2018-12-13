import Movements from "../../../../components/modules/production/movements/Movements";
import ProductionOrders from "../../../../components/modules/production/movements/productionOrders/ProductionOrders";
import ProductionOrdersIndex
    from "../../../../components/modules/production/movements/productionOrders/ProductionOrdersIndex";
import ProductionOrdersForm
    from "../../../../components/modules/production/movements/productionOrders/ProductionOrdersForm";

export default {
    path: 'movements',
    name: 'productionMovements',
    component: Movements,
    children: [
        {
            path: 'production-orders',
            component: ProductionOrders,
            children: [
                {path: '', component: ProductionOrdersIndex, name: 'productionOrders'},
                {path: 'create', component: ProductionOrdersForm, name: 'productionOrdersCreate'},
                {path: 'edit/:id', component: ProductionOrdersForm, name: 'productionOrdersEdit'},
                {path: 'view/:id', component: ProductionOrdersForm, name: 'productionOrdersView'},
            ]
        }
    ]
}



