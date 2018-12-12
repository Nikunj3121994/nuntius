import Imports from "../../../../components/modules/materials/imports/Imports";
import ImportProcess from "../../../../components/modules/materials/imports/importProcess/ImportProcess";
import ImportProcessIndex from "../../../../components/modules/materials/imports/importProcess/ImportProcessIndex";
import ImportProcessForm from "../../../../components/modules/materials/imports/importProcess/ImportProcessForm";

export default {
    path: 'imports',
    name: 'materialsImports',
    component: Imports,
    children: [
        {
            path: 'import-process',
            component: ImportProcess,
            children: [
                {path: '', component: ImportProcessIndex, name: 'importProcess'},
                {path: 'create', component: ImportProcessForm, name: 'importProcessCreate'},
                {path: 'edit/:id', component: ImportProcessForm, name: 'importProcessEdit'},
                {path: 'view/:id', component: ImportProcessForm, name: 'importProcessView'},
            ]
        }
    ]
}



