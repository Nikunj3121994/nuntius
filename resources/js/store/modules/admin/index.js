import profile from './profile/index';

const admin = {
    namespaced: true,
    state: {
        data: []
    },
    modules: {
        profile
    }
};

export default admin;