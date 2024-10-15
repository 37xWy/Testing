<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unveiled Japan - Planner</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div id="header">
        <h2><b><a href="Homepage.html">Unveiled Japan</a></b></h2>
        <p align="right"><a href="login.html">Login/Register</a></p>
    </div>

    <hr>

    <div id="nav-container">
    <a href="Homepage.php" class="button">Homepage</a>
    <a href="Places.html" class="button">Places</a>
    <a href="Planner.php" class="button">Planner</a>
    <a href="Review.html" class="button">Write a Review</a>
    <a href="Search.php" class="button">Search</a>
    </div>

    <hr>

    <h2 align="center">Planner</h2>

    <!-- Date input fields -->
    <div class="date-container">
        <label for="startDate">Start Date:</label>
        <input type="date" id="startDate" class="date-input" min="">

        <label for="endDate">End Date:</label>
        <input type="date" id="endDate" class="date-input" min="">
    </div>

    <div id="planner-container">
        <div class="days-slider" id="daysSlider">
            <!-- Days will be dynamically added here -->
        </div>

        <div id="preview">
            <h2>Attraction Details</h2>
            <img id="previewImage" src="" alt="Preview Image" style="width:100%; height:200px; object-fit:cover;">
            <p id="previewPlace">Place: </p>
            <p id="previewType">Type: </p>
            <p id="previewCost">Cost: </p>
            <p id="previewStatus">Status: </p>
            <p id="previewTime">Time: </p>
        </div>
    </div>

    <div id="search-results"></div>

    <script>
        // Set minimum date to today for start date input
        const today = new Date().toISOString().split('T')[0];
        document.getElementById('startDate').min = today;

        // Event listener for start date
        document.getElementById('startDate').addEventListener('change', function() {
            const startDateValue = this.value;
            document.getElementById('endDate').min = startDateValue;
            if (new Date(startDateValue) > new Date(document.getElementById('endDate').value)) {
                document.getElementById('endDate').value = '';
            }
            generateDays(startDateValue, document.getElementById('endDate').value);
        });

        // Event listener for end date
        document.getElementById('endDate').addEventListener('change', function() {
            const endDateValue = this.value;
            const startDateValue = document.getElementById('startDate').value;
            if (new Date(endDateValue) < new Date(startDateValue)) {
                alert("End date cannot be before start date.");
                this.value = '';
            } else {
                generateDays(startDateValue, endDateValue);
            }
        });

        function generateDays(startDate, endDate) {
            const daysSlider = document.getElementById('daysSlider');
            daysSlider.innerHTML = ''; // Clear existing days
            if (startDate && endDate) {
                const start = new Date(startDate);
                const end = new Date(endDate);
                const timeDiff = end - start;
                const daysCount = timeDiff / (1000 * 3600 * 24);

                for (let i = 0; i <= daysCount; i++) {
                    const currentDay = new Date(start);
                    currentDay.setDate(currentDay.getDate() + i);
                    const dayBox = document.createElement('div');
                    dayBox.classList.add('planner-day');
                    const dayTitle = `${currentDay.toLocaleDateString('en-GB', { day: '2-digit', month: '2-digit', year: 'numeric' })} (${currentDay.toLocaleString('en-US', { weekday: 'long' })})`;
                    dayBox.innerHTML = `<h3>${dayTitle}</h3><button class="add-card-btn" onclick="addCard(this.closest('.planner-day'))">+ New Attraction</button>`;
                    daysSlider.appendChild(dayBox);
                }
            }
        }

        function addCard(plannerDay) {
            let newCard = document.createElement('div');
            newCard.classList.add('attraction-card');
            
            // Set default content for the new card
            newCard.innerHTML = '<p>New Attraction</p><img src="images/sharkboo.jpeg" alt="Attraction Image" style="width:100%; height:100px; object-fit:cover;">';

            // Add an event listener to update the preview when the card is clicked
            newCard.addEventListener('click', function() {
                updatePreview(newCard);
            });

            // Insert the new card before the "Add Card" button
            plannerDay.insertBefore(newCard, plannerDay.querySelector('.add-card-btn'));
        }

        function updatePreview(attraction) {
            // Extract the information from the card to display in the preview section
            const place = attraction.querySelector('p').innerText;
            const imgSrc = attraction.querySelector('img').src;

            // Update the preview section with the details from the clicked attraction
            document.getElementById('previewPlace').innerText = `Place: ${place}`;
            document.getElementById('previewImage').src = imgSrc;  // Update the preview image
        }
    </script>
</body>
</html>