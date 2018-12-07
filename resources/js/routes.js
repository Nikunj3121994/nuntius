import Home from "./components/Home";
import salesRoutes from './routes/modules/sales/routes';
import logisticsRoutes from './routes/modules/logistics/routes';

const baseRoutes = [
    {path: '/', component: Home, name: 'home'}
];

const routes = baseRoutes.concat(salesRoutes,logisticsRoutes);

export default routes