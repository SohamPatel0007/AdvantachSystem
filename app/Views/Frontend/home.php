<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advantech System | Industrial Machinery</title>
    <meta name="description" content="Advantech System industrial machinery solutions for ceramic and packaging production lines.">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header class="site-header" id="top">
        <div class="container nav-wrap">
            <a href="#top" class="brand" aria-label="Advantech System home">
                <img src="/img/logo.png" alt="Advantech System logo" class="brand-logo" onerror="this.style.display='none'; this.nextElementSibling.style.display='inline';">
                <span class="brand-fallback" style="display:none;">Advantech System</span>
            </a>
            <nav class="site-nav" aria-label="Main navigation">
                <a href="#products">Products</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero-grid">
                <div>
                    <p class="eyebrow">Industrial Automation & Machinery</p>
                    <h1>Reliable Machines for High-Output Production Lines</h1>
                    <p class="hero-copy">Advdantech System delivers practical, durable, and service-focused machinery for ceramic and processing industries.</p>
                    <a href="#products" class="btn btn-primary">Explore Products</a>
                </div>
                <div class="hero-card">
                    <h2>Why Choose Us?</h2>
                    <ul>
                        <li>Application-focused machine design</li>
                        <li>Fast support and custom consultation</li>
                        <li>Direct enquiry over WhatsApp</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="products" class="section">
            <div class="container">
                <div class="section-head">
                    <p class="eyebrow">Products</p>
                    <h2>Featured Machines</h2>
                    <p>Click “Enquire on WhatsApp” under any machine to send a product-specific message.</p>
                </div>

                <div class="product-grid">
                    <article class="product-card">
                        <img src="/img/belt machine.png" alt="Belt Machine" onerror="this.src='/img/belt machine.jpg'">
                        <div class="product-body">
                            <h3>Belt Machine</h3>
                            <p>Designed for stable feed handling with consistent movement and low maintenance requirements.</p>
                            <button class="btn btn-outline js-open-enquiry" data-product="Belt Machine">Enquire on WhatsApp</button>
                        </div>
                    </article>

                    <article class="product-card">
                        <img src="/img/belt machine 2.png" alt="Belt Machine 2" onerror="this.src='/img/belt machine 2.jpg'">
                        <div class="product-body">
                            <h3>Belt Machine 2</h3>
                            <p>Compact angle-frame variant suitable for production lines where footprint and access matter.</p>
                            <button class="btn btn-outline js-open-enquiry" data-product="Belt Machine 2">Enquire on WhatsApp</button>
                        </div>
                    </article>

                    <article class="product-card">
                        <img src="/img/CHIPS MACHINE.png" alt="CHIPS MACHINE" onerror="this.src='/img/CHIPS MACHINE.jpg'">
                        <div class="product-body">
                            <h3>CHIPS MACHINE</h3>
                            <p>Engineered for efficient chip processing workflows with robust body and easy operation.</p>
                            <button class="btn btn-outline js-open-enquiry" data-product="CHIPS MACHINE">Enquire on WhatsApp</button>
                        </div>
                    </article>

                    <article class="product-card">
                        <img src="/img/TILES FILM COATING MACHINE.jpg" alt="TILES FILM COATING MACHINE">
                        <div class="product-body">
                            <h3>TILES FILM COATING MACHINE</h3>
                            <p>High-precision coating setup for tile finishing applications requiring smooth output quality.</p>
                            <button class="btn btn-outline js-open-enquiry" data-product="TILES FILM COATING MACHINE">Enquire on WhatsApp</button>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="about" class="section section-muted">
            <div class="container about-grid">
                <div>
                    <p class="eyebrow">About Advdantech System</p>
                    <h2>Manufacturing Partner Focused on Performance</h2>
                    <p>Inspired by modern industrial websites, this light-themed experience is crafted to present products clearly, simplify enquiries, and help customers connect instantly.</p>
                    <p>We support businesses with practical machinery solutions and quick communication for faster decision-making.</p>
                </div>
                <div class="info-card">
                    <img src="/img/information.jpg" alt="Advantech System information card" onerror="this.style.display='none'; this.parentElement.innerHTML+='<p>Place your information image at /public/img/information.jpg</p>'">
                </div>
            </div>
        </section>

        <section id="contact" class="section contact-section">
            <div class="container contact-grid">
                <div>
                    <p class="eyebrow">Contact</p>
                    <h2>Let’s Discuss Your Requirement</h2>
                    <p>Phone / WhatsApp: <a href="https://wa.me/919879010078" target="_blank" rel="noopener">+91 98790 10078</a></p>
                    <p>Email: <a href="mailto:advantechsystem@hotmail.com">advantechsystem@hotmail.com</a></p>
                </div>
                <form class="contact-form" id="quickEnquiryForm">
                    <h3>Quick Enquiry</h3>
                    <label>
                        Name
                        <input type="text" name="name" required>
                    </label>
                    <label>
                        Phone
                        <input type="tel" name="phone" required>
                    </label>
                    <label>
                        Requirement
                        <textarea name="message" rows="4" required></textarea>
                    </label>
                    <input type="hidden" name="product" value="General Enquiry">
                    <button type="submit" class="btn btn-primary">Send to WhatsApp</button>
                    <p class="form-note">This opens WhatsApp with your message pre-filled.</p>
                </form>
            </div>
        </section>
    </main>

    <div class="modal" id="enquiryModal" aria-hidden="true" role="dialog" aria-labelledby="enquiryTitle">
        <div class="modal-panel">
            <button class="modal-close" id="modalClose" aria-label="Close">&times;</button>
            <h3 id="enquiryTitle">Product Enquiry</h3>
            <form id="productEnquiryForm" class="contact-form compact">
                <label>
                    Product
                    <input type="text" name="productDisplay" id="productDisplay" readonly>
                </label>
                <input type="hidden" name="product" id="productValue">
                <label>
                    Name
                    <input type="text" name="name" required>
                </label>
                <label>
                    Phone
                    <input type="tel" name="phone" required>
                </label>
                <label>
                    Message
                    <textarea name="message" rows="4" placeholder="Please share your quantity, location, and expected timeline." required></textarea>
                </label>
                <button type="submit" class="btn btn-primary">Send Product Enquiry</button>
            </form>
        </div>
    </div>

    <script src="/assets/js/main.js"></script>
</body>
</html>
