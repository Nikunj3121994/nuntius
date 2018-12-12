import imports from './imports/routes';
import movements from './movements/routes';
import registers from './registers/routes';
import Materials from "../../../components/modules/materials/Materials";

export default [
    {
        path: '/materials',
        name: 'materials',
        component: Materials,
        children: [
            imports,
            movements,
            registers
        ]
    }
]