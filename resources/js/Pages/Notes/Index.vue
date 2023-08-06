<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link } from '@inertiajs/vue3';

defineProps({
    notes: Array,
});
</script>

<template>
    <AppLayout title="Notas">
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Modulo de notas
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                        <div class="px-4 sm:px-0">
                            <h3 class="text-lg text-gray-900">
                                Listado de notas
                            </h3>
                            <p class="text-sm text-gray-600">
                                Aca van las funciones de los listado
                            </p>
                        </div>
                    </div>
                    <div class="mt-5 md:col-span-2 md:mt-0">
                        <div class="p-4 bg-white shadow md:rounded-md">
                            <table>
                                <tr v-for="note in notes">
                                    <td class="px-4 py-2 border">
                                        {{ note.excerpt }}
                                    </td>
                                    <td class="px-4 py-2">

                                    </td>


                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
