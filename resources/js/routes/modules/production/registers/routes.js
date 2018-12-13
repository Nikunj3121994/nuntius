import Registers from "../../../../components/modules/production/registers/Registers";
import ProductionIncidentTypes
    from "../../../../components/modules/production/registers/productionIncidentTypes/ProductionIncidentTypes";
import ProductionIncidentTypesIndex
    from "../../../../components/modules/production/registers/productionIncidentTypes/ProductionIncidentTypesIndex";
import ProductionIncidentTypesForm
    from "../../../../components/modules/production/registers/productionIncidentTypes/ProductionIncidentTypesForm";
import ProductionOrderFinalizationTypes
    from "../../../../components/modules/production/registers/productionOrderFinalizationTypes/ProductionOrderFinalizationTypes";
import ProductionOrderFinalizationTypesIndex
    from "../../../../components/modules/production/registers/productionOrderFinalizationTypes/ProductionOrderFinalizationTypesIndex";
import ProductionOrderFinalizationTypesForm
    from "../../../../components/modules/production/registers/productionOrderFinalizationTypes/ProductionOrderFinalizationTypesForm";
import ProductionOrderTypes
    from "../../../../components/modules/production/registers/productionOrderTypes/ProductionOrderTypes";
import ProductionOrderTypesIndex
    from "../../../../components/modules/production/registers/productionOrderTypes/ProductionOrderTypesIndex";
import ProductionOrderTypesForm
    from "../../../../components/modules/production/registers/productionOrderTypes/ProductionOrderTypesForm";
import ProductStructures from "../../../../components/modules/production/registers/productStructures/ProductStructures";
import ProductStructuresIndex
    from "../../../../components/modules/production/registers/productStructures/ProductStructuresIndex";
import ProductStructuresForm
    from "../../../../components/modules/production/registers/productStructures/ProductStructuresForm";

export default {
    path: 'registers',
    name: 'productionRegisters',
    component: Registers,
    children: [
        {
            path: 'production-incident-types',
            component: ProductionIncidentTypes,
            children: [
                {path: '', component: ProductionIncidentTypesIndex, name: 'productionIncidentTypes'},
                {path: 'create', component: ProductionIncidentTypesForm, name: 'productionIncidentTypesCreate'},
                {path: 'edit/:id', component: ProductionIncidentTypesForm, name: 'productionIncidentTypesEdit'},
                {path: 'view/:id', component: ProductionIncidentTypesForm, name: 'productionIncidentTypesView'},
            ]
        },
        {
            path: 'production-order-finalization-types',
            component: ProductionOrderFinalizationTypes,
            children: [
                {path: '', component: ProductionOrderFinalizationTypesIndex, name: 'prductionOrderFinalizarionTypes'},
                {path: 'create', component: ProductionOrderFinalizationTypesForm, name: 'prductionOrderFinalizarionTypesCreate'},
                {path: 'edit/:id', component: ProductionOrderFinalizationTypesForm, name: 'prductionOrderFinalizarionTypesEdit'},
                {path: 'view/:id', component: ProductionOrderFinalizationTypesForm, name: 'prductionOrderFinalizarionTypesView'},
            ]
        },
        {
            path: 'production-order-types',
            component: ProductionOrderTypes,
            children: [
                {path: '', component: ProductionOrderTypesIndex, name: 'productionOrderTypes'},
                {path: 'create', component: ProductionOrderTypesForm, name: 'productionOrderTypesCreate'},
                {path: 'edit/:id', component: ProductionOrderTypesForm, name: 'productionOrderTypesEdit'},
                {path: 'view/:id', component: ProductionOrderTypesForm, name: 'productionOrderTypesView'},
            ]
        },
        {
            path: 'product-structures',
            component: ProductStructures,
            children: [
                {path: '', component: ProductStructuresIndex, name: 'productStructures'},
                {path: 'create', component: ProductStructuresForm, name: 'productStructuresCreate'},
                {path: 'edit/:id', component: ProductStructuresForm, name: 'productStructuresEdit'},
                {path: 'view/:id', component: ProductStructuresForm, name: 'productStructuresView'},
            ]
        }
    ]
}



