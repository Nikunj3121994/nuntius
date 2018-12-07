import movements from './movements/routes';
import Sales from '../../../components/modules/sales/Sales'

export default [
    {
        path: '/sales',
        name: 'sales',
        component: Sales,
        children: [
            movements
        ]
    }
]