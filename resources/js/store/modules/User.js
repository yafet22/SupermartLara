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

    update(context, payload){
        return new Promise((resolve, reject) => {
            const data = {
                username : payload.namabarang,
                telp : payload.kategori,
                image_name :payload.image_name
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

            Http.patch('/barangs/'+payload.idbarang, data, successCallback, errorCallback)
        })
    },

    destroy(context, id){
        console.log(id)
        return new Promise((resolve, reject) => {
            const successCallback = res => {
                if(res.status===200){
                    console.log('Delete User')
                    context.dispatch('getAllUser')
                    resolve()
                }
            }

            const errorCallback = err => {
                reject(err)
            }

            Http.delete('/users/'+id, successCallback, errorCallback)
        })
    },
    
};

export default {
    namespaced: true,
    state,
    mutations,
    actions
};