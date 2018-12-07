const mutations = {
    updateDrawer: (state, payload) => {
        state.drawer = payload;
    },
    updateCompanyDialog: (state, payload) => {
        state.companyDialog = payload;
    },
    updateCompanyDialogCompanyId: (state, payload) => {
        state.companyDialogData.companyId = payload;
    },
    updateCompanyDialogSubsidiaryId: (state, payload) => {
        state.companyDialogData.subsidiaryId = payload;
    },
    updateCompanyId: (state, payload) => {
        state.companyId = payload;
    },
    updateSubsidiaryId: (state, payload) => {
        state.subsidiaryId = payload;
    },
    updateCompanyName: (state, payload) => {
        state.companyName = payload;
    },
    updateSubsidiaryName: (state, payload) => {
        state.subsidiaryName = payload;
    },
    updateLoading: (state, payload) => {
        state.loading = payload;
    },
    updateNotifications: (state, payload) => {
        state.notifications = payload;
    }
};

export default mutations;