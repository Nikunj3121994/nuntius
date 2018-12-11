import Registers from "../../../../components/modules/financial/registers/Registers";
import BankAccounts from "../../../../components/modules/financial/registers/bankAccounts/BankAccounts";
import BankAccountsIndex from "../../../../components/modules/financial/registers/bankAccounts/BankAccountsIndex";
import BankAccountsForm from "../../../../components/modules/financial/registers/bankAccounts/BankAccountsForm";
import BankCheckReturnReasons
    from "../../../../components/modules/financial/registers/bankCheckReturnReasons/BankCheckReturnReasons";
import BankCheckReturnReasonsIndex
    from "../../../../components/modules/financial/registers/bankCheckReturnReasons/BankCheckReturnReasonsIndex";
import BankCheckReturnReasonsForm
    from "../../../../components/modules/financial/registers/bankCheckReturnReasons/BankCheckReturnReasonsForm";
import BillTypes from "../../../../components/modules/financial/registers/billTypes/BillTypes";
import BillTypesIndex from "../../../../components/modules/financial/registers/billTypes/BillTypesIndex";
import BillTypesForm from "../../../../components/modules/financial/registers/billTypes/BillTypesForm";
import BusinessUnits from "../../../../components/modules/financial/registers/businessUnits/BusinessUnits";
import BusinessUnitsIndex from "../../../../components/modules/financial/registers/businessUnits/BusinessUnitsIndex";
import BusinessUnitsForm from "../../../../components/modules/financial/registers/businessUnits/BusinessUnitsForm";
import CostCenters from "../../../../components/modules/financial/registers/costCenters/CostCenters";
import CostCentersIndex from "../../../../components/modules/financial/registers/costCenters/CostCentersIndex";
import CostCentersForm from "../../../../components/modules/financial/registers/costCenters/CostCentersForm";
import DeedTypes from "../../../../components/modules/financial/registers/deedTypes/DeedTypes";
import DeedTypesIndex from "../../../../components/modules/financial/registers/deedTypes/DeedTypesIndex";
import DeedTypesForm from "../../../../components/modules/financial/registers/deedTypes/DeedTypesForm";
import FeeTypes from "../../../../components/modules/financial/registers/feeTypes/FeeTypes";
import FeeTypesForm from "../../../../components/modules/financial/registers/feeTypes/FeeTypesForm";
import FeeTypesIndex from "../../../../components/modules/financial/registers/feeTypes/FeeTypesIndex";
import FinancialNatures from "../../../../components/modules/financial/registers/financialNatures/FinancialNatures";
import FinancialNaturesIndex
    from "../../../../components/modules/financial/registers/financialNatures/FinancialNaturesIndex";
import FinancialNaturesForm
    from "../../../../components/modules/financial/registers/financialNatures/FinancialNaturesForm";
import PaymentMeans from "../../../../components/modules/financial/registers/paymentMeans/PaymentMeans";
import PaymentMeansIndex from "../../../../components/modules/financial/registers/paymentMeans/PaymentMeansIndex";
import PaymentMeansForm from "../../../../components/modules/financial/registers/paymentMeans/PaymentMeansForm";
import PaymentRules from "../../../../components/modules/financial/registers/paymentRules/PaymentRules";
import PaymentRulesIndex from "../../../../components/modules/financial/registers/paymentRules/PaymentRulesIndex";
import PaymentRulesForm from "../../../../components/modules/financial/registers/paymentRules/PaymentRulesForm";

export default {
    path: 'registers',
    name: 'financialRegistes',
    component: Registers,
    children: [
        {
            path: 'bank-accounts',
            component: BankAccounts,
            children: [
                {path: '', component: BankAccountsIndex, name: 'bankAccounts'},
                {path: 'create', component: BankAccountsForm, name: 'bankAccountsCreate'},
                {path: 'edit/:id', component: BankAccountsForm, name: 'bankAccountsEdit'},
                {path: 'view/:id', component: BankAccountsForm, name: 'bankAccountsView'},
            ]
        },
        {
            path: 'bank-check-return-reasons',
            component: BankCheckReturnReasons,
            children: [
                {path: '', component: BankCheckReturnReasonsIndex, name: 'bankCheckReturnReasons'},
                {path: 'create', component: BankCheckReturnReasonsForm, name: 'bankCheckReturnReasonsCreate'},
                {path: 'edit/:id', component: BankCheckReturnReasonsForm, name: 'bankCheckReturnReasonsEdit'},
                {path: 'view/:id', component: BankCheckReturnReasonsForm, name: 'bankCheckReturnReasonsView'},
            ]
        },
        {
            path: 'bill-types',
            component: BillTypes,
            children: [
                {path: '', component: BillTypesIndex, name: 'billTypes'},
                {path: 'create', component: BillTypesForm, name: 'billTypesCreate'},
                {path: 'edit/:id', component: BillTypesForm, name: 'billTypesEdit'},
                {path: 'view/:id', component: BillTypesForm, name: 'billTypesView'},
            ]
        },
        {
            path: 'business-units',
            component: BusinessUnits,
            children: [
                {path: '', component: BusinessUnitsIndex, name: 'businessUnits'},
                {path: 'create', component: BusinessUnitsForm, name: 'businessUnitsCreate'},
                {path: 'edit/:id', component: BusinessUnitsForm, name: 'businessUnitsEdit'},
                {path: 'view/:id', component: BusinessUnitsForm, name: 'businessUnitsView'},
            ]
        },
        {
            path: 'cost-centers',
            component: CostCenters,
            children: [
                {path: '', component: CostCentersIndex, name: 'costCenters'},
                {path: 'create', component: CostCentersForm, name: 'costCentersCreate'},
                {path: 'edit/:id', component: CostCentersForm, name: 'costCentersEdit'},
                {path: 'view/:id', component: CostCentersForm, name: 'costCentersView'},
            ]
        },
        {
            path: 'deed-types',
            component: DeedTypes,
            children: [
                {path: '', component: DeedTypesIndex, name: 'deedTypes'},
                {path: 'create', component: DeedTypesForm, name: 'deedTypesCreate'},
                {path: 'edit/:id', component: DeedTypesForm, name: 'deedTypesEdit'},
                {path: 'view/:id', component: DeedTypesForm, name: 'deedTypesView'},
            ]
        },
        {
            path: 'fee-types',
            component: FeeTypes,
            children: [
                {path: '', component: FeeTypesIndex, name: 'feeTypes'},
                {path: 'create', component: FeeTypesForm, name: 'feeTypesCreate'},
                {path: 'edit/:id', component: FeeTypesForm, name: 'feeTypesEdit'},
                {path: 'view/:id', component: FeeTypesForm, name: 'feeTypesView'},
            ]
        },
        {
            path: 'financial-natures',
            component: FinancialNatures,
            children: [
                {path: '', component: FinancialNaturesIndex, name: 'financialNatures'},
                {path: 'create', component: FinancialNaturesForm, name: 'financialNaturesCreate'},
                {path: 'edit/:id', component: FinancialNaturesForm, name: 'financialNaturesEdit'},
                {path: 'view/:id', component: FinancialNaturesForm, name: 'financialNaturesView'},
            ]
        },
        {
            path: 'payment-means',
            component: PaymentMeans,
            children: [
                {path: '', component: PaymentMeansIndex, name: 'paymentMeans'},
                {path: 'create', component: PaymentMeansForm, name: 'paymentMeansCreate'},
                {path: 'edit/:id', component: PaymentMeansForm, name: 'paymentMeansEdit'},
                {path: 'view/:id', component: PaymentMeansForm, name: 'paymentMeansView'},
            ]
        },
        {
            path: 'payment-rules',
            component: PaymentRules,
            children: [
                {path: '', component: PaymentRulesIndex, name: 'paymentRules'},
                {path: 'create', component: PaymentRulesForm, name: 'paymentRulesCreate'},
                {path: 'edit/:id', component: PaymentRulesForm, name: 'paymentRulesEdit'},
                {path: 'view/:id', component: PaymentRulesForm, name: 'paymentRulesView'},
            ]
        }
    ]
}