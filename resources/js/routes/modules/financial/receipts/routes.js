import Receipts from "../../../../components/modules/financial/receipts/Receipts";
import BankChecks from "../../../../components/modules/financial/receipts/bankChecks/BankChecks";
import BankChecksIndex from "../../../../components/modules/financial/receipts/bankChecks/BankChecksIndex";
import BankChecksForm from "../../../../components/modules/financial/receipts/bankChecks/BankChecksForm";
import FidcDebts from "../../../../components/modules/financial/receipts/fidcDebts/FidcDebts";
import FidcDebtsIndex from "../../../../components/modules/financial/receipts/fidcDebts/FidcDebtsIndex";
import FidcDebtsForm from "../../../../components/modules/financial/receipts/fidcDebts/FidcDebtsForm";
import FinancialPosts from "../../../../components/modules/financial/receipts/financialPostsReceitps/FinancialPosts";
import FinancialPostsIndex
    from "../../../../components/modules/financial/receipts/financialPostsReceitps/FinancialPostsIndex";
import FinancialPostsForm
    from "../../../../components/modules/financial/bills/financialPostsPayments/FinancialPostsForm";
import Incomings from "../../../../components/modules/financial/receipts/incomings/Incomings";
import IncomingsIndex from "../../../../components/modules/financial/receipts/incomings/IncomingsIndex";
import IncomingsForm from "../../../../components/modules/financial/receipts/incomings/IncomingsForm";
import ReceiptLists from "../../../../components/modules/financial/receipts/receiptLists/ReceiptLists";
import ReceiptListsIndex from "../../../../components/modules/financial/receipts/receiptLists/ReceiptListsIndex";
import ReceiptListsForm from "../../../../components/modules/financial/receipts/receiptLists/ReceiptListsForm";
import ReceiptPosts from "../../../../components/modules/financial/receipts/receiptPosts/ReceiptPosts";
import ReceiptPostsIndex from "../../../../components/modules/financial/receipts/receiptPosts/ReceiptPostsIndex";
import Receivables from "../../../../components/modules/financial/receipts/receivables/Receivables";
import ReceivablesIndex from "../../../../components/modules/financial/receipts/receivables/ReceivablesIndex";
import ReceiptPostsForm from "../../../../components/modules/financial/receipts/receiptPosts/ReceiptPostsForm";
import ReceivablesForm from "../../../../components/modules/financial/receipts/receivables/ReceivablesForm";

export default {
    path: 'receipts',
    name: 'financialReceipts',
    component: Receipts,
    children: [
        {
            path: 'bank-checks',
            component: BankChecks,
            children: [
                {path: '', component: BankChecksIndex, name: 'bankChecks'},
                {path: 'create', component: BankChecksForm, name: 'bankChecksCreate'},
                {path: 'edit/:id', component: BankChecksForm, name: 'bankChecksEdit'},
                {path: 'view/:id', component: BankChecksForm, name: 'bankChecksView'},
            ]
        },
        {
            path: 'fidc-debts',
            component: FidcDebts,
            children: [
                {path: '', component: FidcDebtsIndex, name: 'fidcDebts'},
                {path: 'create', component: FidcDebtsForm, name: 'fidcDebtsCreate'},
                {path: 'edit/:id', component: FidcDebtsForm, name: 'fidcDebtsEdit'},
                {path: 'view/:id', component: FidcDebtsForm, name: 'fidcDebtsView'},
            ]
        },
        {
            path: 'financial-posts',
            component: FinancialPosts,
            children: [
                {path: '', component: FinancialPostsIndex, name: 'financialPostsReceipts'},
                {path: 'create', component: FinancialPostsForm, name: 'financialPostsReceiptsCreate'},
                {path: 'edit/:id', component: FinancialPostsForm, name: 'financialPostsReceiptsEdit'},
                {path: 'view/:id', component: FinancialPostsForm, name: 'financialPostsReceiptsView'},
            ]
        },
        {
            path: 'incomings',
            component: Incomings,
            children: [
                {path: '', component: IncomingsIndex, name: 'incomings'},
                {path: 'create', component: IncomingsForm, name: 'incomingsCreate'},
                {path: 'edit/:id', component: IncomingsForm, name: 'incomingsEdit'},
                {path: 'view/:id', component: IncomingsForm, name: 'incomingsView'},
            ]
        },
        {
            path: 'receipt-lists',
            component: ReceiptLists,
            children: [
                {path: '', component: ReceiptListsIndex, name: 'receiptLists'},
                {path: 'create', component: ReceiptListsForm, name: 'receiptListsCreate'},
                {path: 'edit/:id', component: ReceiptListsForm, name: 'receiptListsEdit'},
                {path: 'view/:id', component: ReceiptListsForm, name: 'receiptListsView'},
            ]
        },
        {
            path: 'receipt-posts',
            component: ReceiptPosts,
            children: [
                {path: '', component: ReceiptPostsIndex, name: 'receiptPosts'},
                {path: 'create', component: ReceiptPostsForm, name: 'receiptPostsCreate'},
                {path: 'edit/:id', component: ReceiptPostsForm, name: 'receiptPostsEdit'},
                {path: 'view/:id', component: ReceiptPostsForm, name: 'receiptPostsView'},
            ]
        },
        {
            path: 'receivables',
            component: Receivables,
            children: [
                {path: '', component: ReceivablesIndex, name: 'receivables'},
                {path: 'create', component: ReceivablesForm, name: 'receivablesCreate'},
                {path: 'edit/:id', component: ReceivablesForm, name: 'receivablesEdit'},
                {path: 'view/:id', component: ReceivablesForm, name: 'receivablesView'},
            ]
        }
    ]
}