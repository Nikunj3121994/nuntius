import Comissions from "../../../../components/modules/sales/comissions/Comissions";
import ComissionsCalculation
    from "../../../../components/modules/sales/comissions/comissionsCalculation/ComissionsCalculation";
import ComissionsCalculationIndex
    from "../../../../components/modules/sales/comissions/comissionsCalculation/ComissionsCalculationIndex";

export default {
    path: 'comissions',
    name: 'comissions',
    component: Comissions,
    children: [
        {
            path: 'comissions-calculation',
            component: ComissionsCalculation,
            children: [
                {path: '', component: ComissionsCalculationIndex, name: 'comissionsCalculation'},
                {path: 'create', component: ComissionsCalculationIndex, name: 'comissionsCalculationCreate'},
                {path: 'edit/:id', component: ComissionsCalculationIndex, name: 'comissionsCalculationEdit'},
                {path: 'view/:id', component: ComissionsCalculationIndex, name: 'comissionsCalculationView'},
            ]
        }
    ]
}