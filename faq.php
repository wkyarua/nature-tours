<?php require_once 'includes/header.php'; ?>

<section class="hero" style="background: linear-gradient(rgba(62,39,35,0.8), rgba(62,39,35,0.8)), url('images/image_1.png') center/cover; padding: 100px 0; text-align: center;">
    <h1 style="color: var(--primary-yellow);">Why Choose Us & FAQs</h1>
    <p style="color: white; font-size: 1.2rem;">Everything you need to know about traveling with Naturewise Tours.</p>
</section>

<section class="container section-padding">
    
    <div style="text-align: center; margin-bottom: 50px;">
        <h2 style="color: var(--primary-orange);">The Naturewise Difference</h2>
        <p style="max-width: 800px; margin: auto; color: var(--text-muted);">We don't just take you on a tour; we provide an unforgettable East African experience.</p>
    </div>

    <div class="faq-container">
        
        <div class="faq-item">
            <button class="faq-question">Local East African Expertise</button>
            <div class="faq-answer">
                <p>As a proudly East African tour company, we offer deep local knowledge of destinations, wildlife, culture, and hidden gems that only experienced regional guides truly understand.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Fast & Reliable Communication</button>
            <div class="faq-answer">
                <p>We respond quickly to inquiries, provide clear information, and support you before, during, and after your trip.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Flexible & Tailor-Made Safaris</button>
            <div class="faq-answer">
                <p>Every traveler is unique. We customize itineraries to match your interests, schedule, and budget from wildlife safaris to cultural adventures and beach holidays.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Professional & Knowledgeable Guides</button>
            <div class="faq-answer">
                <p>Our skilled local guides are highly trained, passionate about nature, and experienced in delivering safe, informative, and unforgettable safari experiences.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Transparent Pricing & Sustainability</button>
            <div class="faq-answer">
                <p>No hidden costs.We provide clear, detailed quotations so you know exactly what you're paying for. Furthermore, we respect nature, wildlife, and local communities.Our tours promote responsible tourism that protects East Africa’s natural beauty for future generations.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Safety & Comfort First</button>
            <div class="faq-answer">
                <p>Your safety and comfort are our priority.We use well-maintained vehicles and trusted accommodations to ensure a smooth journey.</p>
            </div>
        </div>

        <hr style="border: 0; border-top: 1px solid #ddd; margin: 40px 0;">
        <h3 style="text-align: center; margin-bottom: 30px;">Frequently Asked Questions</h3>

        <div class="faq-item">
            <button class="faq-question">When is the best time to visit Tanzania & Kenya?</button>
            <div class="faq-answer">
                <p>The dry season (June to October) is generally considered the best time for wildlife viewing as animals gather around water sources. However, the Great Migration calving season in the Southern Serengeti (January to February) is also spectacular.</p>
            </div>
        </div>

        <div class="faq-item">
            <button class="faq-question">Do I need a Visa?</button>
            <div class="faq-answer">
                <p>Most international visitors require a visa to enter Tanzania and Kenya. These can usually be obtained online (e-Visa) prior to travel or upon arrival at major airports. We recommend checking with your local embassy for the latest requirements.</p>
            </div>
        </div>

    </div>
</section>

<script>
    document.querySelectorAll('.faq-question').forEach(button => {
        button.addEventListener('click', () => {
            const faqItem = button.parentElement;
            
            // Close other open items
            document.querySelectorAll('.faq-item').forEach(item => {
                if(item !== faqItem) item.classList.remove('active');
            });
            
            // Toggle current item
            faqItem.classList.toggle('active');
        });
    });
</script>

<?php require_once 'includes/footer.php'; ?>