import Home from "./components/Home";
import salesRoutes from './routes/modules/sales/routes';
import logisticsRoutes from './routes/modules/logistics/routes';
import adminRoutes from './routes/modules/admin/routes';
import financialRoutes from './routes/modules/financial/routes';
import materialsRoutes from './routes/modules/materials/routes';
import stocksRoutes from './routes/modules/stocks/routes';
import productionRoutes from './routes/modules/production/routes';

const baseRoutes = [
    {path: '/', component: Home, name: 'home'}
];

const routes = baseRoutes.concat(salesRoutes,
    logisticsRoutes,
    adminRoutes,
    financialRoutes,
    materialsRoutes,
    stocksRoutes,
    productionRoutes);

export default routes