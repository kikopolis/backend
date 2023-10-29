<script setup lang="ts">
import {onMounted, ref} from 'vue'
import {WeatherDto} from "@/types";
import WeatherImageService from "@/Service/WeatherImageService";

const props = defineProps({
    weatherDTOs: Object
});
const weatherImageService: WeatherImageService = new WeatherImageService();
const weatherDTOs = ref<Array<WeatherDto>>(props.weatherDTOs);
const addImageToWeatherDTOs = () => {
    weatherDTOs.value.forEach((weatherDto: WeatherDto) => {
        const conditions = weatherImageService.getWeatherConditionImageUrl(weatherDto.weatherCode);
        weatherDto.weatherImage = conditions.image;
        weatherDto.conditions = conditions.description;
    });
}

onMounted(() => {
    addImageToWeatherDTOs();
});

const fetchWeather = async () => {
    const response = await fetch('http://localhost/refresh-weather');
    const data = await response.json();
    const dtos = new Array<WeatherDto>();
    data.weatherDTOs.forEach((weatherDto: WeatherDto) => {
        dtos.push(weatherDto);
    });
    weatherDTOs.value = dtos;
    addImageToWeatherDTOs();
}

const columns = [
    {'data': 'cityName'},
    {'data': 'countryName'},
    {'data': 'languageName'},
    {
        'data': 'temperature',
        'render': (data: any) => data + '°C'
    },
    {
        'data': 'weatherImage',
        'render': (data: any) => '<img src="' + data + '" />',
        'orderable': false
    },
    {'data': 'sunrise'},
    {'data': 'sunset'}
];
const options = {
    'paging': false,
    'searching': false,
    'stripeClasses': ['odd:bg-gray-300', 'even:bg-white'],
};
</script>

<template>
    <div class="container mx-auto max-w-6xl">
        <DataTable :columns="columns" :data="weatherDTOs"
                   :options="options" class="stripe cell-border">
            <thead>
            <tr>
                <th>City</th>
                <th>Country</th>
                <th>Language</th>
                <th>Temperature</th>
                <th>Conditions</th>
                <th>Sunrise</th>
                <th>Sunset</th>
            </tr>
            </thead>
        </DataTable>
    </div>
    
    <div class="row text-center mt-6 mb-20">
        <button @click="fetchWeather" class="bg-blue-100 rounded-md py-2 px-4"
        >
            Refresh
        </button>
    </div>
</template>

<style>
@import 'datatables.net-dt';
</style>
