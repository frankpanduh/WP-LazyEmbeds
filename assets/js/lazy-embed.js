document.addEventListener("DOMContentLoaded", function() {
    const lazyContainers = document.querySelectorAll(".wp-lazy-embed-container");

    if('IntersectionObserver' in window) {
        let observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if(entry.isIntersecting) {
                    const iframeSrc = entry.target.getAttribute('data-src');
                    const iframe = document.createElement('iframe');
                    iframe.src = iframeSrc;
                    iframe.setAttribute('frameborder', '0');
                    iframe.setAttribute('allowfullscreen', 'true');
                    iframe.style.width = "100%";
                    iframe.style.height = "400px";
                    entry.target.innerHTML = '';
                    entry.target.appendChild(iframe);
                    observer.unobserve(entry.target);
                }
            });
        });
        lazyContainers.forEach(function(container) {
            observer.observe(container);
        });
    } else {
        // Fallback for old browsers
        lazyContainers.forEach(function(container){
            const iframeSrc = container.getAttribute('data-src');
            const iframe = document.createElement('iframe');
            iframe.src = iframeSrc;
            iframe.setAttribute('frameborder', '0');
            iframe.setAttribute('allowfullscreen', 'true');
            iframe.style.width = "100%";
            iframe.style.height = "400px";
            container.innerHTML = '';
            container.appendChild(iframe);
        });
    }
});