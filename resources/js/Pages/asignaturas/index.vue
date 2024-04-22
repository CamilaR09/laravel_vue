<script>
export default {
    name: 'AsignaturaIndex'
}
</script>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue' 

//El error que sale Cannot find module '@/Layout/AppLayout.vue' or its corresponding type declarations.ts-plugin(2307)
</script>

<template>
    <AppLayout>
        <template #header>
            <h1 class="font-semibold text-xl text-gray-800 leading-tight">Asignaturas</h1>
        </template>
    </AppLayout>
</template>