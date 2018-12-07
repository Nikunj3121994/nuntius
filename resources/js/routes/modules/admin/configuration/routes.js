import Companies from "../../../../components/modules/admin/configuration/companies/Companies";
import CompaniesIndex from "../../../../components/modules/admin/configuration/companies/CompaniesIndex";
import CompaniesForm from "../../../../components/modules/admin/configuration/companies/CompaniesForm";
import Configuration from "../../../../components/modules/admin/configuration/Configuration";
import Permissions from "../../../../components/modules/admin/configuration/permissions/Permissions";
import PermissionsForm from "../../../../components/modules/admin/configuration/permissions/PermissionsForm";
import PermissionsIndex from "../../../../components/modules/admin/configuration/permissions/PermissionsIndex";
import Roles from "../../../../components/modules/admin/configuration/roles/Roles";
import RolesIndex from "../../../../components/modules/admin/configuration/roles/RolesIndex";
import RolesForm from "../../../../components/modules/admin/configuration/roles/RolesForm";
import Subsidiaries from "../../../../components/modules/admin/configuration/subsidiaries/Subsidiaries";
import SubsidiariesIndex from "../../../../components/modules/admin/configuration/subsidiaries/SubsidiariesIndex";
import SubsidiariesForm from "../../../../components/modules/admin/configuration/subsidiaries/SubsidiariesForm";
import Users from "../../../../components/modules/admin/configuration/users/Users";
import UsersIndex from "../../../../components/modules/admin/configuration/users/UsersIndex";
import UsersForm from "../../../../components/modules/admin/configuration/users/UsersForm";

export default {
    path: 'configuration',
    name: 'configuration',
    component: Configuration,
    children: [
        {
            path: 'companies',
            component: Companies,
            children: [
                {path: '', component: CompaniesIndex, name: 'companies'},
                {path: 'create', component: CompaniesForm, name: 'companiesCreate'},
                {path: 'edit/:id', component: CompaniesForm, name: 'companiesEdit'},
                {path: 'view/:id', component: CompaniesForm, name: 'companiesView'},
            ]
        },
        {
            path: 'permissions',
            component: Permissions,
            children: [
                {path: '', component: PermissionsIndex, name: 'permissions'},
                {path: 'create', component: PermissionsForm, name: 'permissionsCreate'},
                {path: 'edit/:id', component: PermissionsForm, name: 'permissionsEdit'},
                {path: 'view/:id', component: PermissionsForm, name: 'permissionsView'},
            ]
        },
        {
            path: 'roles',
            component: Roles,
            children: [
                {path: '', component: RolesIndex, name: 'roles'},
                {path: 'create', component: RolesForm, name: 'rolesCreate'},
                {path: 'edit/:id', component: CompaniesForm, name: 'rolesEdit'},
                {path: 'view/:id', component: CompaniesForm, name: 'rolesView'},
            ]
        },
        {
            path: 'subsidiaries',
            component: Subsidiaries,
            children: [
                {path: '', component: SubsidiariesIndex, name: 'subsidiaries'},
                {path: 'create', component: SubsidiariesForm, name: 'subsidiariesCreate'},
                {path: 'edit/:id', component: SubsidiariesForm, name: 'subsidiariesEdit'},
                {path: 'view/:id', component: SubsidiariesForm, name: 'subsidiariesView'},
            ]
        },
        {
            path: 'users',
            component: Users,
            children: [
                {path: '', component: UsersIndex, name: 'users'},
                {path: 'create', component: UsersForm, name: 'usersCreate'},
                {path: 'edit/:id', component: UsersForm, name: 'usersEdit'},
                {path: 'view/:id', component: UsersForm, name: 'usersView'},
            ]
        }
    ]
}