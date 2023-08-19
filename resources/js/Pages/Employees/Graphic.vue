<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

import {ref} from 'vue';
import {Bar, Pie} from 'vue-chartjs';
import { Chart as ChartJs, Title, Tooltip, Legend, BarElement, CategoryScale,LinearScale, ArcElement} from "chart.js";
ChartJs.register(Title, Tooltip, Legend, BarElement, CategoryScale,LinearScale, ArcElement);

const props = defineProps({
    data:{type:Object}
});
const departments = ref([]);
const employees = ref([]);
const chartData = ref([]);
const chartOptions = ref([]);
const colors = ref([]);

const random = () =>{
    return Math.floor(Math.random() * 256);
}
props.data.map( (row) =>(
    departments.value.push(row.name),
    employees.value.push(row.count),
    colors.value.push("rgb("+random()+","+random()+","+random()+")")
))
chartOptions.value={
    responsive:true
}
chartData.value = {
    labels:departments.value,
    datasets:[
        {label:'Jugadores',data:employees.value,backgroundColor:colors}
    ]
}
</script>

<template>
    <Head title="Gráficas" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Gráficas</h2>
        </template>

        <div class="py-12">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
                <div class="p-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="mt-6 ml-6">Grafica De Barras:</h2>
                    <Bar :data="chartData" :options="chartOptions"></Bar>
                    <h2 class="mt-6 ml-6">Grafica de pastel:</h2>
                    <br>
                    <Pie :data="chartData" :options="chartOptions"></Pie>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
