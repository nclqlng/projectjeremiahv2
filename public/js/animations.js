document.addEventListener('DOMContentLoaded', function () {
    const allSections = document.querySelectorAll('.services-section');

    // Animate agad 'tong unang section pagkabukas ng page.
    if (allSections.length > 0) {
        // put some delay para smooth 'yung animation.
        setTimeout(() => {
            allSections[0].classList.add('is-visible');
        }, 100);
    }

    // Yung mga ibang section, saka lang mag-a-animate pag na-scroll na.
    const subsequentSections = Array.from(allSections).slice(1);

    if (subsequentSections.length > 0) {
        const observer = new IntersectionObserver(entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            // 'Pag ung 10%  ng section lumabas na sa screen, i-trigger na 'yung animation.
            threshold: 0.1 
        });

        subsequentSections.forEach(section => {
            observer.observe(section);
        });
    }
}); 