/**
 * @param {number[]} arr
 * @param {Function} fn
 * @return {number[]}
 */
var map = function(arr, fn) {
    let transform = [];
    for(let i = 0; i < arr.length; i++){
        transform[i] = fn(arr[i], i)
        //  arr[i] = fn(arr[i], i);
    }

    return transform;
    // return arr;
};