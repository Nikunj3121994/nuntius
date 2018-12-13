import movements from './movements/routes';
import registers from './registers/routes';
import Production from "../../../components/modules/production/Production";

export default [
    {
        path: '/production',
        name: 'production',
        component: Production,
        children: [
            movements,
            registers
        ]
    }
]