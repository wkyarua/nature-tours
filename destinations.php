<?php require_once 'includes/header.php'; ?>

<?php
// PHP Array to easily manage destinations. Much better than a database for static content!
$tanzania = [
    ["name" => "Serengeti National Park", "desc" => "The ultimate safari destination, characterized by vast, endless plains.", "usp" => "The Great Migration cycle and dramatic river crossings.", "img" => "images/serengeti.jpeg"],
    ["name" => "Ngorongoro Conservation Area", "desc" => "A breathtaking natural amphitheater formed by a collapsed volcano.", "usp" => "World's largest intact caldera with a massive concentration of the Big Five.", "img" => "images/ngorongoro.jpeg"],
    ["name" => "Tarangire National Park", "desc" => "The landscape is dotted with iconic, ancient baobab trees.", "usp" => "Famous for having the largest concentration of elephants in Tanzania.", "img" => "images/tarangire.jpeg"],
    ["name" => "Lake Manyara National Park", "desc" => "A scenic gem stretching along the base of the Rift Valley escarpment.", "usp" => "Legendary tree-climbing lions and massive flocks of pink flamingos.", "img" => "images/lmanyara.jpeg"],
    ["name" => "Lake Eyasi", "desc" => "A mildly alkaline lake surrounded by ancient cultures.", "usp" => "Authentic cultural interactions with the hunter-gatherer Hadzabe tribe.", "img" => "images/eyasi.jpeg"],
    ["name" => "Ruaha National Park", "desc" => "Tanzania's largest national park, offering an incredibly raw, untouched wilderness experience.", "usp" => "Exceptional predator viewing, particularly massive lion prides and wild dogs.", "img" => "images/ruaha.jpeg"],
    ["name" => "Nyerere National Park", "desc" => "Formerly the Selous Game Reserve, it is one of the largest protected areas in Africa.", "usp" => "Unique boat safaris on the Rufiji River alongside hippos and crocs.", "img" => "images/nyerere.jpeg"]
];

$kenya = [
    ["name" => "Maasai Mara National Reserve", "desc" => "The northern extension of the Serengeti ecosystem.", "usp" => "Exceptional big cat sightings and the dramatic Mara River crossings.", "img" => "images/maasaimara.jpeg"],
    ["name" => "Amboseli National Park", "desc" => "A spectacular park located right on the border of Tanzania.", "usp" => "The absolute best views of Mount Kilimanjaro framing giant-tusked elephants.", "img" => "images/amboseli.jpeg"],
    ["name" => "Lake Nakuru", "desc" => "A beautiful rift valley lake surrounded by wooded and bushy grassland.", "usp" => "A premier rhino sanctuary ensuring almost guaranteed sightings.", "img" => "images/nakuru.jpeg"],
    ["name" => "Lake Naivasha", "desc" => "A freshwater lake located at the highest elevation of the Kenyan Rift Valley.", "usp" => "Walking safaris among herbivores at Crescent Island and scenic boat rides.", "img" => "images/naivasha.jpeg"]
];

$beaches = [
    ["name" => "Zanzibar Archipelago", "desc" => "The legendary Spice Islands off the coast of Tanzania.", "usp" => "Historic Stone Town tours blending with pristine, turquoise-water beaches.", "img" => "images/zanzibararchipelago.jpeg"],
    ["name" => "Diani Beach", "desc" => "Kenya's most famous coastal resort area.", "usp" => "Award-winning, endless stretches of flawless white sand and water sports.", "img" => "images/diani.jpeg"]
];
?>

<section class="hero" style="background: linear-gradient(rgba(30,30,30,0.6), rgba(30,30,30,0.8)), url('images/image_3.png') center/cover; padding: 120px 0; text-align: center;">
    <h1 style="color: var(--primary-yellow);">Explore Our Destinations</h1>
    <p style="color: white; font-size: 1.2rem; max-width: 600px; margin: auto;">Discover the raw beauty, diverse wildlife, and stunning landscapes of East Africa.</p>
</section>

<div class="container section-padding">
    
    <h2 style="border-bottom: 3px solid var(--primary-orange); display: inline-block; padding-bottom: 5px; margin-bottom: 30px;">Tanzania Destinations</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin-bottom: 80px;">
        <?php foreach($tanzania as $dest): ?>
        <div class="premium-card">
            <div class="card-img-wrapper">
                <img src="<?= $dest['img'] ?>" alt="<?= $dest['name'] ?>" onerror="this.src='images/image_0.png'">
                <span style="position: absolute; top: 15px; left: 15px; background: var(--primary-orange); color: white; padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: bold;">Tanzania</span>
            </div>
            <div class="card-content">
                <h3 style="font-size: 1.4rem;"><?= $dest['name'] ?></h3>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 15px;"><?= $dest['desc'] ?></p>
                <div style="background: var(--warm-beige); padding: 15px; border-radius: 8px; margin-top: auto; border-left: 4px solid var(--primary-orange);">
                    <strong style="color: var(--earth-brown); display: block; margin-bottom: 5px; font-size: 0.9rem;">Unique Selling Point:</strong>
                    <span style="font-size: 0.9rem; color: #444;"><?= $dest['usp'] ?></span>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <h2 style="border-bottom: 3px solid var(--primary-orange); display: inline-block; padding-bottom: 5px; margin-bottom: 30px;">Kenya Destinations</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; margin-bottom: 80px;">
        <?php foreach($kenya as $dest): ?>
        <div class="premium-card">
            <div class="card-img-wrapper">
                <img src="<?= $dest['img'] ?>" alt="<?= $dest['name'] ?>" onerror="this.src='images/image_1.png'">
                <span style="position: absolute; top: 15px; left: 15px; background: #000; color: white; padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: bold;">Kenya</span>
            </div>
            <div class="card-content">
                <h3 style="font-size: 1.4rem;"><?= $dest['name'] ?></h3>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 15px;"><?= $dest['desc'] ?></p>
                <div style="background: var(--warm-beige); padding: 15px; border-radius: 8px; margin-top: auto; border-left: 4px solid #000;">
                    <strong style="color: var(--earth-brown); display: block; margin-bottom: 5px; font-size: 0.9rem;">Unique Selling Point:</strong>
                    <span style="font-size: 0.9rem; color: #444;"><?= $dest['usp'] ?></span>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <h2 style="border-bottom: 3px solid var(--primary-orange); display: inline-block; padding-bottom: 5px; margin-bottom: 30px;">Tropical Beaches</h2>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
        <?php foreach($beaches as $dest): ?>
        <div class="premium-card">
            <div class="card-img-wrapper">
                <img src="<?= $dest['img'] ?>" alt="<?= $dest['name'] ?>" onerror="this.src='images/image_2.png'">
                <span style="position: absolute; top: 15px; left: 15px; background: #00bcd4; color: white; padding: 5px 12px; border-radius: 20px; font-size: 0.8rem; font-weight: bold;">Beach</span>
            </div>
            <div class="card-content">
                <h3 style="font-size: 1.4rem;"><?= $dest['name'] ?></h3>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin-bottom: 15px;"><?= $dest['desc'] ?></p>
                <div style="background: var(--warm-beige); padding: 15px; border-radius: 8px; margin-top: auto; border-left: 4px solid #00bcd4;">
                    <strong style="color: var(--earth-brown); display: block; margin-bottom: 5px; font-size: 0.9rem;">Unique Selling Point:</strong>
                    <span style="font-size: 0.9rem; color: #444;"><?= $dest['usp'] ?></span>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

</div>

<?php require_once 'includes/footer.php'; ?>