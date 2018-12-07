import movements from './movements/routes';
import Logistics from '../../../components/modules/logistics/Logistics';

export default [
    {
        path: '/logistics',
        name: 'logistics',
        component: Logistics,
        children: [
            movements
        ]
    }
]