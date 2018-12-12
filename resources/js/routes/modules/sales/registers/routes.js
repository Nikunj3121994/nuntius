import Registers from "../../../../components/modules/sales/registers/Registers";
import FromToCfop from "../../../../components/modules/sales/registers/fromToCfop/FromToCfop";
import FromToCfopIndex from "../../../../components/modules/sales/registers/fromToCfop/FromToCfopIndex";
import FromToCfopForm from "../../../../components/modules/sales/registers/fromToCfop/FromToCfopForm";
import InvoiceSeries from "../../../../components/modules/sales/registers/invoiceSeries/InvoiceSeries";
import InvoiceSeriesIndex from "../../../../components/modules/sales/registers/invoiceSeries/InvoiceSeriesIndex";
import InvoiceSeriesForm from "../../../../components/modules/sales/registers/invoiceSeries/InvoiceSeriesForm";
import MarkupVariables from "../../../../components/modules/sales/registers/markupVariables/MarkupVariables";
import MarkupVariablesIndex from "../../../../components/modules/sales/registers/markupVariables/MarkupVariablesIndex";
import MarkupVariablesForm from "../../../../components/modules/sales/registers/markupVariables/MarkupVariablesForm";
import NatureOperations from "../../../../components/modules/sales/registers/natureOperations/NatureOperations";
import NatureOperationsForm from "../../../../components/modules/sales/registers/natureOperations/NatureOperationsForm";
import PriceTables from "../../../../components/modules/sales/registers/priceTables/PriceTables";
import PriceTablesIndex from "../../../../components/modules/sales/registers/priceTables/PriceTablesIndex";
import PriceTablesForm from "../../../../components/modules/sales/registers/priceTables/PriceTablesForm";
import SalesGroups from "../../../../components/modules/sales/registers/salesGroups/SalesGroups";
import SalesGroupsIndex from "../../../../components/modules/sales/registers/salesGroups/SalesGroupsIndex";
import SalesGroupsForm from "../../../../components/modules/sales/registers/salesGroups/SalesGroupsForm";
import TaxParametrizations
    from "../../../../components/modules/sales/registers/taxParametrizations/TaxParametrizations";
import TaxParametrizationsIndex
    from "../../../../components/modules/sales/registers/taxParametrizations/TaxParametrizationsIndex";
import TaxParametrizationsForm
    from "../../../../components/modules/sales/registers/taxParametrizations/TaxParametrizationsForm";
import NatureOperationsIndex
    from "../../../../components/modules/sales/registers/natureOperations/NatureOperationsIndex";

export default {
    path: 'registers',
    name: 'salesRegisters',
    component: Registers,
    children: [
        {
            path: 'from-to-cfop',
            component: FromToCfop,
            children: [
                {path: '', component: FromToCfopIndex, name: 'fromToCfop'},
                {path: 'create', component: FromToCfopForm, name: 'fromToCfopCreate'},
                {path: 'edit/:id', component: FromToCfopForm, name: 'fromToCfopEdit'},
                {path: 'view/:id', component: FromToCfopForm, name: 'fromToCfopView'},
            ]
        },
        {
            path: 'invoice-series',
            component: InvoiceSeries,
            children: [
                {path: '', component: InvoiceSeriesIndex, name: 'invoiceSeries'},
                {path: 'create', component: InvoiceSeriesForm, name: 'invoiceSeriesCreate'},
                {path: 'edit/:id', component: InvoiceSeriesForm, name: 'invoiceSeriesEdit'},
                {path: 'view/:id', component: InvoiceSeriesForm, name: 'invoiceSeriesView'},
            ]
        },
        {
            path: 'markup-variables',
            component: MarkupVariables,
            children: [
                {path: '', component: MarkupVariablesIndex, name: 'markupVariables'},
                {path: 'create', component: MarkupVariablesForm, name: 'markupVariablesCreate'},
                {path: 'edit/:id', component: MarkupVariablesForm, name: 'markupVariablesEdit'},
                {path: 'view/:id', component: MarkupVariablesForm, name: 'markupVariablesView'},
            ]
        },
        {
            path: 'nature-operations',
            component: NatureOperations,
            children: [
                {path: '', component: NatureOperationsIndex, name: 'natureOperations'},
                {path: 'create', component: NatureOperationsForm, name: 'natureOperationsCreate'},
                {path: 'edit/:id', component: NatureOperationsForm, name: 'natureOperationsEdit'},
                {path: 'view/:id', component: NatureOperationsForm, name: 'natureOperationsView'},
            ]
        },
        {
            path: 'price-tables',
            component: PriceTables,
            children: [
                {path: '', component: PriceTablesIndex, name: 'priceTables'},
                {path: 'create', component: PriceTablesForm, name: 'priceTablesCreate'},
                {path: 'edit/:id', component: PriceTablesForm, name: 'priceTablesEdit'},
                {path: 'view/:id', component: PriceTablesForm, name: 'priceTablesView'},
            ]
        },
        {
            path: 'sales-groups',
            component: SalesGroups,
            children: [
                {path: '', component: SalesGroupsIndex, name: 'salesGroups'},
                {path: 'create', component: SalesGroupsForm, name: 'salesGroupsCreate'},
                {path: 'edit/:id', component: SalesGroupsForm, name: 'salesGroupsEdit'},
                {path: 'view/:id', component: SalesGroupsForm, name: 'salesGroupsView'},
            ]
        },
        {
            path: 'tax-parametrizations',
            component: TaxParametrizations,
            children: [
                {path: '', component: TaxParametrizationsIndex, name: 'taxParametrizations'},
                {path: 'create', component: TaxParametrizationsForm, name: 'taxParametrizationsCreate'},
                {path: 'edit/:id', component: TaxParametrizationsForm, name: 'taxParametrizationsEdit'},
                {path: 'view/:id', component: TaxParametrizationsForm, name: 'taxParametrizationsView'},
            ]
        }
    ]
}