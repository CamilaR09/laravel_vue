<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200" >
            

            <h1 class="mt-8 text-2xl font-medium text-gray-900">
                Welcome, {{ $page.props.auth.user.roles[0].name }}
            </h1>
            

            <p class="mt-6 text-gray-500 leading-relaxed">
                ¡Hola, {{ $page.props.auth.user.name }}! Bienvenido a la aplicación.
            </p>
        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
            
            <div v-if="$page.props.user.permissions.includes('read roles')">
                <div class="flex items-center">
                    <h2 class="ms-3 text-xl font-semibold text-gray-900">
                        <a>Roles</a>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    CRUD De Roles
                </p>

                <p class="mt-4 text-sm">
                    <a href="https://laravel.com/docs" class="inline-flex items-center font-semibold text-indigo-700">
                        Ver
                    </a>
                </p>
            </div>
            
            <div v-if="$page.props.user.permissions.includes('read asignatura')">
                <div class="flex items-center">
                    <h2 class="ms-3 text-xl font-semibold text-gray-900">
                        <a>Asignaturas</a>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    CRUD De Asignaturas
                </p>

                <p class="mt-4 text-sm">
                    <a href="https://laravel.com/docs" class="inline-flex items-center font-semibold text-indigo-700">
                        Ver
                    </a>
                </p>
            </div>

            <div v-if="$page.props.user.permissions.includes('read semesters')">
                <div class="flex items-center">
                    <h2 class="ms-3 text-xl font-semibold text-gray-900">
                        <a>Semestres</a>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    CRUD De Semestres
                </p>

                <p class="mt-4 text-sm">
                    <a href="https://laracasts.com" class="inline-flex items-center font-semibold text-indigo-700">
                        Ver
                    </a>
                </p>
            </div>

            <div v-if="$page.props.user.permissions.includes('read axsemeste')">
                <div class="flex items-center">
                    <h2 class="ms-3 text-xl font-semibold text-gray-900">
                        <a>Asignatura por Semestres</a>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    CRUD De Asignatura por Semestres
                </p>

                <p class="mt-4 text-sm">
                    <a href="https://laracasts.com" class="inline-flex items-center font-semibold text-indigo-700">
                        Ver
                    </a>
                </p>
            </div>




        </div>
    </div>
</template>
