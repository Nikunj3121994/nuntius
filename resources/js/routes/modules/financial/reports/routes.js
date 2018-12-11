import Reports from "../../../../components/modules/financial/reports/Reports";
import BankStatement from "../../../../components/modules/financial/reports/bankStatement/BankStatement";
import BankStatementIndex from "../../../../components/modules/financial/reports/bankStatement/BankStatementIndex";
import FinancialMovementsDetailed
    from "../../../../components/modules/financial/reports/financialMovementsDetailed/FinancialMovementsDetailed";
import FinancialMovementsDetailedIndex
    from "../../../../components/modules/financial/reports/financialMovementsDetailed/FinancialMovementsDetailedIndex";
import Payments from "../../../../components/modules/financial/reports/payments/Payments";
import PaymentsIndex from "../../../../components/modules/financial/reports/payments/PaymentsIndex";
import PaymentsList from "../../../../components/modules/financial/reports/paymentsList/PaymentsList";
import PaymentsListIndex from "../../../../components/modules/financial/reports/paymentsList/PaymentsListIndex";
import PaymentWriteOffsList
    from "../../../../components/modules/financial/reports/paymentWriteOffsList/PaymentWriteOffsList";
import PaymentWriteOffsListIndex
    from "../../../../components/modules/financial/reports/paymentWriteOffsList/PaymentWriteOffsListIndex";
import Receipts from "../../../../components/modules/financial/reports/receipts/Receipts";
import ReceiptsIndex from "../../../../components/modules/financial/reports/receipts/ReceiptsIndex";
import ReceiptsList from "../../../../components/modules/financial/reports/receiptsList/ReceiptsList";
import ReceiptsListIndex from "../../../../components/modules/financial/reports/receiptsList/ReceiptsListIndex";
import SummaryDebts from "../../../../components/modules/financial/reports/summaryDebts/SummaryDebts";
import SummaryDebtsIndex from "../../../../components/modules/financial/reports/summaryDebts/SummaryDebtsIndex";

export default {
    path: 'reports',
    name: 'financialReports',
    component: Reports,
    children: [
        {
            path: 'bank-statement',
            component: BankStatement,
            children: [
                {path: '', component: BankStatementIndex, name: 'bankStatementReport'}
            ]
        },
        {
            path: 'financial-movements-detailed',
            component: FinancialMovementsDetailed,
            children: [
                {path: '', component: FinancialMovementsDetailedIndex, name: 'financialMovementsDetailedReport'}
            ]
        },
        {
            path: 'payments',
            component: Payments,
            children: [
                {path: '', component: PaymentsIndex, name: 'paymentsReport'}
            ]
        },
        {
            path: 'payments-list',
            component: PaymentsList,
            children: [
                {path: '', component: PaymentsListIndex, name: 'paymentsListReport'}
            ]
        },
        {
            path: 'payment-write-off-list',
            component: PaymentWriteOffsList,
            children: [
                {path: '', component: PaymentWriteOffsListIndex, name: 'paymentWriteOffListReport'}
            ]
        },
        {
            path: 'receipts',
            component: Receipts,
            children: [
                {path: '', component: ReceiptsIndex, name: 'receiptsReport'}
            ]
        },
        {
            path: 'receipts-list',
            component: ReceiptsList,
            children: [
                {path: '', component: ReceiptsListIndex, name: 'receiptsListReport'}
            ]
        },
        {
            path: 'summary-debts',
            component: SummaryDebts,
            children: [
                {path: '', component: SummaryDebtsIndex, name: 'summaryDebtsReport'}
            ]
        }
    ]
}