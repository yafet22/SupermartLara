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
    getBarang({commit}){
        return new Promise((resolve, reject) =>{
            
            const successCallback = (res) => {
                console.log(res.data.data)
                commit('setSource',res.data.data)
                resolve()
            }

            const errorCallback = (err) => {
                reject(err)
            }

            Http.get('/barangs',successCallback,errorCallback)
        })
    },

    addBarang(context, payload){
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

            Http.post('barangs',payload,successCallback,errorCallback)
        })
    },

    destroy(context, id){
        console.log(id)
        return new Promise((resolve, reject) => {
            const successCallback = res => {
                if(res.status===200){
                    console.log('Delete Barang')
                    context.dispatch('getBarang')
                    resolve()
                }
            }

            const errorCallback = err => {
                reject(err)
            }

            Http.delete('/barangs/'+id, successCallback, errorCallback)
        })
    },

    update(context, payload){
        return new Promise((resolve, reject) => {

            let data = new FormData()
            data.append("namabarang",payload.namabarang)
            data.append("kategori",payload.kategori)
            data.append("harga",payload.harga)
            data.append("stock",payload.stock)
            data.append("deskripsi",payload.deskripsi)
            data.append("image_name",payload.image_name)

            const successCallback = res => {
                if(res.status === 200){
                    resolve()
                }
            }

            const errorCallback = err => {
                reject(err)
            }

            Http.post('/edit/'+payload.idbarang, data, successCallback, errorCallback)
        })
    },

    
};

export default {
    namespaced: true,
    state,
    mutations,
    actions
};