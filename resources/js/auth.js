import Http from './http'
import store from './store'

export default {
    register(username,email,telp,password,checkpassword){
        return new Promise((resolve,reject) => {
            const payload ={
                username,
                email,
                telp,
                password,
                checkpassword
            }

            const successCallback = (res) => {
                resolve()
            }

            const errorCallback = (err) => {
                reject(err)
            }

            Http.post('api/users',payload,successCallback,errorCallback)
        })
    },
    authenticate(email,password){
        return new Promise((resolve, reject) =>{
            const payload ={
                email,
                password
            }  

            const successCallback = (res) => {
                const user = res.data
                store.commit('LoggedUser/setSource', user.data)
                resolve()
            }

            const errorCallback = (err) => {
                reject(err)
            }

            Http.post('api/login',payload,successCallback,errorCallback)
        })
    },
    // getBarang(){
    //     return new Promise((resolve, reject) =>{
            
    //         const successCallback = (res) => {
    //             resolve(res.data)
    //         }

    //         const errorCallback = (err) => {
    //             reject(err)
    //         }

    //         Http.get('api/barangs/',successCallback,errorCallback)
    //     })
    // },
    // getBarangbyKategori(kategori){
    //     return new Promise((resolve, reject) =>{
            
    //         const successCallback = (res) => {
    //             resolve(res.data)
    //         }

    //         const errorCallback = (err) => {
    //             reject(err)
    //         }

    //         Http.get('api/kategori/'+ kategori,successCallback,errorCallback)
    //     })
    // },
    // addBarang(namabarang,kategori,harga,stock,deskripsi,image_name){
    //     return new Promise((resolve,reject) => {
    //         const payload ={
    //             namabarang,
    //             kategori,
    //             harga,
    //             stock,
    //             deskripsi,
    //             image_name
    //         }

    //         const successCallback = (res) => {
    //             resolve(res)
    //         }

    //         const errorCallback = (err) => {
    //             reject(err)
    //         }

    //         Http.post('api/barangs',payload,successCallback,errorCallback)
    //     })
    // },
}