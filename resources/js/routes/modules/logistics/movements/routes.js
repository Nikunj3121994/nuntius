import Separation from '../../../../components/modules/logistics/movements/separation/Separation'
import SeparationForm from '../../../../components/modules/logistics/movements/separation/SeparationForm'
import SeparationIndex from '../../../../components/modules/logistics/movements/separation/SeparationIndex'
import Movements from "../../../../components/modules/logistics/movements/Movements";

export default {
    path: 'movements',
    name: 'logistcsMovements',
    component: Movements,
    children: [
        {
            path: 'separation',
            component: Separation,
            children: [
                {path: '', component: SeparationIndex, name: 'separation'},
                {path: 'create', component: SeparationForm, name: 'separationCreate'},
                {path: 'edit/:id', component: SeparationForm, name: 'separationEdit'},
                {path: 'view/:id', component: SeparationForm, name: 'separationView'},
            ]
        },

    ]
}