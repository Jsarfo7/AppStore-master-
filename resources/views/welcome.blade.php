<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Vault - App Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        /* Black banner with "The Vault" */
        header {
            background-color: black;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 24px;
        }

        .search-bar {
        display: flex;
        align-items: center;
        justify-content: flex-end; /* Move the search bar to the right */
    }

    .search-bar input {
        padding: 10px;
        margin-right: 10px;
        border: none;
        border-radius: 20px;
        font-size: 16px;
        width: 250px; /* Adjust width as needed */
    }

        .search-bar button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 20px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
        }

        /* App card styles */
        .app-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 20px; /* Add padding between app cards */
        }

        .app-card {
            width: calc(33.333% - 20px);
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .app-card:hover {
            transform: scale(1.02);
        }

        /* Button styles */
        .app-button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.2s;
        }

        .app-button:hover {
            background-color: #0056b3;
        }

        /* Add some spacing between elements for better readability */
        .app-title, .app-subtitle, .app-description {
            margin-bottom: 10px;
        }

        /* Customize the scrollbar style (optional) */
        body::-webkit-scrollbar {
            width: 12px;
        }

        body::-webkit-scrollbar-thumb {
            background-color: #007BFF;
            border-radius: 10px;
        }

        body::-webkit-scrollbar-track {
            background: #f5f5f5;
        }

        /* Set a fixed size for the app images */
        .app-card img {
            max-width: 100px; /* Adjust the size as needed */
            max-height: 100px; /* Adjust the size as needed */
        }
    </style>
</head>
<body>
    <header>
        The Vault
    </header>

    <div class="search-bar">
        <input id="searchInput" type="text" placeholder="Search..." oninput="filterApps()">
        <label for="categoryFilter">Filter by Category:</label>
        <select id="categoryFilter" onchange="filterByCategory()">
            <option value="All">All</option>
            <option value="Environmental">Environmental</option>
            <option value="Fitness">Fitness</option>
            <option value="Entertainment">Entertainment</option>
        </select>
    </div>

    <div class="app-container" id="appContainer">
    </div>

    <script>
        const applications = [
            {
                name: "EcoExplorer",
                category: "Environmental",
                description: " EcoExplorer is a must-have app for environmentally conscious individuals...",
                image: "{{ asset('images/ecofriendlyappicon.jpg') }}",
            },
            {
                name: "FitFusion",
                category: "Fitness",
                description: " FitFusion is the ultimate fitness app that combines the best of various workout styles...",
                image: "{{ asset('images/fitnessappicon.jpg') }}",
            },
            {
                name: "MindMaze",
                category: "Entertainment",
                description: " MindMaze is a captivating and immersive puzzle adventure game...",
                image: "{{ asset('images/puzzlegameicon.jpg') }}",
            },
            // Add more applications here
        ];

        const appContainer = document.getElementById("appContainer");

        function displayApplications(apps) {
            appContainer.innerHTML = "";
            apps.forEach(app => {
                appContainer.innerHTML += `
                    <div class="app-card">
                        <img src="${app.image}" alt="${app.name} Image">
                        <h2 class="app-title">${app.name}</h2>
                        <h3 class="app-subtitle">${app.category}</h3>
                        <p class="app-description">${app.description}</p>
                        <button class="app-button">Download</button>
                    </div>
                `;
            });
        }

        displayApplications(applications);

        function filterApps() {
            const searchInput = document.getElementById("searchInput").value.toLowerCase();
            const filteredApps = applications.filter(app => app.name.toLowerCase().includes(searchInput));
            displayApplications(filteredApps);
        }

        function filterByCategory() {
            const selectedCategory = document.getElementById("categoryFilter").value;
            if (selectedCategory === "All") {
                displayApplications(applications);
            } else {
                const filteredApps = applications.filter(app => app.category === selectedCategory);
                displayApplications(filteredApps);
            }
        }
    </script>
</body>
</html>