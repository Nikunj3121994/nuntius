import Reports from "../../../../components/modules/sales/reports/Reports";
import ComissionsQuery from "../../../../components/modules/sales/reports/comissionsQuery/ComissionsQuery";
import ComissionsQueryIndex from "../../../../components/modules/sales/reports/comissionsQuery/ComissionsQueryIndex";
import SalesSummary from "../../../../components/modules/sales/reports/salesSummary/SalesSummary";
import SalesSummaryIndex from "../../../../components/modules/sales/reports/salesSummary/SalesSummaryIndex";
import SellersComissions from "../../../../components/modules/sales/reports/sellersComissions/SellersComissions";
import SellersComissionsIndex
    from "../../../../components/modules/sales/reports/sellersComissions/SellersComissionsIndex";

export default {
    path: 'reports',
    name: 'salesReports',
    component: Reports,
    children: [
        {
            path: 'comissions-query',
            component: ComissionsQuery,
            children: [
                {path: '', component: ComissionsQueryIndex, name: 'comssionsQueryReport'}
            ]
        },
        {
            path: 'sales-summary',
            component: SalesSummary,
            children: [
                {path: '', component: SalesSummaryIndex, name: 'salesSummaryReport'}
            ]
        },
        {
            path: 'sellers-comissions',
            component: SellersComissions,
            children: [
                {path: '', component: SellersComissionsIndex, name: 'sellersComissionsReport'}
            ]
        }
    ]
}