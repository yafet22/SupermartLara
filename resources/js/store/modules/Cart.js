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
    getCartbyuser(context,id){
        return new Promise((resolve, reject) => {

            const successCallback = (res) => {
                console.log(res.data.data)
                context.commit('setSource',res.data.data)
                resolve()
            }

            const errorCallback = err => {
                reject(err)
            }

            Http.get('/usercart/'+id,successCallback, errorCallback)
        })
    },

    addCart(context, payload){
        return new Promise((resolve,reject) => {

            const data = {
                jumlah : payload.jumlah,
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

            Http.post('/add/'+payload.id+'/'+payload.idbarang,data,successCallback,errorCallback)
        })
    },

    update(context, payload){
        return new Promise((resolve, reject) => {
            const data = {
                jumlah : payload.jumlah
            }

            const successCallback = res => {
                if(res.status === 200){
                    context.dispatch('getBarang')
                    resolve()
                }
            }

            const errorCallback = err => {
                reject(err)
            }

            Http.patch('/editcart/'+payload.id, data, successCallback, errorCallback)
        })
    },

    destroy(context, id){
        console.log(id)
        return new Promise((resolve, reject) => {
            const successCallback = res => {
                if(res.status===200){
                    console.log('Delete Cart')
                    resolve()
                }
            }
            const errorCallback = err => {
                reject(err)
            }
            Http.delete('/cartshops/'+id, successCallback, errorCallback)
        })
    },


    
};

export default {
    namespaced: true,
    state,
    mutations,
    actions
};