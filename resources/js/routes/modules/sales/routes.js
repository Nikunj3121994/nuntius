import movements from './movements/routes';
import comissions from './comissions/routes';
import registers from './registers/routes';
import reports from './reports/routes';
import Sales from '../../../components/modules/sales/Sales'

export default [
    {
        path: '/sales',
        name: 'sales',
        component: Sales,
        children: [
            movements,
            comissions,
            registers,
            reports
        ]
    }
]