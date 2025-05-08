<script setup>
import { ref, onMounted } from "vue";
import axios from "axios";

const dataItems = ref([]);
const error = ref(null);

// Function to fetch data from the backend
const fetchData = async () => {
    try {
        // Replace with the actual URL of your Laravel backend API
        // If running Laravel with `php artisan serve`, it's usually http://127.0.0.1:8000
        const response = await axios.get("http://127.0.0.1:8000/api/data");
        dataItems.value = response.data;
    } catch (err) {
        error.value = "Failed to fetch data: " + err.message;
        console.error(err);
    }
};

// Fetch data when the component is mounted
onMounted(() => {
    fetchData();
});
</script>

<template>
    <div>
        <h1>Data from Laravel Backend</h1>

        <div v-if="error" class="error">{{ error }}</div>

        <ul v-if="dataItems.length">
            <li v-for="item in dataItems" :key="item.id">
                {{ item.name }} - Value: {{ item.value }}
            </li>
        </ul>
        <div v-else-if="!error">Loading data...</div>
    </div>
</template>

<style scoped>
.error {
    color: red;
    font-weight: bold;
}
</style>
