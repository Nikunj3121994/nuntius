const actions = {
    updateOrderLogisticsVolumes: (context, {data, index}) => {
        const volumes = context.state.orderLogisticsVolumes;

        if (index >= 0) {
            Object.assign(volumes[index], data);
        } else {
            volumes.push(data);
        }
        context.commit('updateOrderLogisticsVolumes', volumes);
    },
    addOrderInstallment: (context, payload) => {
        // first we commit the new installment object to push into the array of installments
        context.commit('addOrderInstallment', payload);

        // here we get the array and we assign the number to their positions
        const installments = context.state.orderInstallments;
        const newInstallments = redefineInstallmentsNumber(installments);
        context.commit('updateOrderInstallments', newInstallments);
    },
    updateOrderInstallments: (context, {data, index}) => {
        const installments = context.state.orderInstallments;
        if (index >= 0) {
            Object.assign(installments[index], data);
        } else {
            installments.push(data);
        }

        const newInstallments = redefineInstallmentsNumber(installments);

        context.commit('updateOrderInstallments', newInstallments);
    },
    addOrderComission: (context, payload) => {
        context.commit('addOrderComission', payload);
    },
    updateOrderComissions: (context, {data, index}) => {
        const comissions = context.state.orderComissions;
        if (index >= 0) {
            Object.assign(comissions[index], data);
        } else {
            comissions.push(data);
        }

        context.commit('updateOrderComissions', comissions);
    }
};

/**
 *  This function receives the installments array and do the following:
 *  1 - split into two arrays - active and deleted
 *  2 - map the active to redefine the installment sequence
 *  3 - merge the arrays and return them
 *
 *  The purpose is to prevent duplicated or invalid sequences in the installments array.
 *  Because we need to send to the server the deleted lines (in case of an update that must delete the line)
 *
 * @param installments
 * @returns array
 */
function redefineInstallmentsNumber(installments) {
    const active = installments
        .filter((item) => item.deleted === false)
        .map((item, index) => {
            item.installment_number = index + 1;
            return item;
        });
    const deleted = installments
        .filter((item) => item.deleted);

    return [...active, ...deleted];
}

export default actions;