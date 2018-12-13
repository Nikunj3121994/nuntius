import Movements from "../../../../components/modules/stocks/movements/Movements";
import ManualStockOuts from "../../../../components/modules/stocks/movements/manualStockOuts/ManualStockOuts";
import ManualStockOutsIndex from "../../../../components/modules/stocks/movements/manualStockOuts/ManualStockOutsIndex";
import ManualStockOutsForm from "../../../../components/modules/stocks/movements/manualStockOuts/ManualStockOutsForm";
import OpeningBalances from "../../../../components/modules/stocks/movements/openingBalances/OpeningBalances";
import OpeningBalancesIndex from "../../../../components/modules/stocks/movements/openingBalances/OpeningBalancesIndex";
import OpeningBalancesForm from "../../../../components/modules/stocks/movements/openingBalances/OpeningBalancesForm";
import ProductTransfer from "../../../../components/modules/stocks/movements/productTransfer/ProductTransfer";
import ProductTransferIndex from "../../../../components/modules/stocks/movements/productTransfer/ProductTransferIndex";
import ProductTransferForm from "../../../../components/modules/stocks/movements/productTransfer/ProductTransferForm";
import StockReservations from "../../../../components/modules/stocks/movements/stockReservations/StockReservations";
import StockReservationsIndex
    from "../../../../components/modules/stocks/movements/stockReservations/StockReservationsIndex";
import StockReservationsForm
    from "../../../../components/modules/stocks/movements/stockReservations/StockReservationsForm";
import StockTransfer from "../../../../components/modules/stocks/movements/stockTransfer/StockTransfer";
import StockTransferIndex from "../../../../components/modules/stocks/movements/stockTransfer/StockTransferIndex";
import StockTransferForm from "../../../../components/modules/stocks/movements/stockTransfer/StockTransferForm";

export default {
    path: 'movements',
    name: 'stockMovements',
    component: Movements,
    children: [
        {
            path: 'manual-stock-outs',
            component: ManualStockOuts,
            children: [
                {path: '', component: ManualStockOutsIndex, name: 'manualStockOuts'},
                {path: 'create', component: ManualStockOutsForm, name: 'manualStockOutsCreate'},
                {path: 'edit/:id', component: ManualStockOutsForm, name: 'manualStockOutsEdit'},
                {path: 'view/:id', component: ManualStockOutsForm, name: 'manualStockOutsView'},
            ]
        },
        {
            path: 'opening-balances',
            component: OpeningBalances,
            children: [
                {path: '', component: OpeningBalancesIndex, name: 'openingBalances'},
                {path: 'create', component: OpeningBalancesForm, name: 'openingBalancesCreate'},
                {path: 'edit/:id', component: OpeningBalancesForm, name: 'openingBalancesEdit'},
                {path: 'view/:id', component: OpeningBalancesForm, name: 'openingBalancesView'},
            ]
        },
        {
            path: 'product-transfer',
            component: ProductTransfer,
            children: [
                {path: '', component: ProductTransferIndex, name: 'productTransfer'},
                {path: 'create', component: ProductTransferForm, name: 'productTransferCreate'},
                {path: 'edit/:id', component: ProductTransferForm, name: 'productTransferEdit'},
                {path: 'view/:id', component: ProductTransferForm, name: 'productTransferView'},
            ]
        },
        {
            path: 'stock-reservations',
            component: StockReservations,
            children: [
                {path: '', component: StockReservationsIndex, name: 'stockReservations'},
                {path: 'create', component: StockReservationsForm, name: 'stockReservationsCreate'},
                {path: 'edit/:id', component: StockReservationsForm, name: 'stockReservationsEdit'},
                {path: 'view/:id', component: StockReservationsForm, name: 'stockReservationsView'},
            ]
        },
        {
            path: 'stock-transfer',
            component: StockTransfer,
            children: [
                {path: '', component: StockTransferIndex, name: 'stockTransfer'},
                {path: 'create', component: StockTransferForm, name: 'stockTransferCreate'},
                {path: 'edit/:id', component: StockTransferForm, name: 'stockTransferEdit'},
                {path: 'view/:id', component: StockTransferForm, name: 'stockTransferView'},
            ]
        }
    ]
}