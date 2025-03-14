/**
 * @param {integer} init
 * @return { increment: Function, decrement: Function, reset: Function }
 */
var createCounter = function(init) {
    let m = init
    return {
        'increment' : () => {
            return ++init;
        },
        'reset' : () => {
            init = m;
            return m;
        },
        'decrement' : () => {
            return --init;
        },
    }
    
};

/**
 * const counter = createCounter(5)
 * counter.increment(); // 6
 * counter.reset(); // 5
 * counter.decrement(); // 4
 */