import axios from 'axios';


// Créer une instance Axios avec la baseURL
const apiService = axios.create({
    baseURL: import.meta.env.VITE_APP_API_URL || 'http://127.0.0.1:8000/api',
    headers: {
        Accept: "application/json",
        'Content-Type': 'application/json',
    }
});

export default apiService;
