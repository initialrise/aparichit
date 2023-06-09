document.getElementById('upload-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent form submission
  
    var fileInput = document.getElementById('video');
    var file = fileInput.files[0];
  
    // Perform validation checks if needed
  
    // Perform file upload logic or any other desired actions
  
    // Clear the file input
    fileInput.value = '';
  });
  