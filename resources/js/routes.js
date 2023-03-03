import HomeComponent from './components/HomeComponent';
import LoginComponet from './components/LoginComponet';
import DashboardComponent from './components/DashboardComponent'

export const routes =[

    {
        path:"/",
        name: "index",
        component: HomeComponent
    },
    {
        path:"/home",
        name: "home",
        component: HomeComponent
    },
    {
        path:"/login",
        name: "login",
        component: LoginComponet
    },
    {
        path:"/dashboard",
        name: "dashboard",
        component: DashboardComponent,

        meta: {
            requiresAuth: true ,
        }
    }

];