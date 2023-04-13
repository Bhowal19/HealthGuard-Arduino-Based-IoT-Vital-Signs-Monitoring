$(document).ready(function() {
    // Function to retrieve data from PHP script
    function retrieveData() {
      $.ajax({
        url: "getData.php",
        success: function(data) {
          // Replace the table body with the updated data
          $("#data-table").html(data);
        }
      });
    }
  
    // Retrieve data initially when page loads
    retrieveData();
  
    // Retrieve data every 1 second
    setInterval(retrieveData, 1000);
  });
  $(document).ready(function() {
    setInterval(function() {
      $("#data-table").load("data.php");
    }, 1000); // Update every 1 second
  });
  