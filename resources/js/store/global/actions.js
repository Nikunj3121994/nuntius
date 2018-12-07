const actions = {
    toggleDrawer: (context) => {
        const drawer = !context.getters.getDrawer;
        context.commit('updateDrawer', drawer);
    },

    toggleCompanyDialog: (context) => {
        const dialog = !context.getters.getCompanyDialog;
        context.commit('updateCompanyDialog', dialog);
    },
    setCompanyId: (context, companyId) => {
        context.commit('updateCompanyId', companyId);
    },
    setSubsidiaryId: (context, subsidiaryId) => {
        context.commit('updateSubsidiaryId', subsidiaryId);
    },
    changeCompany: (context, {companyId, subsidiaryId}) => {

        const companyName = context.state.companyDialogData
            .companies
            .find(company => company.value === companyId)
            .text;

        const subsidiaryName = context.state.companyDialogData
            .subsidiaries
            .find(subsidiary => subsidiary.value === subsidiaryId)
            .text;

        // update the state
        context.commit('updateCompanyId', companyId);
        context.commit('updateSubsidiaryId', subsidiaryId);
        context.commit('updateCompanyName', companyName);
        context.commit('updateSubsidiaryName', subsidiaryName);

        /**
         * TODO - Here will be necessary some adtional processing to change the data and close the active applications
         */

        // reset the form fields - state
        context.commit('updateCompanyDialogCompanyId', null);
        context.commit('updateCompanyDialogSubsidiaryId', null);


        // if there's a dialog active, the application closes
        if (context.state.companyDialog) {
            context.dispatch('toggleCompanyDialog');
        }

    },
    updateLoading: (context, loading) => {
        context.dispatch('updateLoading', loading);
    },
    insertNotification: (context, notification) => {
        const notifications = context.getters.getNotifications;
        notifications.push(notification);
        context.commit('updateNotifications',notifications);
    },
    removeNotification: (context, notification) => {
        const notifications = context.getters.getNotifications;
        const index = notifications.indexOf(notification);
        notifications.splice(index,1);
        context.commit('updateNotifications',notifications);
    }
};

export default actions;