import Reports from "../../../../components/modules/stocks/reports/Reports";
import BookInventory from "../../../../components/modules/stocks/reports/bookInventory/BookInventory";
import BookInventoryIndex from "../../../../components/modules/stocks/reports/bookInventory/BookInventoryIndex";
import ProductBalance from "../../../../components/modules/stocks/reports/productBalance/ProductBalance";
import ProductBalanceIndex from "../../../../components/modules/stocks/reports/productBalance/ProductBalanceIndex";
import StockCosts from "../../../../components/modules/stocks/reports/stockCosts/StockCosts";
import StockCostsIndex from "../../../../components/modules/stocks/reports/stockCosts/StockCostsIndex";

export default {
    path: 'reports',
    name: 'stockReports',
    component: Reports,
    children: [
        {
            path: 'book-inventory',
            component: BookInventory,
            children: [
                {path: '', component: BookInventoryIndex, name: 'bookInventoryReport'}
            ]
        },
        {
            path: 'product-balance',
            component: ProductBalance,
            children: [
                {path: '', component: ProductBalanceIndex, name: 'productBalanceReport'}
            ]
        },
        {
            path: 'stock-costs',
            component: StockCosts,
            children: [
                {path: '', component: StockCostsIndex, name: 'stockCostsReport'}
            ]
        }
    ]
}