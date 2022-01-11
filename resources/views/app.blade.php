<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts Assets</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body class="font-sans">
        <div id="app">
            <div class="container mx-auto">
                <header class="py-6 mb-8">
                    <h1>
                        <img alt="Laracasts" src="https://media.flaticon.com/dist/min/img/logo/flaticon_negative.svg"  style="width:10%" >
                    </h1>
                </header>

                <main class="flex">
                    <aside class="w-1/5">
                        <section class="mb-8">
                            <h5 class="uppercase font-bold mb-3">The Brand</h5>

                            <ul class="list-reset" >
                               <li class="text-sm leading-loose"><router-link class="text-black"   to="/Logo">Logo</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black"   to="/Logo-Symbol">Logo Symbol</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black"   to="/Colors">Colors</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black"   to="/Typography">Typography</router-link></li>
                            </ul> 
                        </section> 
 
                        <section> 
                            <h5 class="uppercase font-bold mb-3">Doodles</h5> 
 
                            <ul class="list-reset"> 
                               <li class="text-sm leading-loose"><router-link class="text-black"   to="/Mascot">Mascot</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black"   to="/Illustarations">Illustrations</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black"   to="/Loaders-And-Animations">Loaders and Animations</router-link></li>
                               <li class="text-sm leading-loose"><router-link class="text-black"   to="/Wallpapers">Wallpapers</router-link></li>
                            </ul>
                        </section>
                    </aside>

                    <div class="primary flex-1">
                       <router-view></router-view>
                    </div>
                </main>
            </div>
        </div>

        <script src="/js/app.js"></script>
    </body>
</html>