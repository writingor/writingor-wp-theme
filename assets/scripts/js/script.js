'use strict'

/**
 * Set vh onresize
 */
let vh = window.innerHeight * 0.01

window.addEventListener('resize', () => {
    vh = window.innerHeight * 0.01
    document.documentElement.style.setProperty('--vh', `${vh}px`)
},
{
    passive: true
})

/**
 * Add .writingor--scrolled to elements
 * on document scroll
 */
const addScrolledClass = (element, distance) => {
    let scroll = document.documentElement.scrollTop;

    if (scroll > distance) {
        element.classList.add("writingor--scrolled")
    } else {
        element.classList.remove("writingor--scrolled")
    }
}
{
    const header = document.querySelector('.writingor--header-1')
    const toTopButton = document.querySelector('.writingor--to-top')
    const topSection = document.querySelector('#writingor--top-section')
    const aboutSection = document.querySelector('#writingor--about-section')

    if (header) {
        addScrolledClass(header, 100)
    }
    if (toTopButton) {
        addScrolledClass(toTopButton, vh*100)
    }
    if (topSection) {
        addScrolledClass(topSection, vh*70)
    }
    if (aboutSection) {
        addScrolledClass(aboutSection, vh*120)
    }

    window.addEventListener('scroll', () => {
        if (header) {
            addScrolledClass(header, 100)
        }
        if (toTopButton) {
            addScrolledClass(toTopButton, vh*100)
        }
        if (topSection) {
            addScrolledClass(topSection, vh*70)
        }
        if (aboutSection) {
            addScrolledClass(aboutSection, vh*120)
        }
    },
    {
        passive: true
    })
}

/**
 * Append svg
 * to all transitions
 */
{
    const allTransitionsNextFirstType = document.querySelectorAll('.writingor--transition-to-next-1')

    if (allTransitionsNextFirstType) {
        allTransitionsNextFirstType.forEach(transitionBlock => {

            let svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg')
            svg.setAttribute('width', '1920')
            svg.setAttribute('height', '232')
            svg.setAttribute('viewBox', '0 0 1920 232')
            svg.setAttribute('fill', 'none')
            svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg')

            let path = document.createElementNS('http://www.w3.org/2000/svg', 'path')
            path.setAttribute(
                'd', 
                'M500.5 92.5C289.835 81.5981 0 230 0 230V232H1896H1920V92C1920 92 1879.5 103.5 1821 110.5C1660.26 129.734 1635.22 -52.256 1417.5 15.5L860 189C642.283 256.756 645.669 100.013 500.5 92.5Z'
                )

            let fill = '#ffffff'
        
            let currentLayout = transitionBlock.closest('[data-layout=writingor--layout]')

            if (currentLayout) {
                let nextElement = currentLayout.nextElementSibling

                if (nextElement && nextElement.getAttribute('data-layout') === 'writingor--layout') {

                    if (nextElement.classList.contains('writingor--layout')) {
                        let compStyles = window.getComputedStyle(nextElement)
                        fill = compStyles.getPropertyValue('background-color')

                    } else {
                        let innerLayout = nextElement.querySelector('.writingor--layout')

                        if (innerLayout) {
                            let compStyles = window.getComputedStyle(innerLayout)
                            fill = compStyles.getPropertyValue('background-color')
                        }
                    }

                    let nextElementTransition = nextElement.querySelector('.writingor--transition-to-prev-1')

                    if (nextElementTransition) {
                        transitionBlock.setAttribute('style', 'display: none !important')
                    }
                    
                } else {
                    let footer = document.querySelector('.writingor--footer')

                    if (footer) {
                        let compStyles = window.getComputedStyle(footer)
                        fill = compStyles.getPropertyValue('background-color')

                        let footerTransition = footer.querySelector('.writingor--transition-to-prev-1')

                        if (footerTransition) {
                            transitionBlock.setAttribute('style', 'display: none !important')
                        }
                    }
                }
            }

            path.setAttribute('fill', fill)

            svg.append(path)
            
            transitionBlock.append(svg)
        })
    }

    const allTransitionsPrevFirstType = document.querySelectorAll('.writingor--transition-to-prev-1')

    if (allTransitionsPrevFirstType) {
        allTransitionsPrevFirstType.forEach(transitionBlock => {

            let svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg')
            svg.setAttribute('width', '1920')
            svg.setAttribute('height', '234')
            svg.setAttribute('viewBox', '0 0 1920 234')
            svg.setAttribute('fill', 'none')
            svg.setAttribute('xmlns', 'http://www.w3.org/2000/svg')

            let path = document.createElementNS('http://www.w3.org/2000/svg', 'path')
            path.setAttribute(
                'd', 
                'M0 204.77V0H1920V60.1388C1920 60.1388 1787.62 141.197 1684.38 138.17C1567.94 134.757 1537.8 27.3358 1405.73 27.3358C1273.66 27.3358 740.886 264.909 629.828 230.615C518.77 196.321 533.278 153.41 430.724 122.266C328.171 91.1208 0 204.77 0 204.77Z'
                )

            let fill = '#ffffff'
        
            let currentLayout = transitionBlock.closest('[data-layout=writingor--layout]')

            if (currentLayout) {
                let prevElement = currentLayout.previousElementSibling

                if (prevElement && prevElement.getAttribute('data-layout') === 'writingor--layout') {

                    if (prevElement.classList.contains('writingor--layout')) {
                        let compStyles = window.getComputedStyle(prevElement)
                        fill = compStyles.getPropertyValue('background-color')

                    } else {
                        let innerLayout = prevElement.querySelector('.writingor--layout')

                        if (innerLayout) {
                            let compStyles = window.getComputedStyle(innerLayout)
                            fill = compStyles.getPropertyValue('background-color')
                        }
                    }
                    
                } else {
                    let nodes = document.querySelectorAll('.writingor--main [data-layout]')
                    let lastLayoutInMain = nodes[nodes.length - 1]

                    if (lastLayoutInMain && lastLayoutInMain.getAttribute('data-layout') === 'writingor--layout') {

                        if (lastLayoutInMain.classList.contains('writingor--layout')) {
                            let compStyles = window.getComputedStyle(lastLayoutInMain)
                            fill = compStyles.getPropertyValue('background-color')
    
                        } else {
                            let innerLayout = lastLayoutInMain.querySelector('.writingor--layout')
    
                            if (innerLayout) {
                                let compStyles = window.getComputedStyle(innerLayout)
                                fill = compStyles.getPropertyValue('background-color')
                            }
                        }
                    }
                }
            }

            path.setAttribute('fill', fill)

            svg.append(path)
            
            transitionBlock.append(svg)
        })
    }
}

/**
 * Init slider
 * with reviews
 */
{
    const allSliders = document.querySelectorAll('.writingor--layout-6__slider')

    if (allSliders) {
        allSliders.forEach(slider => {
            new Swiper(slider, {
                slidesPerView: 1.2,
                spaceBetween: 24,
                loop: false,
                centeredSlides: true,
                speed: 800,
                draggable: true,
                // autoHeight: true,
                
                keyboard: {
                    enabled: true,
                    onlyInViewport: true,
                },

                breakpoints: {
                    600: {
                        slidesPerView: 1.6,
                        spaceBetween: 36,
                    },
                    800: {
                        slidesPerView: 2.2,
                    },
                    1300: {
                        slidesPerView: 2.6,
                    },
                    1400: {
                        slidesPerView: 3.5,
                    },
                    1500: {
                        slidesPerView: 4,
                    }
                }
            })
        })
    }
}

/**
 * Scroll
 * with animation
 * for anchors
 */
const scrollToWithAnimation = (el, t, state) => {

    if (typeof el === 'string' && el.includes('#')) {
        el = el
    } else if (el) {
        el = el.getAttribute('href')
        el = el.substring(el.indexOf('#'))
    } else {
        return
    }
    if (!document.querySelector(el)) {
        console.warn(`element "${el}" does not exist`)
        return
    }

    let o

    cancelAnimationFrame(o)

    let r = performance.now(),
        n = window.pageYOffset || document.documentElement.scrollTop,
        i = document.querySelector(el).getBoundingClientRect().top - 64

    requestAnimationFrame((function e(c) {
        let l = (c - r) / t
        1 <= l && (l = 1), window.scrollTo(0, n + i * l | 0), 1 > l && (o = requestAnimationFrame(e))
        if (1 <= l && !state) {
            // scrollToWithAnimation(el, t, true)
        }
    }))
}
{
    const allAnchorLinks = document.querySelectorAll('a.writingor--anchor')

    if (allAnchorLinks) {
        allAnchorLinks.forEach(link => {
            if (link) {
                link.addEventListener("click", (e) => {

                    let target = link.getAttribute('href')
                    target = target.substring(target.indexOf('#'))

                    if (document.querySelector(target)) {
                        e.preventDefault()
                        scrollToWithAnimation(link, 500, false)
                    }
                })
            }
        })
    }
}

/**
* Add / remove
* mouse class for hover event
*/

const addMouseClass = (elems) => {
    if (elems && typeof elems !== 'undefined') {
        if (
            "ontouchstart" in window ||
            (window.DocumentTouch && document instanceof DocumentTouch)
        ) {
            elems.forEach((item) => {
                if (item && typeof item !== "undefined") {
                    item.classList.remove("writingor--mouse")
                }
            })
        } else {
            elems.forEach((item) => {
                if (item && typeof item !== "undefined") {
                    if (!item.classList.contains("writingor--mouse")) {
                        item.classList.add("writingor--mouse")
                    }
                }
            })
        }
    }
}
{
    const elems = document.querySelectorAll(
        'a, button, input, textarea, .writingor--card-1'
    )

    addMouseClass(elems)
}

/**
 * Show / hide modals
 */

/**
 * 
 * @param {'document body element'} body 
 * @param {'element'} heap 
 * @param {'element'} overlay 
 * @param {'element'} modal 
 */
function hideModal(modal = false, body = document.querySelector('body'), heap = document.querySelector('#writingor--modals-heap'), overlay = document.querySelector('#writingor--body-overlay')) {
    if (body && heap && overlay && modal) {
        modal.classList.remove('writingor--modal_active')
        overlay.classList.remove('writingor--body-overlay_active')
        body.classList.remove('writingor--body_locked')
        heap.append(modal)
    } else {
        console.warn('Check elements:', body, heap, overlay, modal)
    }
}

/**
 * 
 * @param {'document body element'} body 
 * @param {'element'} heap 
 * @param {'element'} overlay 
 * @param {'element'} button
 */
function showModal(button = false, body = document.querySelector('body'), heap = document.querySelector('#writingor--modals-heap'), overlay = document.querySelector('#writingor--body-overlay')) {

    if (body && heap && overlay && button) {
        let target = button.getAttribute('data-modal') ? button.getAttribute('data-modal') : button.getAttribute('href')
        if (target && target.startsWith('#')) {
            let modal = document.querySelector(target)
            if (modal) {
                overlay.append(modal)
                overlay.classList.add('writingor--body-overlay_active')
                body.classList.add('writingor--body_locked')
                modal.classList.add('writingor--modal_active')
                let hideButton = modal.querySelector('.writingor--modal__hide')
                if (hideButton && !hideButton.classList.contains('writingor--modal__hide_listen')) {
                    hideButton.classList.add('writingor--modal__hide_listen')
                    hideButton.onclick = () => {
                        hideModal(modal)
                    }
                }
            }
        } else {
            console.warn('Element with "data-modal" has no valid "data-modal" or "href" attribute')
        }
    } else {
        console.warn('Check elements:', body, heap, overlay, modal)
    }
}

/**
 * Сall
 * showModal()
 * and
 * hideModal()
 * on page load
 */
{
    const body = document.querySelector('body')

    if (body) {
        let overlay = document.createElement('div')
        overlay.setAttribute('id', 'writingor--body-overlay')
        overlay.setAttribute('class', 'writingor--body-overlay')
        body.append(overlay)
        let heap = document.createElement('div')
        heap.setAttribute('id', 'writingor--modals-heap')
        heap.setAttribute('class', 'writingor--modals-heap')
        body.append(heap)
    }

    const openButtons = document.querySelectorAll('[data-modal]')
    const overlay = document.querySelector('#writingor--body-overlay')
    const heap = document.querySelector('#writingor--modals-heap')

    /**
     * Show
     */
    if (openButtons && overlay && heap && body) {
        openButtons.forEach(button => {
            if (button && typeof button !== 'undefined') {
                button.addEventListener('click', function (e) {
                    e.preventDefault()
                    showModal(button)
                })
            } else {
                console.warn('Element with "data-modal" is undefined')
            }
        })
    } else {
        console.warn('Check elements:', body, heap, overlay, openButtons)
    }

    /**
     * Hide
     */
    if (overlay) {
        overlay.onclick = (e) => {
            if (!e.target.closest('.writingor--modal')) {
                let modals = overlay.querySelectorAll('.writingor--modal')
                if (modals) {
                    modals.forEach(modal => {
                        if (modal && typeof modal !== 'undefined') {
                            hideModal(modal)
                        }
                    })
                }
            }
        }
        document.addEventListener('keydown', function (e) {
            e = e || window.event
            let isEscape = false
            if ('key' in e) {
                isEscape = (e.key === 'Escape' || e.key === 'Esc')
            } else {
                isEscape = (e.keyCode === 27)
            }
            if (isEscape) {
                let modals = overlay.querySelectorAll('.writingor--modal')
                if (modals) {
                    modals.forEach(modal => {
                        if (modal && typeof modal !== 'undefined') {
                            hideModal(modal)
                        }
                    })
                }
            }
        }, {
            passive: true
        })
    } else {
        console.warn('Check elements:', body, heap, overlay, openButtons)
    }
}

/**
 * Element in viewport
 */
function elementInViewport(element) {
    if (element && typeof element !== 'undefined') {
        var top = element.offsetTop
        var left = element.offsetLeft
        var width = element.offsetWidth
        var height = element.offsetHeight
    
        while (element.offsetParent) {
            element = element.offsetParent
            top += element.offsetTop
            left += element.offsetLeft
        }
    
        return (
            top < (window.pageYOffset + window.innerHeight) &&
            left < (window.pageXOffset + window.innerWidth) &&
            (top + height) > window.pageYOffset &&
            (left + width) > window.pageXOffset
        )
    }
}

function elementInViewport_byY(element, percent = 0) {
    let rect = element.getBoundingClientRect()
    let currentPercent = 100 - rect.top / window.innerHeight * 100

    return (currentPercent >= percent)
}

/**
 * Animation
 * on scroll
 */
{
    window.addEventListener('scroll', () => {
        // writingor--card-1
        let cards = document.querySelectorAll('.writingor--card-1')

        if (cards) {
            cards.forEach((card, index) => {
                if (elementInViewport(card) && !card.classList.contains('writingor--visible')) {
                    setTimeout(() => {
                        card.classList.add('writingor--visible')
                    }, index * 200)
                } else if (!elementInViewport(card)) {
                    // card.classList.remove('writingor--visible')
                }
            })
        }

        // writingor--card-2
        let cards2 = document.querySelectorAll('.writingor--card-2')

        if (cards2) {
            cards2.forEach(card => {
                if (elementInViewport_byY(card, 5) && !card.classList.contains('writingor--visible')) {
                    card.classList.add('writingor--visible')
                } else if (!elementInViewport_byY(card, 5)) {
                    // card.classList.remove('writingor--visible')
                }
            })
        }

        // writingor--card-3
        let cards3 = document.querySelectorAll('.writingor--card-3')

        if (cards3) {
            cards3.forEach(card => {
                if (elementInViewport(card) && !card.classList.contains('writingor--visible')) {
                    card.classList.add('writingor--visible')
                } else if (!elementInViewport(card)) {
                    // card.classList.remove('writingor--visible')
                }
            })
        }

        // writingor--card-4
        let cards4 = document.querySelectorAll('.writingor--card-4')

        if (cards4) {
            cards4.forEach((card, index) => {
                if (elementInViewport_byY(card, 10) && !card.classList.contains('writingor--visible')) {
                    setTimeout(() => {
                        card.classList.add('writingor--visible')
                    }, index * 150)
                } else if (!elementInViewport_byY(card, 10)) {
                    // card.classList.remove('writingor--visible')
                }
            })
        }

        // writingor--form-1 in writingor--layout
        let forms = document.querySelectorAll('.writingor--layout .writingor--form-1')

        if (forms) {
            forms.forEach(form => {
                if (elementInViewport_byY(form, 10) && !form.classList.contains('writingor--visible')) {
                    form.classList.add('writingor--visible')
                } else if (!elementInViewport_byY(form, 10)) {
                    // form.classList.remove('writingor--visible')
                }
            })
        }

        // writingor--layout link icons svg path
        let ulLiA = document.querySelectorAll('.writingor--layout ul li a')

        if (ulLiA) {
            ulLiA.forEach(a => {
                if (elementInViewport(a) && !a.classList.contains('writingor--visible')) {
                    a.classList.add('writingor--visible')
                } else if (!elementInViewport(a)) {
                    // a.classList.remove('writingor--visible')
                }
            })
        }
    },
    {
        passive: true
    })
}

/**
 * Send 'send contact & task' form
 */
{
    const forms = document.querySelectorAll('form')

    if (forms) {
        forms.forEach(form => {
            form.onsubmit = (e) => {
                e.preventDefault()

                if (form.classList.contains('writingor--disabled')) {
                    alert('Идёт обработка формы, пожалуйста, подождите')
                    return
                }

                form.classList.add('writingor--disabled')

                let button = form.querySelector('button')

                if (button) {
                    button.textContent = button.getAttribute('data-text-2')
                }

                let data = new FormData(form)
                let check_id = ''
                let modal = e.target.closest('.writingor--modal')

                if (modal) {
                    let id = modal.getAttribute('id')

                    if (id) {
                        check_id = id
                    }
                } else {
                    let parentWithId = e.target.closest('[id]')
                    let id = parentWithId.getAttribute('id')

                    if (id) {
                        check_id = id
                    }
                }

                data.append('check_id', check_id)
                data.append('action', 'send_contact_and_task')

                jQuery.ajax({
                    type: 'post',
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    url: form.getAttribute('action'),
                    data: data,

                    success: function(response) {

                        form.classList.remove('writingor--disabled')

                        if (button) {
                            button.textContent = button.getAttribute('data-text-1')
                        }

                        let p = form.querySelector('.writingor--form-1__response-message')

                        if (p) {
                            p.textContent = response.message
                        }

                        if (response.success) {

                            let inputs = form.querySelectorAll('input[type=text], textarea')

                            if (inputs) {
                                inputs.forEach(input => {
                                    input.value = ''
                                })
                            }
                            
                            if (button) {
                                button.classList.add('writingor--disabled')
                                setTimeout(() => {
                                    button.classList.remove('writingor--disabled')
                                }, 3000)
                            }

                            if (modal) {
                                let hide = modal.querySelector('.writingor--modal__hide')
                                if (hide) {
                                    setTimeout(() => {
                                        hide.click()
                                    }, 3000)
                                }
                            }
                        }
                    }
                })   
            }
        })
    }
}

/**
 * Get more
 * posts portfolio
 */
{
    const moreButton = document.querySelector('.writingor--layout-5__more')

    if (moreButton) {
        
        moreButton.onclick = (e) => {
            e.preventDefault()

            if (moreButton.classList.contains('writingor--disabled')) {
                alert('Идёт обработка запроса, пожалуйста, подождите')
                return
            }

            moreButton.classList.add('writingor--disabled')
            moreButton.textContent = moreButton.getAttribute('data-text-2')

            jQuery.ajax({
                type: 'post',
                dataType: 'json',
                url: writingor__ajax_variables.url,
                data: {
                    action: 'get_more_portfolio_posts',
                    nonce: writingor__ajax_variables.nonce,
                    lang: writingor__ajax_variables.lang,
                    paged: moreButton.getAttribute('data-paged')
                },

                success: function(response) {

                    // console.log(response)

                    moreButton.textContent = moreButton.getAttribute('data-text-1')
                    moreButton.setAttribute('data-paged', response.paged)

                    let cardsBlock = moreButton.closest('.writingor--layout-5').querySelector('.writingor--layout-5__cards')

                    if (cardsBlock) {
                        cardsBlock.insertAdjacentHTML('beforeend', response.html)
                    }

                    setTimeout(() => {
                        moreButton.classList.remove('writingor--disabled')
                    }, 1000)
                }
            })   
        }
    }
}

/**
 * Toggle language switcher list visible
 * @param {*} e - event
 */
function toggleLanguageSwitcherList(e) {
    if (
        e &&
        e.target.closest('.writingor--language-switcher') &&
        !e.target.closest('.writingor--language-switcher__list')
        ) {

        let list = e.target.closest('.writingor--language-switcher').querySelector('.writingor--language-switcher__list')
        
        if (list) {
            list.classList.toggle('writingor--language-switcher__list_active')
        }
    }
}

/**
 * Hide all active
 * language switchers
 */
function hideAllActiveLanguageSwitherLists() {
    let allLanguageSwitcherListActive = document.querySelectorAll('.writingor--language-switcher__list_active')
            
    if (allLanguageSwitcherListActive) {
        allLanguageSwitcherListActive.forEach(list => {
            list.classList.remove('writingor--language-switcher__list_active')
        })
    }
}

/**
 * Hide language all
 * switchers
 */
{
    // on click outside
    document.addEventListener('click', function (e) {
        if (!e.target.closest('.writingor--language-switcher')) {
            hideAllActiveLanguageSwitherLists()
        }
    }, {
        passive: true
    })

    // on esc button
    document.addEventListener('keydown', function (e) {
        e = e || window.event
        let isEscape = false
        if ('key' in e) {
            isEscape = (e.key === 'Escape' || e.key === 'Esc')
        } else {
            isEscape = (e.keyCode === 27)
        }
        if (isEscape) {
            hideAllActiveLanguageSwitherLists()
        }
    }, {
        passive: true
    })
}

/**
 * Show mobile menu
 * @param {*} event - event prevent
 */
function showMobileMenu(event, prevent = true) {
    if (event && prevent) {
        event.preventDefault()
    }

    let menu = document.querySelector('.writingor--menu-1')

    if (menu) {
        menu.classList.add('writingor--menu-1_active')
    }

    let body = document.querySelector('body')

    if (body) {
        body.classList.add('writingor--body_locked')
    }
}

/**
 * Hide mobile menu
 * @param {*} event - event prevent
 */
function hideMobileMenu(event, prevent = true) {
    if (event && prevent) {
        event.preventDefault()
    }

    let menu = document.querySelector('.writingor--menu-1')

    if (menu) {
        menu.classList.remove('writingor--menu-1_active')
    }

    let body = document.querySelector('body')

    if (body) {
        body.classList.remove('writingor--body_locked')
    }
}

/**
 * Call hiding menu on doc
 * events
 */
{
    // on esc button
    document.addEventListener('keydown', function (e) {
        e = e || window.event
        let isEscape = false
        if ('key' in e) {
            isEscape = (e.key === 'Escape' || e.key === 'Esc')
        } else {
            isEscape = (e.keyCode === 27)
        }
        if (isEscape) {
            hideMobileMenu()
        }
    }, {
        passive: true
    })
}

/**
 * Toggle Mobile Sub Menu
 * @param {*} event - event prevent
 */
function toggleMobileSubMenu(event, prevent = true) {
    if (event && prevent) {
        event.preventDefault()
    }

    let subMenu = event.target.closest('.writingor--menu-1__menu-list-item_has_children').querySelector('.writingor--menu-1__menu-list')

    if (subMenu) {
        subMenu.classList.toggle('writingor--menu-1__menu-list_active')
    }

    let link = event.target.closest('.writingor--menu-1__menu-list-item_has_children').querySelector('.writingor--menu-1__menu-link')

    if (link) {
        link.classList.toggle('writingor--menu-1__menu-link_active')
    }
}