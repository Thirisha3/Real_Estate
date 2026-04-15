<?php include 'header.php'; ?>
<?php
include 'projects-data.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if (!isset($projects[$id])) die("Property Not Found");

$project = $projects[$id];
?>

<?php include 'header.php'; ?>

<div class="container">

    <h1><?= htmlspecialchars($project['name']) ?></h1>
    <p><strong>Price:</strong> <?= htmlspecialchars($project['price']) ?></p>
    <p><strong>Location:</strong> <?= htmlspecialchars($project['location']) ?></p>

    <div class="gallery">
        <?php
        if (!empty($project['images'])) {
            foreach ($project['images'] as $img) {
                $imgSrc = file_exists($img) ? $img : 'assets/images/placeholder.jpg';
                echo "<img src='" . htmlspecialchars($imgSrc) . "' alt='Property Image'>";
            }
        } else {
            echo "<p>No images available.</p>";
        }
        ?>
    </div>

    <div class="section">
        <h2>Project Overview</h2>
        <p><?= htmlspecialchars($project['description']) ?></p>
        <p><strong>Builder:</strong> <?= htmlspecialchars($project['builder']) ?></p>
        <p><strong>Configuration:</strong> <?= htmlspecialchars($project['config']) ?></p>
        <p><strong>Size:</strong> <?= htmlspecialchars($project['size']) ?></p>
        <p><strong>Status:</strong> <?= htmlspecialchars($project['status']) ?></p>
    </div>

    <div class="section">
        <h2>Amenities</h2>
        <?php if (!empty($project['amenities'])): ?>
            <ul>
                <?php foreach ($project['amenities'] as $amenity): ?>
                    <li><?= htmlspecialchars($amenity) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>No amenities listed.</p>
        <?php endif; ?>
    </div>

    <div class="section">
        <h2>Location Map</h2>
        <?php if (!empty($project['map']) && $project['map'] != '#'): ?>
            <p>
                <a href="<?= htmlspecialchars($project['map']) ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    style="color: #007bff; font-weight: bold;">
                    View Location on Google Maps
                </a>
            </p>
        <?php else: ?>
            <p>Map not available for this property.</p>
        <?php endif; ?>
    </div>

</div>

<?php include 'footer.php'; ?>

<style>
    /* ================= GLOBAL STYLES ================= */
    body {
        font-family: 'Poppins', sans-serif;
        background: #fff8f2;
        /* Warm Luxury Off-White */
        margin: 0;
        padding: 0;
    }

    /* ================= CONTAINER ================= */
    .container {
        max-width: 1100px;
        margin: auto;
        padding: 120px 15px 40px;
        /* added top space for header */
    }

    /* ================= GALLERY ================= */
    .gallery {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 30px;
    }

    .gallery img {
        width: calc(33.33% - 10px);
        height: 250px;
        object-fit: cover;
        border-radius: 12px;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        cursor: pointer;
    }

    .gallery img:hover {
        transform: scale(1.05);
        box-shadow: 0 15px 40px rgba(200, 116, 58, 0.2);
        /* Terracotta soft shadow */
    }

    /* ================= SECTIONS ================= */
    .section {
        margin: 30px 0;
        background: #fff;
        /* Clean white cards */
        padding: 20px 25px;
        border-radius: 12px;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.05);
    }

    /* Headings */
    h2 {
        color: #2b1e16;
        /* Dark Brown */
        margin-bottom: 15px;
        font-weight: 700;
        position: relative;
        display: inline-block;
    }

    h2::after {
        content: "";
        display: block;
        width: 60px;
        height: 4px;
        background: #C6A75E;
        /* Premium Gold underline */
        margin-top: 8px;
        border-radius: 2px;
    }

    /* Lists */
    ul {
        padding-left: 20px;
        color: #5c4a3d;
        /* Muted Brown text */
    }

    /* Iframe / Map */
    iframe {
        width: 100%;
        height: 350px;
        border: 0;
        border-radius: 12px;
        box-shadow: 0 15px 40px rgba(200, 116, 58, 0.1);
        /* subtle terracotta tint */
    }

    /* ================= RESPONSIVE ================= */
    @media (max-width: 768px) {
        .gallery img {
            width: calc(50% - 10px);
        }
    }

    @media (max-width: 480px) {
        .gallery img {
            width: 100%;
        }
    }
</style>