
// Get all category boxes
const categoryBoxes = document.querySelectorAll('.category-box');

// Get all suggestions
const suggestions = document.querySelectorAll('.suggestion');

// Attach click event listener to each category box
categoryBoxes.forEach(categoryBox => {
  categoryBox.addEventListener('click', () => {
    const selectedCategory = categoryBox.getAttribute('data-category');

    // Hide all suggestions
    suggestions.forEach(suggestion => {
      const suggestionCategory = suggestion.getAttribute('data-category');

      if (selectedCategory === 'all' || selectedCategory === suggestionCategory) {
        suggestion.style.display = 'block';
      } else {
        suggestion.style.display = 'none';
      }
    });
  });
});
