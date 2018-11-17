<template>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel" id="login-app">
        <div class="container">
            <a class="navbar-brand" href="/home">
                cm-mall
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <li class="nav-item" v-if="loginShow">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item" v-else>
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default{
        data() {
            return {
                loginShow: false
            }
        },
        mounted: function() {
            this.is_login();
        },
        methods: {
            is_login: function() {
                console.log(this.$route.path);
                self.loginShow = true;
            }
        }
    }
</script>

<style scoped>

</style>