const getters = {
    getDrawer: (state) => {
        return state.drawer;
    },
    getCompanyDialog: (state) => {
        return state.companyDialog;
    },
    getCompanyId: (state) => {
        return state.companyId;
    },
    getSubsidiaryId: (state) => {
        return state.subsidiaryId;
    },
    getCompanyName: (state) => {
        return state.companyName;
    },
    getSubsidiaryName: (state) => {
        return state.subsidiaryName;
    },
    getCompanyDialogCompanyId: (state) => {
        return state.companyDialogData.companyId;
    },
    getCompanyDialogSubsidiaryId: (state) => {
        return state.companyDialogData.subsidiaryId;
    },
    getCompanies: (state) => {
        return state.companyDialogData.companies;
    },
    getSubsidiaries: (state) => {
        const companyId = state.companyDialogData.companyId;
        return state.companyDialogData.subsidiaries.filter(subsidiary => subsidiary.companyId === companyId);
    },
    getNestedMenuItems: (state) => {
        return state.menu.filter(item => item.nested);
    },
    getSimpleMenuItem: (state) => {
        return state.menu.filter(item => !item.nested);
    },
    getSession: (state) => {
        return state.session;
    },
    getLoading: (state) => {
        return state.loading;
    },
    getNotifications: (state) => {
        return state.notifications;
    }

};

export default getters;