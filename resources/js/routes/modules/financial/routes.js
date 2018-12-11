import bills from './bills/routes';
import movements from './movements/routes';
import receipts from './receipts/routes';
import registers from './registers/routes';
import reports from './reports/routes';
import Financial from "../../../components/modules/financial/Financial";

export default [
    {
        path: '/financial',
        name: 'financial',
        component: Financial,
        children: [
            bills,
            movements,
            registers,
            receipts,
            reports
        ]
    }
]