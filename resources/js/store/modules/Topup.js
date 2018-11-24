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
    getTopups({commit}){
        return new Promise((resolve, reject) =>{
            
            const successCallback = (res) => {
                console.log(res.data.data)
                commit('setSource',res.data.data)
                resolve()
            }

            const errorCallback = (err) => {
                reject(err)
            }

            Http.get('/topups',successCallback,errorCallback)
        })
    },

    getTopupbyUser(context,id){
        return new Promise((resolve, reject) =>{
            
            const successCallback = (res) => {
                console.log(res.data.data)
                context.commit('setSource',res.data.data)
                resolve()
            }

            const errorCallback = (err) => {
                reject(err)
            }

            Http.get('/usertopup/'+id,successCallback,errorCallback)
        })
    },

    addTopup( context, payload){
        return new Promise((resolve,reject) => {

            const data = {
                bank : payload.bank,
                topup : payload.topup
            }

            const successCallback = (res) => {
                if(res.status === 201){
                    context.commit('created',res.data.data)
                    resolve()
                }
            }

            const errorCallback = (err) => {

                reject(err)
            }

            Http.post('topup/'+payload.id,data,successCallback,errorCallback)
        })
    },

    sendconfirm(context, payload){
        return new Promise((resolve, reject) => {

            let data = new FormData()
            data.append("fotobukti",payload.get("fotobukti"))

            const successCallback = res => {
                if(res.status === 200){
                    context.dispatch('getTopups')
                    resolve()
                }
            }

            const errorCallback = err => {
                reject(err)
            }

            Http.post('/sendconfirm/'+payload.get("id"),data, successCallback, errorCallback)
        })
    },

    confirm(context,id){
        return new Promise((resolve, reject) => {

            const successCallback = res => {
                if(res.status === 200){
                    context.dispatch('getTopups')
                    resolve()
                }
            }

            const errorCallback = err => {
                reject(err)
            }

            Http.patch('/confirm/'+id,successCallback, errorCallback)
        })
    },

    
};

export default {
    namespaced: true,
    state,
    mutations,
    actions
};