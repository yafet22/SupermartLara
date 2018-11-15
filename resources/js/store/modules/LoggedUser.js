const state = {
    data:{
        name : "",
        email : "",
        saldo : "",
        role : "",
    }
};

const mutations = {
    setSource(state, source){
        state.data.name = source.name
        state.data.email = source.email
        state.data.saldo = source.saldo
        state.data.role = source.role
    }
};

const getter = {
    name: state => state.data.name
};


export default {
    namespaced: true,
    state,
    mutations,
    getter,
}