/*
 * Determine if an array contains an object with the given property value.
 *
 * Example:
 *
 * {{if fruits|has>color>red}}
 *    ...
 * {{/if}}
 */
// Example: {{if fruits|has>color>red}} ... {{/if}}

Mark.pipes.has = function (arr, prop, val) {
    return arr.some(function (item) {
        return item[prop] == val;
    });
};
Mark.pipes.date = function (date) {
    return new Date(+date || date).toLocaleDateString();
};

Mark.pipes.headline = function (str) {
    var exclude = "a,an,the,for,to,of,on,as,in,and,from".split(",");

    return str.replace(/\b\w+/g, function (s, i) {
        if (exclude.indexOf(s) > -1 && i > 0) {
            return s;
        }
        return s.charAt(0).toUpperCase() + s.slice(1);
    });
};