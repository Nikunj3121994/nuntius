import configuration from './configuration/routes';
import parametrizations from './parametrizations/routes';
import registers from './registers/routes';
import Admin from "../../../components/modules/admin/Admin";

export default [
    {
        path: '/admin',
        name: 'admin',
        component: Admin,
        children: [
            configuration,
            parametrizations,
            registers
        ]
    }
]