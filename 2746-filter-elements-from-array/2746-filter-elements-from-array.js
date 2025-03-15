/**
 * @param {number[]} arr
 * @param {Function} fn
 * @return {number[]}
 */
var filter = function(arr, fn) {
    let trans = [];
    for(let i = 0; i < arr.length; i++)
    {
        if(fn(arr[i], i)){

        trans.push(arr[i])
        }
    }

    return trans;
};