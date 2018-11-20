<template>
    <div>
        <div class="container">
            <div class="row">
                <div v-if="$route.params.kategori=='MinumanRingan' || $route.params.kategori=='MinumanIsotonik' || $route.params.kategori=='MinumanSoda'  " class="col-md-3 order-first mt-2">
                    <router-link v-if="$route.params.kategori=='MinumanRingan'" :to="{name: 'LayoutBarang',  params: {  kategori: 'MinumanRingan' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Minuman Ringan</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'LayoutBarang',  params: {  kategori: 'MinumanRingan' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Minuman Ringan</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='MinumanIsotonik'" :to="{name: 'LayoutBarang',  params: {  kategori: 'MinumanIsotonik' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Minuman Isotonik</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'LayoutBarang',  params: {  kategori: 'MinumanIsotonik' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Minuman Isotonik</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='MinumanSoda'" :to="{name: 'LayoutBarang',  params: {  kategori: 'MinumanSoda' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Minuman Soda</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'LayoutBarang',  params: {  kategori: 'MinumanSoda' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Minuman Soda</a>
                        </li>
                    </router-link>    
                </div>

                <div v-if="$route.params.kategori=='MakananRingan' || $route.params.kategori=='MakananBeku' || $route.params.kategori=='MinumanPokok'  " class="col-md-3 order-first mt-2">
                    <router-link v-if="$route.params.kategori=='MakananRingan'" :to="{name: 'LayoutBarang',  params: {  kategori: 'MakananRingan' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Minuman Ringan</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'LayoutBarang',  params: {  kategori: 'MakananRingan' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Minuman Ringan</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='MakananBeku'" :to="{name: 'LayoutBarang',  params: {  kategori: 'MakananBeku' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Makanan Beku</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'LayoutBarang',  params: {  kategori: 'MakananBeku' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Makanan Beku</a>
                        </li>
                    </router-link>

                    <router-link v-if="$route.params.kategori=='MakananPokok'" :to="{name: 'LayoutBarang',  params: {  kategori: 'MakananPokok' } }">
                        <li class="list-group-item bg-primary">
                            <a href="#" class="text-light">Makanan Pokok</a>
                        </li>
                    </router-link>
                    <router-link v-else  :to="{name: 'LayoutBarang',  params: {  kategori: 'MakananPokok' } }">
                        <li class="list-group-item">
                            <a href="#" class="text-dark">Makanan Pokok</a>
                        </li>
                    </router-link>    
                </div>

                <div class="col-md-9 order-last mt-2">         
                        <router-view></router-view>
                </div>
            </div>
        </div>
    </div>
</template>


