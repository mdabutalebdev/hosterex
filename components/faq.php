<?php
/**
 * FAQ Component for Hosterex
 * 
 * A premium, responsive accordion-based FAQ section with a call-to-action card.
 */

$faqs = [
    [
        'question' => 'What is Hosterex?',
        'answer' => 'Hosterex is a reliable web hosting provider offering fast, secure, and scalable hosting solutions with expert support for businesses, creators, and organizations worldwide.'
    ],
    [
        'question' => 'How fast is Hosterex hosting?',
        'answer' => 'Our infrastructure is optimized for speed using LiteSpeed web servers, NVMe SSD storage, and advanced caching, ensuring up to 20x faster performance compared to traditional hosting.'
    ],
    [
        'question' => 'Is my website data secure with Hosterex?',
        'answer' => 'Yes, we provide enterprise-grade security including free SSL certificates, proactive DDoS protection, web application firewalls (WAF), and automated daily backups to keep your data safe.'
    ],
    [
        'question' => 'Can I upgrade my hosting plan later?',
        'answer' => 'Absolutely! You can upgrade or downgrade your hosting plan at any time through our client area with zero downtime. Your data remains completely intact during the transition.'
    ],
    [
        'question' => 'How can I contact Hosterex support?',
        'answer' => 'Our expert support team is available 24/7/365 via live chat, support tickets, and email. We pride ourselves on providing quick, helpful responses to any technical or billing questions.'
    ]
];
?>

<div class="component-wrapper">
    <!-- FAQ Section Skeleton -->
    <div class="skeleton-container py-5 md:py-10 bg-[#F8FAFC]">
        <div class="container mx-auto px-10">
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-start">
                <div class="lg:w-[40%] space-y-6">
                    <div class="w-32 h-6 skeleton rounded-full opacity-30"></div>
                    <div class="w-full h-16 skeleton rounded-2xl opacity-50"></div>
                    <div class="w-2/3 h-8 skeleton rounded-xl opacity-20"></div>
                    <div class="w-full h-64 skeleton rounded-[40px] opacity-10"></div>
                </div>
                <div class="lg:w-[60%] space-y-4">
                    <?php for($i=0; $i<5; $i++): ?>
                    <div class="w-full h-20 skeleton rounded-2xl opacity-10"></div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section Real Content -->
    <section class="real-content py-5 md:py-10 bg-[#F8FAFC]">
        <div class="container mx-auto px-10">
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-16 items-start">
                
                <!-- Left Side: Heading & CTA Card -->
                <div class="lg:w-[40%]">
                    <div class="flex items-center space-x-2 mb-6">
                        <div class="w-8 h-8 bg-primary rounded-full flex items-center justify-center text-white">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zm-4 0H9v2h2V9z" />
                            </svg>
                        </div>
                        <span class="text-primary font-bold text-sm tracking-wide">FAQ</span>
                    </div>
                    
                    <h2 class="text-3xl md:text-5xl font-extrabold text-[#111A4C] leading-tight mb-6">
                        Frequently Asked <br class="hidden md:block">
                        <span class="text-primary">Questions</span>
                    </h2>
                    
                    <p class="text-gray-500 text-base md:text-lg mb-8 md:mb-12 leading-relaxed">
                        Find clear answers to common questions about <?php echo APP_NAME; ?>'s hosting services, security, performance, and support—everything you need in one place.
                    </p>
                    
                    <!-- CTA Card -->
                    <div class="relative bg-gradient-to-br from-primary to-[#7DD3FC] rounded-40 p-6 md:p-10 overflow-hidden shadow-2xl shadow-blue-200">
                        <!-- Decorative background blur/circle -->
                        <div class="absolute -top-20 -right-20 w-64 h-64 bg-white/20 rounded-full blur-3xl"></div>
                        <div class="absolute -bottom-20 -left-20 w-64 h-64 bg-white/10 rounded-full blur-3xl"></div>
                        
                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold text-white mb-3">Still have a questions?</h3>
                            <p class="text-white/80 mb-8 max-w-[280px]">
                                Can't find the answer to your question? Send us an email and we'll get back to you as soon as possible!
                            </p>
                            
                            <?php echo render_button(
                                "Contact Us", 
                                "/contact.php", 
                                "black", 
                                "group", 
                                '<svg class="w-5 h-5 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>'
                            ); ?>
                        </div>
                    </div>
                </div>
                
                <!-- Right Side: Accordion -->
                <div class="lg:w-[60%] space-y-3">
                    <?php foreach ($faqs as $index => $faq): ?>
                    <div class="faq-item group bg-white border border-gray-100 rounded-2xl overflow-hidden" data-index="<?php echo $index; ?>">
                        <button class="faq-toggle w-full text-left px-5 py-4 md:px-8 md:py-6 flex items-center justify-between focus:outline-none" onclick="toggleFaq(<?php echo $index; ?>)">
                            <span class="text-base md:text-xl font-bold text-[#111A4C] pr-4">
                                <?php echo $faq['question']; ?>
                            </span>
                            <div class="faq-icon-container flex-shrink-0 w-8 h-8 md:w-10 md:h-10 bg-[#111A4C] rounded-full flex items-center justify-center text-white transition-all duration-500 transform">
                                <svg class="w-4 h-4 md:w-5 md:h-5 faq-icon transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </div>
                        </button>
                        <div class="faq-content max-h-0 overflow-hidden transition-all duration-500 ease-in-out">
                            <div class="px-5 pb-6 md:px-8 md:pb-8 text-gray-500 leading-relaxed text-sm md:text-lg border-t border-gray-50 pt-4 md:pt-6 mt-0">
                                <?php echo $faq['answer']; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
            </div>
        </div>
    </section>
</div>

<script>
function toggleFaq(index) {
    const items = document.querySelectorAll('.faq-item');
    const clickedItem = items[index];
    const content = clickedItem.querySelector('.faq-content');
    const icon = clickedItem.querySelector('.faq-icon');
    const iconContainer = clickedItem.querySelector('.faq-icon-container');
    
    // Check if it's already open
    const isOpen = clickedItem.classList.contains('active');
    
    // Close all other items
    items.forEach((item, i) => {
        if (i !== index) {
            item.classList.remove('active');
            item.querySelector('.faq-content').style.maxHeight = null;
            item.querySelector('.faq-icon').style.transform = 'rotate(0deg)';
            item.querySelector('.faq-icon-container').classList.replace('bg-primary', 'bg-[#111A4C]');
        }
    });
    
    // Toggle clicked item
    if (isOpen) {
        clickedItem.classList.remove('active');
        content.style.maxHeight = null;
        icon.style.transform = 'rotate(0deg)';
        iconContainer.classList.replace('bg-primary', 'bg-[#111A4C]');
    } else {
        clickedItem.classList.add('active');
        content.style.maxHeight = content.scrollHeight + "px";
        icon.style.transform = 'rotate(180deg)';
        iconContainer.classList.replace('bg-[#111A4C]', 'bg-primary');
    }
}
</script>
