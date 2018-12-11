import Bills from "../../../../components/modules/financial/bills/Bills";
import AdvancePayments from "../../../../components/modules/financial/bills/advancePayments/AdvancePayments";
import AdvancePaymentsIndex from "../../../../components/modules/financial/bills/advancePayments/AdvancePaymentsIndex";
import AdvancePaymentsForm from "../../../../components/modules/financial/bills/advancePayments/AdvancePaymentsForm";
import Fees from "../../../../components/modules/financial/bills/fees/Fees";
import FeesIndex from "../../../../components/modules/financial/bills/fees/FeesIndex";
import FeesForm from "../../../../components/modules/financial/bills/fees/FeesForm";
import FinancialPosts from "../../../../components/modules/financial/bills/financialPostsPayments/FinancialPosts";
import FinancialPostsIndex
    from "../../../../components/modules/financial/bills/financialPostsPayments/FinancialPostsIndex";
import FinancialPostsForm
    from "../../../../components/modules/financial/bills/financialPostsPayments/FinancialPostsForm";
import PaymentPosts from "../../../../components/modules/financial/bills/paymentPosts/PaymentPosts";
import PaymentPostsIndex from "../../../../components/modules/financial/bills/paymentPosts/PaymentPostsIndex";
import PaymentPostsForm from "../../../../components/modules/financial/bills/paymentPosts/PaymentPostsForm";
import Payments from "../../../../components/modules/financial/bills/payments/Payments";
import PaymentsIndex from "../../../../components/modules/financial/bills/payments/PaymentsIndex";
import PaymentsForm from "../../../../components/modules/financial/bills/payments/PaymentsForm";

export default {
    path: 'bills',
    name: 'financialBills',
    component: Bills,
    children: [
        {
            path: 'advance-payments',
            component: AdvancePayments,
            children: [
                {path: '', component: AdvancePaymentsIndex, name: 'advancePayments'},
                {path: 'create', component: AdvancePaymentsForm, name: 'advancePaymentsCreate'},
                {path: 'edit/:id', component: AdvancePaymentsForm, name: 'advancePaymentsEdit'},
                {path: 'view/:id', component: AdvancePaymentsForm, name: 'advancePaymentsView'},
            ]
        },
        {
            path: 'fees',
            component: Fees,
            children: [
                {path: '', component: FeesIndex, name: 'fees'},
                {path: 'create', component: FeesForm, name: 'feesCreate'},
                {path: 'edit/:id', component: FeesForm, name: 'feesEdit'},
                {path: 'view/:id', component: FeesForm, name: 'feesView'},
            ]
        },
        {
            path: 'financial-posts',
            component: FinancialPosts,
            children: [
                {path: '', component: FinancialPostsIndex, name: 'financialPostsPayments'},
                {path: 'create', component: FinancialPostsForm, name: 'financialPostsPaymentsCreate'},
                {path: 'edit/:id', component: FinancialPostsForm, name: 'financialPostsPaymentsEdit'},
                {path: 'view/:id', component: FinancialPostsForm, name: 'financialPostsPaymentsView'},
            ]
        },
        {
            path: 'payment-posts',
            component: PaymentPosts,
            children: [
                {path: '', component: PaymentPostsIndex, name: 'paymentPosts'},
                {path: 'create', component: PaymentPostsForm, name: 'paymentPostsCreate'},
                {path: 'edit/:id', component: PaymentPostsForm, name: 'paymentPostsEdit'},
                {path: 'view/:id', component: PaymentPostsForm, name: 'paymentPostsView'},
            ]
        },
        {
            path: 'payments',
            component: Payments,
            children: [
                {path: '', component: PaymentsIndex, name: 'payments'},
                {path: 'create', component: PaymentsForm, name: 'paymentsCreate'},
                {path: 'edit/:id', component: PaymentsForm, name: 'paymentsEdit'},
                {path: 'view/:id', component: PaymentsForm, name: 'paymentsView'},
            ]
        },
    ]
}