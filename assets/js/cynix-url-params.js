(function () {
    'use strict';

    var params = new URLSearchParams(window.location.search);

    function get(key, fallback) {
        var value = params.get(key);
        return value && value.trim() ? value.trim() : fallback;
    }

    function initials(name) {
        return name.split(/\s+/).slice(0, 2).map(function (w) {
            return w.charAt(0).toUpperCase();
        }).join('') || 'CI';
    }

    function setText(selector, value) {
        document.querySelectorAll(selector).forEach(function (el) {
            el.textContent = value;
        });
    }

    var businessName = get('bn', 'Cynix Inc Digital Solutions');
    var email = get('e', 'info.cynixinc@gmail.com');
    var phone = get('p', '+94722558244');
    var address = get('a', '267, Jampettah Street, Colombo 13');
    var color = get('c', '#F45B1E');

    setText('.logo-company', businessName);
    setText('.logo-initials', initials(businessName));
    setText('.hero-contact-form-box h3', 'Stay In touch With ' + businessName);
    setText('.contact-information-list li:nth-child(2) p', address);
    setText('.user-box .content h6', businessName);

    document.querySelectorAll('.logo-initials').forEach(function (el) {
        el.style.backgroundColor = color;
    });

    document.documentElement.style.setProperty('--personalization-color', color);

    document.querySelectorAll('a[href^="mailto:"]').forEach(function (el) {
        el.href = 'mailto:' + email;
        if (el.textContent.indexOf('@') !== -1) {
            if (/Send Email/i.test(el.textContent)) {
                el.textContent = 'Send Email: ' + email;
            } else {
                el.textContent = email;
            }
        }
    });

    document.querySelectorAll('a[href^="tel:"]').forEach(function (el) {
        el.href = 'tel:' + phone.replace(/[^\d+]/g, '');
        if (/\d/.test(el.textContent) || /Call Consulting/i.test(el.textContent)) {
            if (/Call Consulting/i.test(el.textContent)) {
                el.textContent = 'Call Consulting: ' + phone;
            } else {
                el.textContent = phone;
            }
        }
    });

    document.querySelectorAll('footer p').forEach(function (el) {
        if (/Copyright/i.test(el.textContent)) {
            el.textContent = 'Copyright \u00a9 2026 ' + businessName + '. All Rights Reserved.';
        }
    });
})();
