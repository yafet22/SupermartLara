const state = {
    data:{
        email : "",
        saldo : "",
        role : "",
        image_name : ""
    }
};

const mutations = {
    setSource(state, source){
        state.data.email = source.email
        state.data.saldo = source.saldo
        state.data.role = source.role
        state.data.image_name = source.image_name
    }
};

const getter = {
    role: state => state.data.role
};


export default {
    namespaced: true,
    state,
    mutations,
    getter,
};