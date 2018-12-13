import movements from './movements/routes';
import queries from './queries/routes';
import reports from './reports/routes';
import registers from './registers/routes';
import Stocks from "../../../components/modules/stocks/Stocks";

export default [
    {
        path: '/stocks',
        name: 'stocks',
        component: Stocks,
        children: [
            movements,
            queries,
            registers,
            reports
        ]
    }
]