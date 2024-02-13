import axios from 'axios'

// Define the URL of the PHP endpoint
const PHP_API_URL = 'https://melbournedroneflyers.org/api/'

// Function to fetch data from the PHP endpoint with parameters
const fetchData = async (endpoint: string, params: any): Promise<any> => {
  try {
    // Make a POST request to the PHP endpoint with the provided params
    console.log('POST', `${PHP_API_URL}${endpoint}`, params)
    const response = await axios.post(`${PHP_API_URL}${endpoint}`, params)

    // Return the data received from the API
    return response.data
  } catch (error) {
    // Handle any errors that occur during the request
    throw new Error('Failed to fetch data')
  }
}

export default fetchData
