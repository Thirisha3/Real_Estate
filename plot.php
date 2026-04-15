<?php
include 'header.php';
include 'projects-data.php';
$type = 'plot';
?>
<section class="<?= $type ?>-hero">
    <h1>Premium Residential Plots</h1>
    <p>Invest in prime land locations designed for future growth and high returns.</p>
</section>

<section class="<?= $type ?>-section">
    <div class="container">
        <div class="<?= $type ?>-grid">
            <?php foreach ($projects as $id => $project):
                if ($project['type'] === $type):
            ?>
                    <a href="property-details.php?id=<?= $id ?>" class="card-link">
                        <div class="<?= $type ?>-card">
                            <div class="<?= $type ?>-img">
                                <img src="<?= $project['images'][0] ?>" alt="<?= $project['name'] ?>">
                                <div class="price-badge"><?= $project['price'] ?></div>
                            </div>
                            <div class="<?= $type ?>-content">
                                <h3><?= $project['name'] ?></h3>
                                <div class="location">📍 <?= $project['location'] ?></div>
                                <div class="highlight"><?= $project['config'] ?></div>
                                <span class="view-btn">VIEW DETAILS →</span>
                            </div>
                        </div>
                    </a>
            <?php endif;
            endforeach; ?>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
<style>
    /* ================= GLOBAL STYLES ================= */
    body {
        font-family: 'Poppins', sans-serif;
        margin: 0;
        padding: 0;
        background: #fff8f2;
        /* Warm Luxury Off-White BG */
    }

    /* ================= HERO ================= */
    .plot-hero {
        background: #F6F1EB;
        color: #C8743A;
        padding: 120px 20px 80px;
        text-align: center;
    }

    .plot-hero h1 {
        font-size: 42px;
        font-weight: 600;
        margin-bottom: 20px;
    }

    .plot-hero p {
        font-size: 18px;
        opacity: 0.9;
    }

    /* ================= GRID SECTION ================= */
    .plot-section {
        padding: 80px 20px;
    }

    .container {
        max-width: 1200px;
        margin: auto;
    }

    .plot-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        gap: 40px;
    }

    .card-link {
        text-decoration: none;
    }

    /* ================= PLOT CARD ================= */
    .plot-card {
        background: #fff;
        /* Clean White for premium look */
        box-shadow: 0 15px 40px rgba(200, 116, 58, 0.08);
        /* Soft Terracotta shadow */
        transition: all 0.4s ease;
        cursor: pointer;
        border-bottom: 4px solid transparent;
        border-radius: 12px;
    }

    .plot-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 25px 60px rgba(200, 116, 58, 0.15);
        border-bottom: 4px solid #C8743A;
        /* Accent Terracotta */
    }

    /* ================= PLOT IMAGE ================= */
    .plot-img {
        position: relative;
        overflow: hidden;
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
    }

    .plot-img img {
        width: 100%;
        height: 240px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .plot-card:hover img {
        transform: scale(1.1);
    }

    /* Price Badge */
    .price-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: #C8743A;
        /* Terracotta */
        color: #fff;
        padding: 8px 14px;
        font-size: 14px;
        font-weight: 500;
        border-radius: 8px;
    }

    /* ================= PLOT CONTENT ================= */
    .plot-content {
        padding: 25px;
    }

    .plot-content h3 {
        font-size: 20px;
        margin-bottom: 10px;
        font-weight: 600;
        color: #2b1e16;
        /* Dark Brown-Black */
    }

    .location {
        font-size: 14px;
        color: #5c4a3d;
        /* Muted Brown */
        margin-bottom: 12px;
    }

    .highlight {
        font-size: 15px;
        color: #111;
        margin-bottom: 20px;
    }

    /* View Button */
    .view-btn {
        display: inline-block;
        color: #C6A75E;
        /* Premium Gold */
        font-weight: 600;
        font-size: 14px;
        letter-spacing: 1px;
        transition: 0.3s;
    }

    .plot-card:hover .view-btn {
        letter-spacing: 2px;
    }


    /* ================= RESPONSIVE ================= */
    @media(max-width:768px) {
        .plot-hero h1 {
            font-size: 30px;
        }

        .plot-grid {
            gap: 20px;
        }
    }
</style>