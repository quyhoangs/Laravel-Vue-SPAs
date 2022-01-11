import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Illustarations from './components/Illustarations';
import LoadersAndAnimations from './components/LoadersAndAnimations';
import Mascot from './components/Mascot';
import Typography from './components/Typography';
import Wallpapers from './components/Wallpapers';
import NotFound from './components/NotFound';

export default{
    make:'history',

    linkActiveClass:'font-bold',

    routes:[
        {
            path:'*',
            component: NotFound
        },
        {
            path:'/Logo',
            component: Logo
        },

        {
            path:'/Logo-Symbol',
            component: LogoSymbol
        },
        {
            path:'/Colors',
            component: Colors
        },
        {
            path:'/Illustarations',
            component: Illustarations
        },
        {
            path:'/Loaders-And-Animations',
            component: LoadersAndAnimations
        },
        {
            path:'/Mascot',
            component: Mascot
        },
        {
            path:'/Typography',
            component: Typography
        },
        {
            path:'/Wallpapers',
            component: Wallpapers
        },
    ]
}