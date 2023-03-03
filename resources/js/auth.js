import axios from "axios"

export function login(credentails){

    return new Promise((res, rej) => {
        axios.post('api/login',credentails)
            .then(response ={
                res(response);
            })
            .catch(err =>{
                rej('Wronge Email/Paaword')
            })

    })
}

export function getLoggedInUser(){
    const userStr = localStorage .getItem('user');
    if(!userStr){
        return null
    } 
    return JSON.parse(userStr);
}