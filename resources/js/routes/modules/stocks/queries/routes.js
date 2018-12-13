import Queries from "../../../../components/modules/stocks/queries/Queries";
import DetailedProductMovement
    from "../../../../components/modules/stocks/queries/detailedProductMovement/DetailedProductMovement";
import DetailedProductMovementIndex
    from "../../../../components/modules/stocks/queries/detailedProductMovement/DetailedProductMovementIndex";
import ProductBalance from "../../../../components/modules/stocks/queries/productBalance/ProductBalance";
import ProductBalanceIndex from "../../../../components/modules/stocks/queries/productBalance/ProductBalanceIndex";
import WarehouseBalance from "../../../../components/modules/stocks/queries/warehouseBalance/WarehouseBalance";
import WarehouseBalanceIndex
    from "../../../../components/modules/stocks/queries/warehouseBalance/WarehouseBalanceIndex";

export default {
    path: 'queries',
    name: 'stockQueries',
    component: Queries,
    children: [
        {
            path: 'detailed-product-movement',
            component: DetailedProductMovement,
            children: [
                {path: '', component: DetailedProductMovementIndex, name: 'detailedProductMovementQuery'}
            ]
        },
        {
            path: 'product-balance',
            component: ProductBalance,
            children: [
                {path: '', component: ProductBalanceIndex, name: 'productBalanceQuery'}
            ]
        },
        {
            path: 'warehouse-transfer',
            component: WarehouseBalance,
            children: [
                {path: '', component: WarehouseBalanceIndex, name: 'warehouseBalanceQuery'}
            ]
        }
    ]
}