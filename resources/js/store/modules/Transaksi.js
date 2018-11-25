import Http from '../../http'

const state = {
    data:[],
    transaksi:{}
};

const mutations = {
    setSource(state, source){
        state.data = source
    },
    setTransaksi(state, source){
        state.transaksi = source
    },

    created(state,data){
        state.data.push(data)
    },

};

const actions =  {
    getTransaksis({commit}){
        return new Promise((resolve, reject) =>{
            
            const successCallback = (res) => {
                console.log(res.data.data)
                commit('setSource',res.data.data)
                resolve()
            }

            const errorCallback = (err) => {
                reject(err)
            }

            Http.get('/transaksis',successCallback,errorCallback)
        })
    },

    transaksibyUser(context, id){
        return new Promise((resolve, reject) =>{
            
            const successCallback = (res) => {
                console.log(res.data.data)
                context.commit('setTransaksi',res.data.data)
                resolve()
            }

            const errorCallback = (err) => {
                reject(err)
            }

            Http.get('/show/'+id,successCallback,errorCallback)
        })
    },

    addTransaksi(context, id){
        return new Promise((resolve,reject) => {
            const successCallback = (res) => {
                if(res.status === 201){
                    context.commit('created',res.data.data)
                    resolve()
                }
            }

            const errorCallback = (err) => {

                reject(err)
            }

            Http.post('/start/'+id,successCallback,errorCallback)
        })
    },
    finish(context,id){
        return new Promise((resolve, reject) => {

            const successCallback = (res) => {
                console.log(res.data.data)
                resolve()
            }

            const errorCallback = err => {
                reject(err)
            }

            Http.get('/finish/'+id,successCallback, errorCallback)
        })
    },
       
};

export default {
    namespaced: true,
    state,
    mutations,
    actions
};