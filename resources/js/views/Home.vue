<template>
    <div>
        <div class="page-header bg-blue-500 pb-20">

            <!-- navbar -->
            <nav class="navbar fixed p-2 mt-0 w-full z-10 top-0" id="navbar">
                <div class="container mx-auto flex flex-wrap relative items-center">
                    <div class="flex w-full md:w-1/2 justify-between md:justify-start text-white font-semibold">
                        <a class="no-underline hover:no-underline" href="#">
                            <img :src="config.baseurl + '/images/logo.svg'" alt="Logo" width="32" class="inline-block -mt-2">
                            <span class="text-xl pl-2">
                                {{ config.judul }}
                            </span>
                        </a>
                        <button class="block md:hidden bg-blue-500 px-4 navbar-burger" type="button">       
                            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                        </button>
                    </div>
                    <div class="menu flex w-full content-center justify-between md:w-1/2 md:justify-end">
                        <hr class="md:hidden">
                        <ul class="md:flex md:items-center">
                            <li class="mr-3">
                                <a class="inline-block py-2 px-4 text-white no-underline" href="#">
                                    Tentang
                                </a>
                            </li>
                            <li class="mr-3">
                                <a class="inline-block py-2 px-4 text-white bg-gray-100 text-gray-800 hover:bg-gray-200" href="#">
                                    Masuk
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- content -->
            <div class="container pt-20 pb-10 mx-auto flex flex-wrap flex-col-reverse h-full justify-center">
                <div class="w-full md:w-6/12 self-center text-center sm:text-left">
                    <div class="text-4xl font-bold text-white">
                        Lembaga Sertifikasi Profesi <br>
                        {{ config.lembaga }}
                    </div>
                    <p class="text-white mb-4">
                        LSP adalah lembaga pelaksanaan kegiatan sertifikasi profesi yang memperoleh lisensi dari Badan Nasional Sertifikasi Profesi (BNSP)
                    </p>
                    <button class="transition duration-200 ease-in bg-gray-100 hover:bg-gray-400 py-2 px-4 font-bold text-gray-900 rounded">
                        Daftar
                    </button>
                    <button class="transition duration-200 ease-in bg-blue-500 hover:bg-blue-700 py-2 px-4 font-bold text-white rounded">
                        Tentang
                    </button>
                </div>
                <div class="w-full md:w-6/12 self-center">
                    <img :src="config.baseurl + '/images/busy-marketing-2.svg'" alt="Illustration">
                </div>
            </div>

            <!-- waves -->
            <svg class="md:mt-20 hidden md:block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#4299E1" fill-opacity="1" d="M0,64L12,85.3C24,107,48,149,72,154.7C96,160,120,128,144,106.7C168,85,192,75,216,85.3C240,96,264,128,288,138.7C312,149,336,139,360,154.7C384,171,408,213,432,234.7C456,256,480,256,504,240C528,224,552,192,576,160C600,128,624,96,648,90.7C672,85,696,107,720,122.7C744,139,768,149,792,138.7C816,128,840,96,864,69.3C888,43,912,21,936,32C960,43,984,85,1008,117.3C1032,149,1056,171,1080,197.3C1104,224,1128,256,1152,224C1176,192,1200,96,1224,69.3C1248,43,1272,85,1296,112C1320,139,1344,149,1368,154.7C1392,160,1416,160,1428,160L1440,160L1440,0L1428,0C1416,0,1392,0,1368,0C1344,0,1320,0,1296,0C1272,0,1248,0,1224,0C1200,0,1176,0,1152,0C1128,0,1104,0,1080,0C1056,0,1032,0,1008,0C984,0,960,0,936,0C912,0,888,0,864,0C840,0,816,0,792,0C768,0,744,0,720,0C696,0,672,0,648,0C624,0,600,0,576,0C552,0,528,0,504,0C480,0,456,0,432,0C408,0,384,0,360,0C336,0,312,0,288,0C264,0,240,0,216,0C192,0,168,0,144,0C120,0,96,0,72,0C48,0,24,0,12,0L0,0Z"></path>
            </svg>
        </div>
        <button class="modal-open bg-transparent border border-gray-500 hover:border-indigo-500 text-gray-500 hover:text-indigo-500 font-bold py-2 px-4 rounded-full">Open Modal</button>

        <!-- Section -->
        <div class="container mx-auto mb-20">
            <h2 class="title-with-hr text-center text-white font-bold text-2xl text-shadow relative">
                Apa yang anda dapat?
            </h2>


            <div class="flex flex-wrap justify-center mt-10">
                <div class="w-full md:w-3/12 bg-gray-100 rounded shadow-lg mx-2 my-2 p-4 text-center">
                    <div class="font-semibold text-xl mb-4 text-gray-900">
                        Best Services
                    </div>
                    <div class="text-center mb-4">
                        <img class="inline-block" :src="config.baseurl + '/images/call-center-agent.svg'" alt="Icon" width="120">
                    </div>
                    <p>
                        Kami berusaha melayani dengan sebaik - baiknya.
                    </p>
                </div>
                <div class="w-full md:w-3/12 bg-gray-100 rounded shadow-lg mx-2 my-2 p-4 text-center">
                    <div class="font-semibold text-xl mb-4 text-gray-900">
                        Fast
                    </div>
                    <div class="text-center mb-4">
                        <img class="inline-block" :src="config.baseurl + '/images/fast-time.svg'" alt="Icon" width="120">
                    </div>
                    <p>
                        Kami melakukannya dengan cepat dan tepat waktu.
                    </p>
                </div>
                <div class="w-full md:w-3/12 bg-gray-100 rounded shadow-lg mx-2 my-2 p-4 text-center">
                    <div class="font-semibold text-xl mb-4 text-gray-900">
                        Accuracy Assessment
                    </div>
                    <div class="text-center mb-4">
                        <img class="inline-block" :src="config.baseurl + '/images/test.svg'" alt="Icon" width="120">
                    </div>
                    <p>
                        Ketepatan dan kejujuran kami dalam melakukan asesmen adalah utama.
                    </p>
                </div>
            </div>
        </div>

        <!-- Section -->
        <div class="container mx-auto mt-32">
            <div class="flex flex-wrap">
                <div class="w-full md:w-6/12 self-center">
                    <img :src="config.baseurl + '/images/remote-team.svg'" alt="Illustration">
                </div>
                <div class="w-full md:w-6/12 self-center text-center md:text-left">
                    <h2 class="font-semibold text-4xl mb-8 text-gray-800">Tentang Kami</h2>
                    <p class="text-gray-700 mb-8">
                        <strong>LSP APP</strong> adalah aplikasi yang dibuat untuk
                        membantu proses pengujian (asesmen) yang disesuaikan dengan
                        standar dari <strong>BNSP</strong> untuk melakukan pengujian
                        profesi. <strong>LSP APP</strong> di kembangkan langsung oleh
                        <a href="#">D-IT Soft</a>, Sebuah tim Software Developer dan 
                        IT Tech.
                    </p>
                    <button class="bg-blue-500 hover:bg-blue-700 py-2 px-4 font-bold text-white rounded">
                        Kontak Kami
                    </button>
                </div>
            </div>
        </div>

        <!-- Section -->
        <div class="container mx-auto mt-32">
            <div class="flex flex-wrap justify-center">
                <div class="w-full md:w-6/12 text-center">
                    <h2 class="font-semibold text-4xl mb-8 text-gray-800">Teknologi</h2>
                    <p class="text-gray-700">
                        Kami menggunakan teknologi untuk mendukung terlaksananya asesmen
                        dengan baik dengan performa tinggi dan terjamin produktif nya.
                    </p>
                </div>
            </div>

            <div class="flex flex-wrap mt-20 -mx-2">
                <!-- laravel -->
                <div class="w-full md:w-1/4 px-2 py-2">
                    <div class=" bg-red-500 text-center rounded-lg shadow-xl hover:shadow-2xl transition duration-200 hover:bg-indigo-400 cursor-default ease-in p-4">
                        
                        <div class="mb-2">
                            <img class="inline-block" :src="config.baseurl + '/images/laravel.svg'" alt="Laravel Logo" width="64">
                        </div>
                        <p class="text-gray-200">
                            Laravel merupakan framework php dengan performa yang terbukti,
                            laravel membantu dalam masalah security, dan lainnya.
                        </p>
                    </div>
                </div>

                <!-- vue -->
                <div class="w-full md:w-1/4 px-2 py-2">
                    <div class=" bg-green-500 text-center rounded-lg shadow-xl hover:shadow-2xl transition duration-200 hover:bg-indigo-400 cursor-default ease-in p-4">
                        
                        <div class="mb-2">
                            <img class="inline-block" :src="config.baseurl + '/images/vue.svg'" alt="Vue Logo" width="64">
                        </div>
                        <p class="text-gray-200">
                            Vue merupakan framework javascript untuk membangun antarmuka user,
                            kami menggunakannya untuk meningkatkan pengalaman UI dan UX user.
                        </p>
                    </div>
                </div>

                <!-- postgreSQL -->
                <div class="w-full md:w-1/4 px-2 py-2">
                    <div class=" bg-blue-500 text-center rounded-lg shadow-xl hover:shadow-2xl transition duration-200 hover:bg-indigo-400 cursor-default ease-in p-4">
                        
                        <div class="mb-2">
                            <img class="inline-block" :src="config.baseurl + '/images/postgre.svg'" alt="Postgres Logo" width="64">
                        </div>
                        <p class="text-gray-200">
                            Secara default kami sudah menetapkan postgre sebagai layanan
                            database utama kami, karena kecepatan performanya. Anda
                            bisa mengubahnya.
                        </p>
                    </div>
                </div>

                <!-- nodejs -->
                <div class="w-full md:w-1/4 px-2 py-2">
                    <div class=" bg-green-600 text-center rounded-lg shadow-xl hover:shadow-2xl transition duration-200 hover:bg-indigo-400 cursor-default ease-in p-4">
                        
                        <div class="mb-2">
                            <img class="inline-block" :src="config.baseurl + '/images/nodejs.svg'" alt="Nodejs Logo" width="64">
                        </div>
                        <p class="text-gray-200">
                            Nodejs kami gunakan untuk membantu melakukan utilitas antarmuka, 
                            seperti membundle script demi kenyamanan user dalam mengakses.
                        </p>
                    </div>
                </div>

                <!-- wkhtmltopdf -->
                <div class="w-full md:w-1/4 px-2 py-2">
                    <div class=" bg-blue-600 text-center rounded-lg shadow-xl hover:shadow-2xl transition duration-200 hover:bg-indigo-400 cursor-default ease-in p-4">
                        
                        <div class="mb-2">
                            <img class="inline-block my-5" :src="config.baseurl + '/images/wkhtmltopdf.png'" alt="WKhtmlTOpdf Logo" width="146">
                        </div>
                        <p class="text-gray-200">
                            WKhtmlTOpdf membantu dalam pembuatan dan pencetakan dokumen
                            berbasis PDF, Memberikan kemudahan dalam pembuatan dokumen rumit.
                        </p>
                    </div>
                </div>

                <!-- git -->
                <div class="w-full md:w-1/4 px-2 py-2">
                    <div class=" bg-gray-800 text-center rounded-lg shadow-xl hover:shadow-2xl transition duration-200 hover:bg-indigo-400 cursor-default ease-in p-4">
                        
                        <div class="mb-2">
                            <img class="inline-block" :src="config.baseurl + '/images/git.svg'" alt="Git Logo" width="64">
                        </div>
                        <p class="text-gray-200">
                            Kode Sumber disimpan dalam git server, yang memudahkan dalam
                            proses maintenance dan update. Dengan begini mempermudah admin.
                        </p>
                    </div>
                </div>

                <!-- redis -->
                <div class="w-full md:w-1/4 px-2 py-2">
                    <div class=" bg-red-500 text-center rounded-lg shadow-xl hover:shadow-2xl transition duration-200 hover:bg-indigo-400 cursor-default ease-in p-4">
                        
                        <div class="mb-2">
                            <img class="inline-block" :src="config.baseurl + '/images/redis.svg'" alt="Redis Logo" width="64">
                        </div>
                        <p class="text-gray-200">
                            Kami menggunakan Redis juga sebagai Cache Driver, membantu
                            kinerja database dalam melayani para pengguna dan meningkatkan performa.
                        </p>
                    </div>
                </div>

                <!-- docker -->
                <div class="w-full md:w-1/4 px-2 py-2">
                    <div class=" bg-blue-400 text-center rounded-lg shadow-xl hover:shadow-2xl transition duration-200 hover:bg-indigo-400 cursor-default ease-in p-4">
                        
                        <div class="mb-2">
                            <img class="inline-block" :src="config.baseurl + '/images/docker.svg'" alt="Docker Logo" width="64">
                        </div>
                        <p class="text-gray-200">
                            Aplikasi dibungkus dalam sistem berbasis container, kami menggunakan
                            docker sebagai sarana container manajer. Instalasi yang sangat mudah di server.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Section -->
        <div class="container mx-auto mt-32">
            <div class="flex flex-wrap">
                <div class="w-full md:w-6/12 self-center text-center md:text-left">
                    <h2 class="font-semibold text-4xl mb-8 text-gray-800">Untuk Client</h2>
                    <p class="text-gray-700 mb-8">
                        <strong>D-IT Soft</strong> mementingkan kepuasaan anda para client,
                        kami menerima konsultasi di jam kerja, membantu anda memecahkan masalah
                        yang datang pada produk kami, berharap anda puas dan terus menggunakan
                        layanan kami.
                    </p>
                    <button class="bg-blue-500 hover:bg-blue-700 py-2 px-4 font-bold text-white rounded">
                        Kontak Kami
                    </button>
                </div>
                <div class="w-full md:w-6/12 self-center">
                    <img :src="config.baseurl + '/images/client-meeting.svg'" alt="Illustration">
                </div>
            </div>
        </div>

        <!-- Section -->
        <div class="mt-32">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#4299E1" fill-opacity="1" d="M0,320L0,192L75.8,192L75.8,160L151.6,160L151.6,64L227.4,64L227.4,128L303.2,128L303.2,0L378.9,0L378.9,32L454.7,32L454.7,32L530.5,32L530.5,192L606.3,192L606.3,128L682.1,128L682.1,32L757.9,32L757.9,64L833.7,64L833.7,128L909.5,128L909.5,96L985.3,96L985.3,96L1061.1,96L1061.1,224L1136.8,224L1136.8,192L1212.6,192L1212.6,32L1288.4,32L1288.4,192L1364.2,192L1364.2,192L1440,192L1440,320L1364.2,320L1364.2,320L1288.4,320L1288.4,320L1212.6,320L1212.6,320L1136.8,320L1136.8,320L1061.1,320L1061.1,320L985.3,320L985.3,320L909.5,320L909.5,320L833.7,320L833.7,320L757.9,320L757.9,320L682.1,320L682.1,320L606.3,320L606.3,320L530.5,320L530.5,320L454.7,320L454.7,320L378.9,320L378.9,320L303.2,320L303.2,320L227.4,320L227.4,320L151.6,320L151.6,320L75.8,320L75.8,320L0,320L0,320Z"></path>
            </svg>
            <div class="bg-blue-500">
                <div class="container mx-auto">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 self-center">
                            <h2 class="font-semibold text-4xl mb-8 text-gray-100 py-20 pr-32">
                                Kenapa Menggunakan Kami?
                            </h2>
                        </div>
                        <div class="w-full md:w-1/2 self-center p-2 md:p-10">
                            <div class="bg-gray-100 shadow-xl rounded p-8">
                                <h3 class="font-semibold text-2xl mb-2 text-gray-800">Lorem ipsum dolor sit amet.</h3>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate dolor maxime, possimus architecto neque repellendus cumque, pariatur, quam non delectus incidunt porro corporis! Incidunt a adipisci nesciunt quia suscipit optio!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                    <path fill="#3182CE" fill-opacity="1" d="M0,96L0,192L43.6,192L43.6,256L87.3,256L87.3,224L130.9,224L130.9,32L174.5,32L174.5,64L218.2,64L218.2,64L261.8,64L261.8,224L305.5,224L305.5,224L349.1,224L349.1,96L392.7,96L392.7,128L436.4,128L436.4,224L480,224L480,64L523.6,64L523.6,192L567.3,192L567.3,64L610.9,64L610.9,128L654.5,128L654.5,288L698.2,288L698.2,256L741.8,256L741.8,96L785.5,96L785.5,64L829.1,64L829.1,160L872.7,160L872.7,128L916.4,128L916.4,128L960,128L960,32L1003.6,32L1003.6,224L1047.3,224L1047.3,64L1090.9,64L1090.9,32L1134.5,32L1134.5,288L1178.2,288L1178.2,288L1221.8,288L1221.8,96L1265.5,96L1265.5,96L1309.1,96L1309.1,224L1352.7,224L1352.7,288L1396.4,288L1396.4,64L1440,64L1440,320L1396.4,320L1396.4,320L1352.7,320L1352.7,320L1309.1,320L1309.1,320L1265.5,320L1265.5,320L1221.8,320L1221.8,320L1178.2,320L1178.2,320L1134.5,320L1134.5,320L1090.9,320L1090.9,320L1047.3,320L1047.3,320L1003.6,320L1003.6,320L960,320L960,320L916.4,320L916.4,320L872.7,320L872.7,320L829.1,320L829.1,320L785.5,320L785.5,320L741.8,320L741.8,320L698.2,320L698.2,320L654.5,320L654.5,320L610.9,320L610.9,320L567.3,320L567.3,320L523.6,320L523.6,320L480,320L480,320L436.4,320L436.4,320L392.7,320L392.7,320L349.1,320L349.1,320L305.5,320L305.5,320L261.8,320L261.8,320L218.2,320L218.2,320L174.5,320L174.5,320L130.9,320L130.9,320L87.3,320L87.3,320L43.6,320L43.6,320L0,320L0,320Z"></path>
                </svg>
            </div>
            <div class="bg-blue-600">
                <div class="bg-blue-700 text-center p-2">
                    <span class="text-gray-200">
                        &copy; <a href="#" class="font-semibold">D-IT Soft</a> 2020. All rights reserved. LSP APP {{ config.version }} and 
                        made with
                        <div class="inline-block">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="13" viewBox="0 0 14 13">
                                <path fill="#F56565" fill-rule="nonzero" d="M13.59 1.778c-.453-.864-3.295-3.755-6.59.431C3.54-1.977.862.914.41 1.778c-.825 1.596-.33 4.014.823 5.18L7.001 13l5.767-6.043c1.152-1.165 1.647-3.582.823-5.18z"/>
                            </svg>
                        </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            config
        }
    },
    mounted() {
        window.addEventListener("scroll", function (event) {
            var scroll = this.scrollY
            var navbar = document.getElementById('navbar')
            var content = document.getElementById('content-header')
            if (scroll > 0) {
                navbar.classList.add("navbar-scroll")
            } else {
                navbar.classList.remove("navbar-scroll")
            }
        });
        window.$('button.navbar-burger').on('click', function (e) {
            console.log( $(this).closest(".navbar").find(".menu").toggle('hidden') )
        });
    }
}
</script>