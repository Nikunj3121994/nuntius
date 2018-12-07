import Parametrizations from "../../../../components/modules/admin/parametrizations/Parametrizations";
import Events from "../../../../components/modules/admin/parametrizations/events/Events";
import EventsIndex from "../../../../components/modules/admin/parametrizations/events/EventsIndex";
import EventsForm from "../../../../components/modules/admin/parametrizations/events/EventsForm";
import SubsidiaryParameters
    from "../../../../components/modules/admin/parametrizations/subsidiaryParameters/SubsidiaryParameters";
import SubsidiaryPrametersIndex
    from "../../../../components/modules/admin/parametrizations/subsidiaryParameters/SubsidiaryPrametersIndex";
import SubsidiaryParametersForm
    from "../../../../components/modules/admin/parametrizations/subsidiaryParameters/SubsidiaryParametersForm";

export default {
    path: 'parametrizations',
    name: 'parametrizations',
    component: Parametrizations,
    children: [
        {
            path: 'events',
            component: Events,
            children: [
                {path: '', component: EventsIndex, name: 'events'},
                {path: 'create', component: EventsForm, name: 'eventsCreate'},
                {path: 'edit/:id', component: EventsForm, name: 'eventsEdit'},
                {path: 'view/:id', component: EventsForm, name: 'eventsView'},
            ]
        },
        {
            path: 'subsidiary-parameters',
            component: SubsidiaryParameters,
            children: [
                {path: '', component: SubsidiaryPrametersIndex, name: 'subsidiaryParameters'},
                {path: 'create', component: SubsidiaryParametersForm, name: 'subsidiaryParametersCreate'},
                {path: 'edit/:id', component: SubsidiaryParametersForm, name: 'subsidiaryParametersEdit'},
                {path: 'view/:id', component: SubsidiaryParametersForm, name: 'subsidiaryParametersView'},
            ]
        }
    ]
}