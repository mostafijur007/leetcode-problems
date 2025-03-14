/**
 * @param {string} val
 * @return {Object}
 */
var expect = function(val) {
    const throwError = (errorStr) => {throw new Error(errorStr)};
    return {
        'toBe' : (n) => val === n ? true : throwError('Not Equal'),
        'notToBe' : (n) => val !== n ? true :  throwError('Equal'),
    }
};

/**
 * expect(5).toBe(5); // true
 * expect(5).notToBe(5); // throws "Equal"
 */