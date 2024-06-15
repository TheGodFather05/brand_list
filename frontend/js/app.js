
document.addEventListener('DOMContentLoaded', function() {
  const apiUrl = 'http://localhost:8000/api/brands';
  const itemsList = document.getElementById('itemsList');

  // Function to generate stars based on rating
  function generateStars(rating) {
    const maxStars = 5;
    let stars = '';
    for (let i = 1; i <= maxStars; i++) {
      if (i <= rating) {
        stars += '★';
      } else {
        stars += '☆';
      }
    }
    return stars;
  }

  // Fetch and display items
  async function fetchItems() {
    try {
      const response = await fetch(apiUrl);

      // Check if the response is okay
      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }

      const json = await response.json();

      const items = json.data
      // Log the response to check its structure
      console.log('API response:', items);
      console.log('items')
console.log(items)
      // Check if items is an array
      if (!Array.isArray(items)) {
        throw new TypeError('API response is not an array');
      }

      // Populate the items list
      itemsList.innerHTML = items.map(item => `
                <li>
                    <img src="${item.brand_image}" alt="${item.brand_name}">
                    <div class="item-info">
                        <h3>${item.brand_name}</h3>
                        <div class="stars">${generateStars(item.rating)}</div>
                    </div>
                </li>
            `).join('');
    } catch (error) {
      console.error('Error fetching items:', error);
    }
  }

  fetchItems();
});

