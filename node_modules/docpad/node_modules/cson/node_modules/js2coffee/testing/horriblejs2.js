//comment 1
module.exports = {
    // comment2
    container: {
        page: {
            numbers: [1,2,3,"four","five"],
            one: ["value"],
            empty: [],
            nestedArray: [
                "abc",
                "nasd",
                {z:0, y: -1},
                [9,8,7, [71,72,73]],
                [9,8,7, [71,72,73]],
                "asdasd"
            ],
            nestedMix: [
                {k1:'v1', 'k2':'v2', k3: {'trippleNested':true, 'list':['i', 'ii']}},
                'v9',
                {k1:'v1', 'k2':'v2', k3: {'trippleNested':true, 'list':['i', 'ii', {a:1},{b:2}]}},
                {k1:'v1', 'k2':'v2', k3: {'trippleNested':true, 'list':['i', 'ii']}},
                {k1:'v1', 'k2':'v2', k3: {'trippleNested':true, 'list':['i', 'ii']}},
                "obj2", "obj3", {a:1, b:2}, "obj4"
            ]
        }
    }
};