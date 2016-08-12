
/**
 * 
 * @param {type} caller
 * @param {type} criteria
 * @param {type} classToAdd
 * @param {type} classToRemove
 * @returns {undefined}
 */
function toggleClassUsingVue(caller, criteria, classToAdd, classToRemove) {
    if (caller !== undefined) {
        //var _util$Vue$util = Vue.util;
        //var addClass = _util$Vue$util.addClass;
        //var removeClass = _util$Vue$util.removeClass;
        //if (hasAllClasses(caller.target.parentElement.parentElement, criteria)) {
        //    toggleClasses(caller.target.parentElement.parentElement, classToAdd, addClass);
        //    toggleClasses(caller.target.parentElement.parentElement, classToRemove, removeClass);
        //}
    }
}

/**
 * Togging classes
 *
 * @param {Element} el
 * @param {String} key
 * @param {Function} fn
 */
function toggleClasses(el, key, fn) {
    key = key.trim();
    if (key.indexOf(' ') === -1) {
        fn(el, key);
        return;
    }

    var keys = key.split(/\s+/);
    for (var i = 0, l = keys.length; i < l; i++) {
        fn(el, keys[i]);
    }
}

/**
 * 
 * @param {type} el
 * @param {type} key
 * @returns {Boolean.hasAllClasses}
 */
function hasAllClasses(el, key) {
    _hasAllClasses = true;
    var keys = key.split(/\s+/);
    for (var i = 0, l = keys.length; i < l; i++) {
        if (!hasClass(el, keys[i])) {
            _hasAllClasses = false;
        }
    }
    return _hasAllClasses;
}

/**
 * 
 * @param {type} target
 * @param {type} className
 * @returns {Boolean}
 */
function hasClass(target, className) {
    if (!target.classList)
        return false;
    return target.classList.contains(className);
}