import Registers from "../../../../components/modules/materials/registers/Registers";
import ImportChargeType from "../../../../components/modules/materials/registers/importChargeType/ImportChargeType";
import ImportChargeTypeIndex
    from "../../../../components/modules/materials/registers/importChargeType/ImportChargeTypeIndex";
import ImportChargeTypeForm
    from "../../../../components/modules/materials/registers/importChargeType/ImportChargeTypeForm";
import ProductsVendors from "../../../../components/modules/materials/registers/productsVendors/ProductsVendors";
import ProductsVendorsIndex
    from "../../../../components/modules/materials/registers/productsVendors/ProductsVendorsIndex";
import ProductsVendorsForm
    from "../../../../components/modules/materials/registers/productsVendors/ProductsVendorsForm";

export default {
    path: 'registers',
    name: 'materialRegistes',
    component: Registers,
    children: [
        {
            path: 'import-charge-type',
            component: ImportChargeType,
            children: [
                {path: '', component: ImportChargeTypeIndex, name: 'importChargeType'},
                {path: 'create', component: ImportChargeTypeForm, name: 'importChargeTypeCreate'},
                {path: 'edit/:id', component: ImportChargeTypeForm, name: 'importChargeTypeEdit'},
                {path: 'view/:id', component: ImportChargeTypeForm, name: 'importChargeTypeView'},
            ]
        },
        {
            path: 'products-vendors',
            component: ProductsVendors,
            children: [
                {path: '', component: ProductsVendorsIndex, name: 'productsVendors'},
                {path: 'create', component: ProductsVendorsForm, name: 'productsVendorsCreate'},
                {path: 'edit/:id', component: ProductsVendorsForm, name: 'productsVendorsEdit'},
                {path: 'view/:id', component: ProductsVendorsForm, name: 'productsVendorsView'},
            ]
        }
    ]
}



