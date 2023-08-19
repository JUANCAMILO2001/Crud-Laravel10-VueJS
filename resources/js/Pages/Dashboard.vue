<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Bienvenid@ <span style="font-weight: 800; font-size: 17px">{{ $page.props.auth.user.name }}</span> ahora podrás acceder a todos los funcionamientos del aplicativo!
                        <br>
                        <br>
                        Encontrarás las Ciudades, Jugadores, Gráficas y un reporte detallado de los jugadores que hay hasta el momento y a qué ciudades pertenecen, los podrás descargar, copiar o imprimir.
                        <br>
                        <br>
                        Si quieres que te enseñe a crear este sitio web, mándeme un mensaje accediendo a la siguiente página web opción Contacto.
                        <br>
                        Página Web de contacto: <a target="_blank" style="color: blue" href="https://portafolio.lckm-innovaty.com/public">Portafolio de Juan Camilo Rodriguez</a>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
