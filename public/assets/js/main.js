(function () {
    const whatsappNumber = '919879010078';

    function toWhatsAppMessage(data) {
        return [
            'New Enquiry - Advdantech System',
            `Product: ${data.product || 'General Enquiry'}`,
            `Name: ${data.name}`,
            `Phone: ${data.phone}`,
            `Message: ${data.message}`
        ].join('\n');
    }

    function submitToWhatsApp(form) {
        const formData = new FormData(form);
        const data = Object.fromEntries(formData.entries());
        const message = encodeURIComponent(toWhatsAppMessage(data));
        const url = `https://wa.me/${whatsappNumber}?text=${message}`;
        window.open(url, '_blank', 'noopener');
    }

    const quickForm = document.getElementById('quickEnquiryForm');
    if (quickForm) {
        quickForm.addEventListener('submit', function (event) {
            event.preventDefault();
            submitToWhatsApp(quickForm);
            quickForm.reset();
        });
    }

    const modal = document.getElementById('enquiryModal');
    const modalClose = document.getElementById('modalClose');
    const productDisplay = document.getElementById('productDisplay');
    const productValue = document.getElementById('productValue');
    const productForm = document.getElementById('productEnquiryForm');

    function openModal(productName) {
        if (!modal) return;
        productDisplay.value = productName;
        productValue.value = productName;
        modal.classList.add('show');
        modal.setAttribute('aria-hidden', 'false');
    }

    function closeModal() {
        if (!modal) return;
        modal.classList.remove('show');
        modal.setAttribute('aria-hidden', 'true');
        if (productForm) productForm.reset();
    }

    document.querySelectorAll('.js-open-enquiry').forEach(function (button) {
        button.addEventListener('click', function () {
            const productName = button.getAttribute('data-product') || 'General Enquiry';
            openModal(productName);
        });
    });

    if (modalClose) modalClose.addEventListener('click', closeModal);
    if (modal) {
        modal.addEventListener('click', function (event) {
            if (event.target === modal) closeModal();
        });
    }

    if (productForm) {
        productForm.addEventListener('submit', function (event) {
            event.preventDefault();
            submitToWhatsApp(productForm);
            closeModal();
        });
    }
})();
