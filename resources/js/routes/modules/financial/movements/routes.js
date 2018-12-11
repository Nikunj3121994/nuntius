import Movements from "../../../../components/modules/financial/movements/Movements";
import BankTransfer from "../../../../components/modules/financial/movements/bankTransfer/BankTransfer";
import BankTransferIndex from "../../../../components/modules/financial/movements/bankTransfer/BankTransferIndex";
import BankTransferForm from "../../../../components/modules/financial/movements/bankTransfer/BankTransferForm";
import PayableCompensations
    from "../../../../components/modules/financial/movements/payableCompensations/PayableCompensations";
import PayableCompensationsIndex
    from "../../../../components/modules/financial/movements/payableCompensations/PayableCompensationsIndex";
import PayableCompensationsForm
    from "../../../../components/modules/financial/movements/payableCompensations/PayableCompensationsForm";
import ReceiptsCompensations
    from "../../../../components/modules/financial/movements/receiptsCompensations/ReceiptsCompensations";
import ReceiptsCompensationsIndex
    from "../../../../components/modules/financial/movements/receiptsCompensations/ReceiptsCompensationsIndex";
import ReceiptsCompensationsForm
    from "../../../../components/modules/financial/movements/receiptsCompensations/ReceiptsCompensationsForm";

export default {
    path: 'movements',
    name: 'financialMovements',
    component: Movements,
    children: [
        {
            path: 'bank-transfer',
            component: BankTransfer,
            children: [
                {path: '', component: BankTransferIndex, name: 'bankTransfer'},
                {path: 'create', component: BankTransferForm, name: 'bankTransferCreate'},
                {path: 'edit/:id', component: BankTransferForm, name: 'bankTransferEdit'},
                {path: 'view/:id', component: BankTransferForm, name: 'bankTransferView'},
            ]
        },
        {
            path: 'payable-compensations',
            component: PayableCompensations,
            children: [
                {path: '', component: PayableCompensationsIndex, name: 'payableCompensations'},
                {path: 'create', component: PayableCompensationsForm, name: 'payableCompensationsCreate'},
                {path: 'edit/:id', component: PayableCompensationsForm, name: 'payableCompensationsEdit'},
                {path: 'view/:id', component: PayableCompensationsForm, name: 'payableCompensationsView'},
            ]
        },
        {
            path: 'receipts-compensations',
            component: ReceiptsCompensations,
            children: [
                {path: '', component: ReceiptsCompensationsIndex, name: 'receiptsCompensations'},
                {path: 'create', component: ReceiptsCompensationsForm, name: 'receiptsCompensationsCreate'},
                {path: 'edit/:id', component: ReceiptsCompensationsForm, name: 'receiptsCompensationsEdit'},
                {path: 'view/:id', component: ReceiptsCompensationsForm, name: 'receiptsCompensationsView'},
            ]
        }
    ]
}