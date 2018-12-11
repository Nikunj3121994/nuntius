import Registers from "../../../../components/modules/admin/registers/Registers";
import NatureOperationTypes
    from "../../../../components/modules/admin/registers/natureOperationTypes/NatureOperationTypes";
import NatureOperationTypesIndex
    from "../../../../components/modules/admin/registers/natureOperationTypes/NatureOperationTypesIndex";
import NatureOperationTypesForm
    from "../../../../components/modules/admin/registers/natureOperationTypes/NatureOperationTypesForm";

export default {
    path: 'registers',
    name: 'adminRegistes',
    component: Registers,
    children: [
        {
            path: 'nature-operation-types',
            component: NatureOperationTypes,
            children: [
                {path: '', component: NatureOperationTypesIndex, name: 'natureOperationTypes'},
                {path: 'create', component: NatureOperationTypesForm, name: 'natureOperationTypesCreate'},
                {path: 'edit/:id', component: NatureOperationTypesForm, name: 'natureOperationTypesEdit'},
                {path: 'view/:id', component: NatureOperationTypesForm, name: 'natureOperationTypesView'},
            ]
        }
    ]
}