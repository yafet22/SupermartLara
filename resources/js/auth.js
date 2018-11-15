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
    }
}