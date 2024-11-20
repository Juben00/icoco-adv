<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BeachStay Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f7f7f7;
            font-family: 'Circular', -apple-system, BlinkMacSystemFont, Roboto, Helvetica Neue, sans-serif;
            padding-top: 76px;
            /* Account for fixed navbar */
        }

        .navbar {
            background-color: #ffffff !important;
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: bold;
            color: #e84545;
            !important;
        }

        .nav-link {
            color: #222222 !important;
            font-weight: 500;
        }

        .nav-link:hover,
        .nav-link.active {
            color: #e84545 !important;
        }

        .profile-icon {
            width: 32px;
            height: 32px;
            background-color: #e84545;
            ;
            color: white;
            font-size: 16px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            cursor: pointer;
        }

        .section {
            display: none;
        }

        .section.active {
            display: block;
        }

        .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: box-shadow 0.3s ease-in-out;
            margin-bottom: 20px;
        }

        .card:hover {
            box-shadow: 0 8px 28px rgba(0, 0, 0, 0.15);
        }

        .card-img-top {
            height: 250px;
            object-fit: cover;
        }

        .card-body {
            padding: 24px;
        }

        .card-title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .badge {
            font-weight: 500;
            padding: 5px 10px;
            border-radius: 30px;
            background-color: #ffeeee !important;
            color: #e84545;
            !important;
        }

        .btn {
            border-radius: 8px;
            font-weight: 500;
        }

        .btn-primary {
            background-color: #e84545;
            ;
            border-color: #e84545;
            ;
        }

        .btn-primary:hover {
            background-color: #cc0000;
            border-color: #cc0000;
        }

        .btn-outline-primary {
            color: #e84545;
            ;
            border-color: #e84545;
            ;
        }

        .btn-outline-primary:hover {
            background-color: #e84545;
            ;
            color: white;
        }

        .btn-outline-danger {
            color: #e84545;
            ;
            border-color: #e84545;
            ;
        }

        .btn-outline-danger:hover {
            background-color: #e84545;
            ;
            color: white;
        }

        .info-box {
            background-color: #fff;
            width: fit-content;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Icoco</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-section="rents">Rents</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-section="listings">Listings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-section="bookmarks">Bookmarks</a>
                    </li>
                    <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                        <div class="profile-icon">J</div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div id="rents" class="section active">
            <h2 class="mb-4 fs-5">Your Rents</h2>
            <div class="info-box">
                <h5>Active Bookings</h5>
                <p>These are your current active bookings. Enjoy your stay!</p>
            </div>
            <div class="row" id="rentsContent"></div>
        </div>

        <div id="listings" class="section">
            <h2 class="mb-4 fs-5">Your Listings</h2>
            <div class="info-box">
                <h5>Post a Venue</h5>
                <p>Have a great place to share? List it now and start earning!</p>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addVenueModal">Add New
                    Listing</button>
            </div>
            <div class="row" id="listingsContent"></div>
        </div>

        <div id="bookmarks" class="section">
            <h2 class="mb-4 fs-5">Your Bookmarks</h2>
            <div class="info-box">
                <h5>Book a Saved Venue</h5>
                <p>Ready to book one of your saved places? Click on a bookmark to get started!</p>
            </div>
            <div class="row" id="bookmarksContent"></div>
        </div>
    </div>

    <!-- Add Venue Modal -->
    <div class="modal fade" id="addVenueModal" tabindex="-1" aria-labelledby="addVenueModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addVenueModalLabel">Add New Venue</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addVenueForm">
                        <div class="mb-3">
                            <label for="venueName" class="form-label">Venue Name</label>
                            <input type="text" class="form-control" id="venueName" required>
                        </div>
                        <div class="mb-3">
                            <label for="venueDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="venueDescription" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="venuePrice" class="form-label">Price per Night</label>
                            <input type="number" class="form-control" id="venuePrice" required>
                        </div>
                        <div class="mb-3">
                            <label for="venueTags" class="form-label">Tags (comma-separated)</label>
                            <input type="text" class="form-control" id="venueTags">
                        </div>
                        <div class="mb-3">
                            <label for="venueImage" class="form-label">Image URL</label>
                            <input type="url" class="form-control" id="venueImage" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addVenue()">Add Venue</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Sample data
        let rents = [
            { id: 1, name: "Beachfront Villa", price: "$200/night", description: "Beautiful villa with ocean view", image: "./assets/img/beach-cover.jpg", tags: ["beachfront", "villa"] },
            { id: 2, name: "Cozy Cottage", price: "$100/night", description: "Charming cottage near the beach", image: "./assets/img/beach-cover.jpg", tags: ["cozy", "cottage"] }
        ];

        let listings = [
            { id: 1, name: "Luxury Apartment", price: "$150/night", description: "Modern apartment with all amenities", image: "./assets/img/beach-cover.jpg", tags: ["luxury", "apartment"] },
            { id: 2, name: "Beach House", price: "$180/night", description: "Spacious house steps from the beach", image: "./assets/img/beach-cover.jpg", tags: ["beach", "house"] }
        ];

        let bookmarks = [
            { id: 1, name: "Seaside Resort", price: "$250/night", description: "All-inclusive resort with private beach", image: "./assets/img/beach-cover.jpg", tags: ["seaside", "resort"] },
            { id: 2, name: "Ocean View Studio", price: "$120/night", description: "Cozy studio with panoramic ocean views", image: "./assets/img/beach-cover.jpg", tags: ["ocean view", "studio"] }
        ];

        function renderCard(item, type) {
            return `
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card h-100">
                        <img src="${item.image}" class="card-img-top" alt="${item.name}">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">${item.name}</h5>
                            <p class="card-text text-muted mb-2">${item.description}</p>
                            <p class="card-text mb-3"><strong>${item.price}</strong> / night</p>
                            <div class="mt-auto">
                                ${item.tags.map(tag => `<span class="badge me-1 mb-1">${tag}</span>`).join('')}
                            </div>
                            ${type === 'listing' ? `
                                <div class="mt-3">
                                    <button class="btn btn-sm btn-outline-primary me-1" onclick="editListing(${item.id})">Edit</button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="deleteListing(${item.id})">Delete</button>
                                </div>
                            ` : type === 'bookmark' ? `
                                <div class="mt-3">
                                    <button class="btn btn-sm btn-outline-primary me-1" onclick="bookVenue(${item.id})">Book Now</button>
                                    <button class="btn btn-sm btn-outline-danger" onclick="removeBookmark(${item.id})">Remove</button>
                                </div>
                            ` : ''}
                        </div>
                    </div>
                </div>
            `;
        }

        function renderRents() {
            const rentsContent = document.getElementById('rentsContent');
            rentsContent.innerHTML = rents.map(rent => renderCard(rent, 'rent')).join('');
        }

        function renderListings() {
            const listingsContent = document.getElementById('listingsContent');
            listingsContent.innerHTML = listings.map(listing => renderCard(listing, 'listing')).join('');
        }

        function renderBookmarks() {
            const bookmarksContent = document.getElementById('bookmarksContent');
            bookmarksContent.innerHTML = bookmarks.map(bookmark => renderCard(bookmark, 'bookmark')).join('');
        }

        function switchSection(sectionId) {
            document.querySelectorAll('.section').forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(sectionId).classList.add('active');

            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
            });
            document.querySelector(`.nav-link[data-section="${sectionId}"]`).classList.add('active');
        }

        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const sectionId = e.target.getAttribute('data-section');
                switchSection(sectionId);
            });
        });

        function addVenue() {
            const name = document.getElementById('venueName').value;
            const description = document.getElementById('venueDescription').value;
            const price = document.getElementById('venuePrice').value;
            const tags = document.getElementById('venueTags').value.split(',').map(tag => tag.trim());
            const image = document.getElementById('venueImage').value;

            const newVenue = {
                id: listings.length + 1,
                name,
                description,
                price: `$${price}/night`,
                tags,
                image
            };

            listings.push(newVenue);
            renderListings();

            // Close the modal
            const modal = bootstrap.Modal.getInstance(document.getElementById('addVenueModal'));
            modal.hide();

            // Reset the form
            document.getElementById('addVenueForm').reset();
        }

        function editListing(id) {
            alert(`Edit listing ${id} functionality to be implemented`);
        }

        function deleteListing(id) {
            listings = listings.filter(listing => listing.id !== id);
            renderListings();
        }

        function removeBookmark(id) {
            bookmarks = bookmarks.filter(bookmark => bookmark.id !== id);
            renderBookmarks();
        }

        function bookVenue(id) {
            alert(`Booking venue ${id} functionality to be implemented`);
        }

        // Initial render
        renderRents();
        renderListings();
        renderBookmarks();
    </script>
</body>

</html>