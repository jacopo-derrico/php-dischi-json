<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Album viewer</title>

    <!-- Bootstrap 5.3.3 -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css'
        integrity='sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=='
        crossorigin='anonymous' />
    <!-- styel.css -->
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>

    <div id="app">
        <header>
            <nav class="navbar bg-body-tertiary">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo-spotify.png" alt="spotify" width="50">
                    </a>
                </div>
            </nav>
        </header>

        <main class="container ">
            <section class="row ">
                <div id="cards" class="col-10 mx-auto d-flex flex-wrap my-5 ">
                    <div class="card p-4 " 
                    v-for="(disk, index) in diskList" :key="disk.id">
                        <img :src="disk.poster" class="card-img-top img-fluid "
                        :alt="disk.title">
                        <div class="card-body text-center mb-0 ">
                            <h5>{{disk.title}}</h5>
                            <span class="text-secondary">{{disk.author}}</span>
                            <h6 class="mt-3 mb-0 ">{{disk.year}}</h6>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.7/axios.min.js'
        integrity='sha512-NQfB/bDaB8kaSXF8E77JjhHG5PM6XVRxvHzkZiwl3ddWCEPBa23T76MuWSwAJdMGJnmQqM0VeY9kFszsrBEFrQ=='
        crossorigin='anonymous'></script>
    <!-- Bootstrap 5.3.3 js -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js'
        integrity='sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ=='
        crossorigin='anonymous'></script>
    <!-- main.js -->
    <script src="./assets/js/main.js"></script>
</body>

</html>