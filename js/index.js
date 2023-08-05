const apiUrl = "https://tan-poised-kingfisher.cyclic.app/api/v1";



async function fetchData(type) {
    try {
      const response = await fetch(`${apiUrl}/${type}`);
      if (!response.ok) {
        throw new Error('Network response was not ok');
      }
      const data = await response.json();
      console.log(data);
      return data.data;
    } catch (error) {
      // Handle errors, e.g., display an error message
      console.error('Error fetching data:', error);
      return null; // Or you can throw the error again if you want to handle it elsewhere
    }
  }
  