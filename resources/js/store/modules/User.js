import Http from '../../http'

const state = {
    user:[],
    data:{}
};

const mutations = {
    setSource(state, source){
        state.user = source
    },

    setUser(state, source){
        state.data = source
    }
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

            let data = new FormData()
            data.append("username",payload.username)
            data.append("telp",payload.telp)
            data.append("image_name",payload.image_name)

            const successCallback = res => {
                if(res.status === 200){
                    resolve()
                }
            }

            const errorCallback = err => {
                reject(err)
            }

            Http.post('/profile/'+payload.id, data, successCallback, errorCallback)
        })
    },

    aktivasi(context,id){
        return new Promise((resolve, reject) => {

            const successCallback = res => {
                if(res.status === 200){
                    context.dispatch('getAllUser')
                    resolve()
                }
            }

            const errorCallback = err => {
                reject(err)
            }

            Http.patch('/aktivasi/'+id, successCallback, errorCallback)
        })
    },

    nonaktivasi(context,id){
        return new Promise((resolve, reject) => {

            const successCallback = res => {
                if(res.status === 200){
                    context.dispatch('getAllUser')
                    resolve()
                }
            }

            const errorCallback = err => {
                reject(err)
            }

            Http.patch('/nonaktivasi/'+id, successCallback, errorCallback)
        })
    },

    getUser(context, id){
        return new Promise((resolve, reject) =>{
            
            const successCallback = (res) => {
                console.log(res.data.data)
                context.commit('setUser',res.data.data)
                resolve()
            }

            const errorCallback = (err) => {
                reject(err)
            }

            Http.get('/users/'+id,successCallback,errorCallback)
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