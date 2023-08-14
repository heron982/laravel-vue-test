<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/">
                    Agence
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item">
                            <router-link class="nav-link" to="/listarConsultores">Listar Consultores</router-link>
                        </li>
                        <li class="nav-item">
                            <router-link class="nav-link" to="/">Pagina inicial</router-link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
    </div>
</template>

<script>
export default {
    name: "MenuComponent"
}
</script>
