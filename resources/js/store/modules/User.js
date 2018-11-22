import Http from '../../http'

const state = {
    user:[]
};

const mutations = {
    setSource(state, source){
        state.user = source
    },
};

const actions =  {
    getAllUser({commit}){
        return new Promise((resolve, reject) =>{
            
            const successCallback = (res) => {
                console.log(res.data.data)
                commit('setSource',res.data.data)
                resolve()
            }

            const errorCallback = (err) => {
                reject(err)
            }

            Http.get('/users',successCallback,errorCallback)
        })
    },
    
};

export default {
    namespaced: true,
    state,
    mutations,
    actions
};