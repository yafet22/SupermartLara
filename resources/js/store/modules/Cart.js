import Http from '../../http'

const state = {
    data:[]
};

const mutations = {
    setSource(state, source){
        state.data = source
    },

    created(state,data){
        state.data.push(data)
    },

};

const actions =  {
    getCarts({commit}){
        return new Promise((resolve, reject) =>{
            
            const successCallback = (res) => {
                console.log(res.data.data)
                commit('setSource',res.data.data)
                resolve()
            }

            const errorCallback = (err) => {
                reject(err)
            }

            Http.get('/cartshops',successCallback,errorCallback)
        })
    },

    getCart(context,id){
        return new Promise((resolve, reject) => {

            const successCallback = (res) => {
                console.log(res.data.data)
                context.commit('setSource',res.data.data)
                resolve()
            }

            const errorCallback = err => {
                reject(err)
            }

            Http.get('/cart/'+id,successCallback, errorCallback)
        })
    },
    
};

export default {
    namespaced: true,
    state,
    mutations,
    actions
};