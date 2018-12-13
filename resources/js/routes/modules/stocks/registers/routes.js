import Registers from "../../../../components/modules/stocks/registers/Registers";
import MeasurementUnits from "../../../../components/modules/stocks/registers/measurementUnits/MeasurementUnits";
import MeasurementUnitsIndex
    from "../../../../components/modules/stocks/registers/measurementUnits/MeasurementUnitsIndex";
import MeasurementUnitsForm
    from "../../../../components/modules/stocks/registers/measurementUnits/MeasurementUnitsForm";
import ProductBatches from "../../../../components/modules/stocks/registers/productBatches/ProductBatches";
import ProductBatchesIndex from "../../../../components/modules/stocks/registers/productBatches/ProductBatchesIndex";
import ProductBatchesForm from "../../../../components/modules/stocks/registers/productBatches/ProductBatchesForm";
import ProductCategories from "../../../../components/modules/stocks/registers/productCategories/ProductCategories";
import ProductCategoriesIndex
    from "../../../../components/modules/stocks/registers/productCategories/ProductCategoriesIndex";
import ProductCategoriesForm
    from "../../../../components/modules/stocks/registers/productCategories/ProductCategoriesForm";
import ProductGroups from "../../../../components/modules/stocks/registers/productGroups/ProductGroups";
import ProductGroupsIndex from "../../../../components/modules/stocks/registers/productGroups/ProductGroupsIndex";
import ProductGroupsForm from "../../../../components/modules/stocks/registers/productGroups/ProductGroupsForm";
import Products from "../../../../components/modules/stocks/registers/products/Products";
import ProductsIndex from "../../../../components/modules/stocks/registers/products/ProductsIndex";
import ProductsForm from "../../../../components/modules/stocks/registers/products/ProductsForm";
import Warehouses from "../../../../components/modules/stocks/registers/warehouses/Warehouses";
import WarehousesIndex from "../../../../components/modules/stocks/registers/warehouses/WarehousesIndex";
import WarehousesForm from "../../../../components/modules/stocks/registers/warehouses/WarehousesForm";

export default {
    path: 'registers',
    name: 'stockRegisters',
    component: Registers,
    children: [
        {
            path: 'measurement-units',
            component: MeasurementUnits,
            children: [
                {path: '', component: MeasurementUnitsIndex, name: 'measurementUnits'},
                {path: 'create', component: MeasurementUnitsForm, name: 'measurementUnitsCreate'},
                {path: 'edit/:id', component: MeasurementUnitsForm, name: 'measurementUnitsEdit'},
                {path: 'view/:id', component: MeasurementUnitsForm, name: 'measurementUnitsView'},
            ]
        },
        {
            path: 'product-batches',
            component: ProductBatches,
            children: [
                {path: '', component: ProductBatchesIndex, name: 'productBatches'},
                {path: 'create', component: ProductBatchesForm, name: 'productBatchesCreate'},
                {path: 'edit/:id', component: ProductBatchesForm, name: 'productBatchesEdit'},
                {path: 'view/:id', component: ProductBatchesForm, name: 'productBatchesView'},
            ]
        },
        {
            path: 'product-categories',
            component: ProductCategories,
            children: [
                {path: '', component: ProductCategoriesIndex, name: 'productCategories'},
                {path: 'create', component: ProductCategoriesForm, name: 'productCategoriesCreate'},
                {path: 'edit/:id', component: ProductCategoriesForm, name: 'productCategoriesEdit'},
                {path: 'view/:id', component: ProductCategoriesForm, name: 'productCategoriesView'},
            ]
        },
        {
            path: 'product-groups',
            component: ProductGroups,
            children: [
                {path: '', component: ProductGroupsIndex, name: 'productGroups'},
                {path: 'create', component: ProductGroupsForm, name: 'productGroupsCreate'},
                {path: 'edit/:id', component: ProductGroupsForm, name: 'productGroupsEdit'},
                {path: 'view/:id', component: ProductGroupsForm, name: 'productGroupsView'},
            ]
        },
        {
            path: 'products',
            component: Products,
            children: [
                {path: '', component: ProductsIndex, name: 'products'},
                {path: 'create', component: ProductsForm, name: 'productsCreate'},
                {path: 'edit/:id', component: ProductsForm, name: 'productsEdit'},
                {path: 'view/:id', component: ProductsForm, name: 'productsView'},
            ]
        },
        {
            path: 'warehouses',
            component: Warehouses,
            children: [
                {path: '', component: WarehousesIndex, name: 'warehouses'},
                {path: 'create', component: WarehousesForm, name: 'warehousesCreate'},
                {path: 'edit/:id', component: WarehousesForm, name: 'warehousesEdit'},
                {path: 'view/:id', component: WarehousesForm, name: 'warehousesView'},
            ]
        }
    ]
}